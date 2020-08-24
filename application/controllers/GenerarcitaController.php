<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GenerarcitaController extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->model('Perro');
			$this->load->model('Cita');
			$this->load->model('Usuario');
			$this->load->model('Beneficencia');
		}

		function index($id_perro = ""){
			
			if (!$this->session->userdata('user')) {
				redirect("InicioController");
			}
			

			if ($this->session->userdata('user')['Tipo_User'] == 2) { //si es beneficencia, no puede realizar una adopcion
				redirect("InicioController");
			}
			if ($id_perro == null) {
				redirect("InicioController");
			}
			$perro_disponible = $this->Perro->isDisponible($id_perro); //comprobar si el perro en cuestion esta disponible
			if (!$perro_disponible) {
				redirect("InicioController");
			}

			$dato['string'] = "Let's Walk | Generación de cita";
            $dato['css'] = "generarCita";
            $dato['alt_js'] = "<script src=" . base_url() . "private/js/generarCita/index.js" . "></script>";

            //se cargan los dias indisponibles de la beneficencia
            $dato['dias_inv'] = $this->Beneficencia->getDiasInvalidosByIdPerro($id_perro);
            $dato['id_benef'] = $this->Beneficencia->getIdBenefByIdPerro($id_perro);
            $dato['info_perro'] = $this->Perro->getInfoPerroById($id_perro);

            $this->form_validation->set_rules('Fecha','','trim|xss_clean|required|regex_match[/^[0-9]{4}-[0-9]{2}-[0-9]{2}+$/]');
			$this->form_validation->set_rules('Hora', '', 'trim|xss_clean|required|regex_match[/^[0-9]{2}:[0-9]{2}:[0-9]{2}+$/]',
				array('required' => 'Elije un dia valido para poder elegir una hora.')
			);

			if($this->form_validation->run()==false){
				$this->load->view('Templates/header',$dato);
				$this->load->view('adopta/generarCitaView', $dato);
				$this->load->view('Templates/footer',$dato);
			}

			else{
				//echo var_dump($this->input->post());
				$success = $this->Cita->insertNewCita($this->input->post(),$dato['info_perro']);

				if ($success) {
					$id_cita=$this->Cita->getLastIdCita();
					$this->enviarCorreoCita($id_cita);
					$this->load->view('adopta/confirmacionCitaView');//todo salio bien y se manda mensaje de exito
				}
				else
					echo "Hubo error en la DB";
			}

			
		}

		

		function getHorariosByDate(){
			
			if (!$this->session->userdata('user')) {
				redirect("InicioController");
			}
			

			if ($this->input->post('Fecha')) {
				$fecha = $this->input->post('Fecha');
				$id_benef = $this->input->post('Id_Benef');
				$horarios = $this->Beneficencia->makeHorarios($fecha,$id_benef);

				if (!$horarios) {
					echo json_encode("Error: no hay horarios disponibles");
				}
				else{
					echo json_encode($horarios);
				}
			}
			else{
				echo json_encode("Fatal Error: No es post");
			}
		}

		function enviarCorreoCita($id_cita){
			if (!$this->session->userdata('user')) {
				redirect("InicioController");
			}
			//extract($this->session->userdata('user'));
			$token = $this->Usuario->getTokenUserId($this->session->userdata('user')['Id_User']);
			$link= base_url('GenerarcitaController/generarPDF/');
			$link .= "?id_cita=" . $id_cita . "&token=" . $token."&id_user=".$this->session->userdata('user')['Id_User'] ;
			$data['link']=$link;

			$CI = &get_instance();
			$CI->load->helper('url');
			$CI->load->library('session');
			$CI->config->item('base_url');
			$CI->load->library('email');

            $subject = 'Confirmación de Cita (LetsWalk)';

            $msg = $CI->load->view('adopta/correoAdoptaView',$data, true);

            if($CI->email
                    ->from('johndan478@gmail.com')
                    ->to($this->session->userdata('user')['Correo'])
                    ->subject($subject)
                    ->message($msg)
                    ->set_mailtype('html')
                    ->send()){
            	//$this->load->view('Registro/instruccion');
            }
            else{
              echo $CI->email->print_debugger();
            }
		}

		function generarPDF(){
			$id_user = $this->input->get('id_user');
			$id_cita = $this->input->get('id_cita');
			$token = $this->input->get('token');
			$success = $this->Usuario->checkUserToken($id_user,$token);

			if ($success) {
				$Data['Cita']=$this->Cita->getCitaInformacionPDF($id_cita);
				$this->load->view('adopta/printPDF',$Data);
			}
			else{
				redirect("InicioController");
			}
		}


		function generateRandomString($length = 10)
		{
			return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
		}

		function ejemploHorarios(){
			$hora1 = new DateTime('2020-01-04 8:30:00');
			$hora2 = new DateTime('2020-01-04 14:30:00');
			$horaAux = $hora1;
			$array = [];
			while ($horaAux<=$hora2) {
				array_push($array, $horaAux);
				echo "Horario: ".end($array)->format('H:i')."<br>";
				$horaAux->modify('+30 minute');	//se agrega 30 minutos a la hora actual
			}
			//echo $horaAux->format('H:i:s');
		}

}

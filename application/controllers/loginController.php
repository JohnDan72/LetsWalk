<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginController extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('Usuario');
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('url');
		}

		function index(){
			if($this->session->userdata('user')){
	            redirect("InicioController");
			}
			$dato['string'] = "Let's Walk | Inicio de sesión";

			//$this->load->view('Templates/header',$dato);
			$this->load->view('login/loginView', $dato);
			//$this->load->view('Templates/footer');
		}


		function loginUser(){	//Funcion para comprobar correo y contraseña
			//restrict users to go back to login if session has been set
			if($this->session->userdata('user')){	//si ya inicio sesion retorna fatal para redireccionar a inicio
	            echo json_encode("Fatal Error");
			}
			else{
				$this->form_validation->set_rules('Correo', '', 'trim|xss_clean|required');
				$this->form_validation->set_rules('Passwd', '', 'trim|xss_clean|required');

		        if($this->form_validation->run()==false){
					echo json_encode("Error/Primero ingresa la contraseña");
		        }
		        else{

		        	$data=$this->Usuario->confirmarPassCorreo($this->input->post('Correo'),$this->input->post('Passwd'));

		        	if($data == false){
						echo json_encode("Error/Error, contraseña incorrecta");
		        	}
		        	else{ //Exito se introdujo correo y contraseña correctos
		        		$this->session->set_userdata('user', $data);	//se crea variables de sesión

		        		if($data['Tipo_User']==2){//cargarmos la informacion de la beneficencia en 'benef'
		        			$dataB=$this->Usuario->getBeneficenciaByCorreo($this->input->post('Correo'));
		        			$this->session->set_userdata('benef', $dataB);
		        		}
					    echo json_encode($data);
		        	}

		        }
			}
		}
		function checarUser(){	//funcion para checar si existe el correo introducido con Fetch

			$this->form_validation->set_rules('Correo', '', 'trim|xss_clean|required');
			//$this->form_validation->set_rules('Passwd', '', 'trim|xss_clean|required');
			if($this->form_validation->run()==false){
				echo json_encode("Error/Completa el campo de Correo");
			}
			else
			{
				//$data = $_POST['Correo'];
				$data = $this->Usuario->getUserByCorreo($this->input->post('Correo'));
				if ($data == null) {
					echo json_encode("Error/Correo incorrecto");	
				}
				else{
					echo json_encode($data);	//Exito al encontrar el correo
				}
			}
			
		}

		function logout(){
			$this->session->unset_userdata('user');
			$this->session->unset_userdata('benef');
			$this->session->unset_userdata('adopta');
			redirect('InicioController');
		}

		function forgot_password(){

			$this->load->view('login/forgotView.php');
		
		}
}

?>

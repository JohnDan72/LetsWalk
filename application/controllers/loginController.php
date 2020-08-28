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

			$this->load->view('login/forgotView');
		
		}

		function sendMailForgot(){
			//echo "entro en sendMailForgot";
			if ($this->session->userdata('user')) {
				redirect('InicioController');
			}

			if ($this->input->post()) {
				$this->form_validation->set_rules('Correo', '', 'trim|xss_clean|required');

				if($this->form_validation->run()==false){
					//echo "Entro en no form_validation";
					$this->load->view("login/forgotView");
		        }
		        else{
		        	//si todo el post es correcto entonces se procede a confirmar el correo introducido y enviar el correo correspondiente
		        	$correo = $this->input->post('Correo');
		        	$success = $this->Usuario->getUserByCorreo($correo);

		        	if($success){
		        		//Aqui se debe enviar el correo antes
		        		$token_email = $this->generateRandomString(10);
		        		$this->Usuario->updateTokenUser($success['Id_User'], $token_email);
		        		$link = base_url('loginController/restablecerPassword/');
						$link .= "?id=" . $success['Id_User'] . "&token=" . $token_email;
						$data['link'] = $link;

						$CI = &get_instance();
						$CI->load->helper('url');
						$CI->load->library('session');
						$CI->config->item('base_url');
						$CI->load->library('email');

						$subject = 'Bienvenido a LetsWalk';

						$msg = $CI->load->view('login/confirmacion_forgot_pass', $data, true);

						if ($CI->email
							->from(CORREO_FUENTE)
							->to($this->input->post('Correo'))
							->subject($subject)
							->message($msg)
							->set_mailtype('html')
							->send()
						) {
							//$this->load->view('registro/pre-confirmacionView');
							//todo bien, todo correcto, y yo que me alegro
							$data['mail_success'] = 1;
		        			$this->load->view("login/forgotView",$data);
						} else {
							echo $CI->email->print_debugger();
						}
		        	}
		        	else{
		        		$data['mail_success'] = -1;
		        		$this->load->view("login/forgotView",$data);
		        	}
		        }
			}
			//else echo "no es post";
		}
		function restablecerPassword(){
			if ($this->session->userdata('user')) {
				redirect("InicioController");
			}


			$id_user = $this->input->get('id');
			$token = $this->input->get('token');
			$success = $this->Usuario->checkUserToken($id_user,$token);

			if ($success) {
				$data['id_user'] = $id_user;
				$data['token'] = $token;
		        $this->load->view("login/changePasswordView",$data);
			}
			else{
				//redirect("InicioController");
				$data['error_enlace'] = "Enlace caducado";
		        $this->load->view("login/changePasswordView",$data);
			}
		}

		function cambiarPassword(){
			if ($this->session->userdata('user')) {
				redirect("InicioController");
			}

			if ($this->input->post()) {
				//echo "id_user:  ".$this->input->post('Id_User');
				//echo "token:  ".$this->input->post('Token');

				$this->form_validation->set_rules('Id_User', '', 'trim|xss_clean|required');
				$this->form_validation->set_rules('Token', '', 'trim|xss_clean|required');
				$this->form_validation->set_rules('Passwd', '', 'trim|xss_clean|required|min_length[8]');
				$this->form_validation->set_rules('Passwd_1', '', 'trim|xss_clean|required|matches[Passwd]');

				if($this->form_validation->run()==false){
					//echo "no form_validation";
					$data['id_user'] = $this->input->post('Id_User');
					$data['token'] = $this->input->post('Token');
					$this->load->view("login/changePasswordView",$data);
		        }
		        else{
		        	$successToken = $this->Usuario->checkUserToken($this->input->post('Id_User'),$this->input->post('Token'));
		        	if ($successToken) {
		        		$success = $this->Usuario->updatePassword($this->input->post());
			        	if ($success) {
			        		//deshabilitar el token para no volver a cambiarla despues de ya haberla cambiado
			        		$token_email = $this->generateRandomString(10);
			        		$this->Usuario->updateTokenUser($this->input->post('Id_User'), $token_email);
			        		//redirigir a la vista para poner resultado
			        		$data['success_result'] = "Tu contraseña ha sido restablecida correctamente, inicia sesión para comprobarlo.";
			        		$this->load->view("login/changePasswordView",$data);
			        	}
			        	else{
			        		$data['error_change_password']="Parece que hubo un error, inténtalo de nuevo.";
			        		$this->load->view("login/changePasswordView",$data);
			        	}
		        	}
		        	else{
		        		$data['error_enlace'] = "Enlace caducado";
			        	$this->load->view("login/changePasswordView",$data);
		        	}
		        	
		        }

			}
		}

		function generateRandomString($length = 10)
		{
			return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
		}
}

?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('Usuario');
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->load->helper('url');
		}

		function index(){
			if(!$this->session->userdata('user') || $this->session->userdata('user')['scoreTest'] != null){
	            redirect("InicioController");
			}
			$dato['string'] = "Let's Walk | Test";
            $dato['css'] = "test";
            $dato['alt_css'] = "<link rel='stylesheet' type='text/css' href='https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css'>";
			$dato['alt_js'] = "<script src='https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js'></script>".
											"<script src=".base_url()."private/js/test/index.js"."></script>";
			

			$this->load->view('Templates/header',$dato);
			$this->load->view('test/TestView', $dato);
			$this->load->view('Templates/footer');
		}

		function evaluaTestFetch(){ //se calcula el resultado del Test Contestado
				if(!$this->session->userdata('user') || $this->session->userdata('user')['scoreTest'] != null){
		            redirect("InicioController");
				}

				$max_score = $this->input->post('max_score');
				$res = $this->input->post('respuesta'); //se recupera el input en forma de array
				$res = json_decode($res);	//se decodifica el json para ser tratado como object
				$sum = 0; //inicio de suma
				foreach ($res as $value) { //se pasa por cada valor de las respuestas
					$sum+= $value[0];
				}

				$resultadoFinal = (int)(($sum/$max_score)*100); //calculo de resultado en formato de 0 a 100

				//se almacena el resultado en la base de datos
				$successData = $this->Usuario->updateScoreTest($this->session->userdata('user')['Id_User'],$resultadoFinal);
				if ($successData) { //si todo se guarda correctamente se procede a actualizar las variables de sesion
					$this->session->unset_userdata('user');
					$this->session->set_userdata('user',$successData);

					echo json_encode($resultadoFinal);	//se envia el resultado en formato de 0% a 100%
				}
				else{
					echo json_encode("Error/Error al guardar score de usuario");
				}

				
		}
}

?>
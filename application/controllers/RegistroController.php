<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroController extends CI_Controller {
		function __construct(){
			parent::__construct();
		}

		function index(){
			$dato['string'] = "Let's Walk | Registro";
			$dato['css'] = "registro";

			$dato['alt_css'] = "<link rel='stylesheet' type='text/css' href='https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css'>";
			$dato['alt_js'] = "<script src='https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js'></script>" .
							  "<script src=" . base_url() . "private/js/registro/index.js"."></script>" .
							  "<script src='https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/1.0/zxcvbn.min.js'></script>" . 
							  "<script type='text/javascript' src=". base_url() . "private/js/registro/zxcvbn-bootstrap4-strength-meter.js"."></script>".
							  "<script type='text/javascript'>
							  	$(document).ready(function () {
								  $('#StrengthProgressBar').zxcvbnProgressBar({
									  passwordInput: '#Passwd',
									  ratings: ['Muy Débil', 'Débil', 'Ok', 'Fuerte', 'Muy fuerte']
								  });
							  });
						  </script>";

			$this->load->view('Templates/header',$dato);
			$this->load->view('registro/registroView', $dato);
			$this->load->view('Templates/footer');
		}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class loginController extends CI_Controller {
		function __construct(){
			parent::__construct();
		}

		function index(){
			$dato['string'] = "Let's Walk | Inicio de Sesión";

			//$this->load->view('Templates/header',$dato);
			$this->load->view('login/loginView', $dato);
			//$this->load->view('Templates/footer');
		}
}

?>

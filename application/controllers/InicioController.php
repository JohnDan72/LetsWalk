<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InicioController extends CI_Controller {
		function __construct(){
			parent::__construct();
		}

		function index(){
			$dato['string'] = "Let's Walk | Inicio";
			$dato['css'] = "inicio";

			$this->load->view('Templates/header',$dato);
			$this->load->view('Inicio/InicioView', $dato);
			$this->load->view('Templates/footer');
		}
}

?>

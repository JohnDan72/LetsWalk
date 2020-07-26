<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WarningController extends CI_Controller {
		function __construct(){
			parent::__construct();
		}

		function index(){
			$dato['string'] = "Let's Walk | ¡Gracias!";

			//$this->load->view('Templates/header',$dato);
			$this->load->view('Warning/WarningView', $dato);
			//$this->load->view('Templates/footer');
		}
}

?>

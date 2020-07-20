<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NosotrosController extends CI_Controller {
		function __construct(){
			parent::__construct();
		}

		function index(){
			$dato['string'] = "Let's Walk | Nosotros";
			$dato['css'] = "nosotros";

			$this->load->view('Templates/header',$dato);
			$this->load->view('nosotros/nosotrosView', $dato);
			$this->load->view('Templates/footer');
		}
}

?>
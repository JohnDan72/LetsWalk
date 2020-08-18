<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdoptaController extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('Perro');
			$this->load->library('form_validation');
			$this->load->library('pagination');
			$this->load->helper('form');	
			$this->load->helper('url');
			$this->load->helper('file');
		}

		function index(){
			$dato['string'] = "Let's Walk | Adopta";
			$dato['css'] = "adopta";

			$dato['alt_css'] = "<link rel='stylesheet' type='text/css' href='https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css'>";
			$dato['alt_js'] = "<script src='https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js'></script>" .
				"<script src=" . base_url() . "private/js/adopta/index.js" . "></script>";

			$this->load->view('Templates/header', $dato);
			$this->load->view('adopta/adoptaView', $dato);
			$this->load->view('Templates/footer');
		}
	}
?>
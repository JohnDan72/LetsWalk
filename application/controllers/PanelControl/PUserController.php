<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PUserController extends CI_Controller {
		function __construct(){
			parent::__construct();
		}

		function index(){
			redirect("InicioController");
			$dato['string'] = "Let's Walk | Panel de Control";
            $dato['css'] = "panel";
            

			//$dato['alt_css'] = "<link rel='stylesheet' type='text/css' href='https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css'>";
			$dato['alt_js'] = "<script src=" . base_url() . "private/js/panel/beneficencia/index.js" . "></script>";

			$this->load->view('Templates/header',$dato);
			$this->load->view('panel/PanelBenefView', $dato);
			$this->load->view('Templates/footer');
		}
}

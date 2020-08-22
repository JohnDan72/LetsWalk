<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GenerarcitaController extends CI_Controller {
		function __construct(){
			parent::__construct();
		}

		function index(){
			$dato['string'] = "Let's Walk | Generación de cita";
            $dato['css'] = "generarCita";
            $dato['alt_js'] = "<script src=" . base_url() . "private/js/generarCita/index.js" . "></script>";

			$this->load->view('Templates/header',$dato);
			$this->load->view('adopta/generarCitaView', $dato);
			$this->load->view('Templates/footer');
		}
}

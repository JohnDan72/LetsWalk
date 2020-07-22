<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestController extends CI_Controller {
		function __construct(){
			parent::__construct();
		}

		function index(){
			$dato['string'] = "Let's Walk | Test";
            $dato['css'] = "test";
            $dato['alt_css'] = "<link rel='stylesheet' type='text/css' href='https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css'>";
            $dato['alt_js'] = "<script src='https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js'></script>";

			$this->load->view('Templates/header',$dato);
			$this->load->view('test/TestView', $dato);
			$this->load->view('Templates/footer');
		}
}

?>
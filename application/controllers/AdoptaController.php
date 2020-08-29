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
			if (!$this->session->userdata('user')) {
				redirect("loginController");
			}

			$dato['string'] = "Let's Walk | Adopta";
			$dato['css'] = "adopta";

			//$dato['alt_css'] = "<link rel='stylesheet' type='text/css' href='https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css'>";
			$dato['alt_js'] = "<script src=" . base_url() . "private/js/adopta/index.js" . "></script>";

			//----------Quitar esta parte---------
			//$this->load->view('Templates/header', $dato);
			//$this->load->view('adopta/adoptaView', $dato);
			//$this->load->view('Templates/footer');
			//------------------------------------

			
			//$dato['string'] = "aRDog | Adopta";			

			if(!$this->session->userdata('adopta'))
				$this->session->set_userdata('adopta',array('filtro' => 1));
			//--------------------------------------------------------------
	        //--------------------------------------------------------------
			// init params
		      $params = array();
		      $limit_per_page = 6;
		      $total_records=0;
        	  $page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0; //indice que ayuda a comprobar la pagina actual


			$this->form_validation->set_rules('Filtro', '', 'trim|xss_clean|required');

			if($this->form_validation->run()==false){//caso cuando se esta paginando con filtro actual
				
		        $filtro = $this->session->userdata('adopta')['filtro'];
		        //init params
		        $total_records = $this->Perro->getNumRegistrosFiltro($filtro);
		     
		        if ($total_records > 0){
		            // obtener los registros dependiendo de la página actual
		            $params["results"] = $this->Perro->getPaginationPerrosFiltro($filtro,$limit_per_page, $page*$limit_per_page);
		            //echo var_dump($params['results']);
		            $params["fotosCarousel"] = $this->loadPhotosPerros($params["results"]);
		        }

		        $params['Filtro']=$filtro;
	        }
	        else{//caso cuando se selecciona un nuevo filtro

	        	$newDataAdopta=array('filtro' => $this->input->post('Filtro') );
	        	$this->session->set_userdata('adopta', $newDataAdopta);//cargamos la info a la sesión
	        	
	        	//init params
		        $total_records = $this->Perro->getNumRegistrosFiltro($this->input->post('Filtro'));
		     
		        if ($total_records > 0){
		            // obtener los registros dependiendo de la página actual
		            $params["results"] = $this->Perro->getPaginationPerrosFiltro($this->input->post('Filtro'),$limit_per_page, $page*$limit_per_page);
		            //echo var_dump($params['results']);
		            $params["fotosCarousel"] = $this->loadPhotosPerros($params["results"]);
	        	}
	        	$params['Filtro']=$this->input->post('Filtro');
	        }
	        if($total_records>0){

	        	//obtener los datos de la beneficencia a la que pertenece cada perro
		        //$params["beneficencias"]=$this->Perro->getBenefPerro($params["results"]);
        		
        		$config['base_url'] = base_url() . 'AdoptaController/index';
	            $config['total_rows'] = $total_records;
	            $config['per_page'] = $limit_per_page;
	            $config["uri_segment"] = 3;

        		// configuracion personalizada de paginación
	            $config['num_links'] = 2;
	            $config['use_page_numbers'] = TRUE;
	            $config['reuse_query_string'] = TRUE;
	             
	            $config['full_tag_open'] = '<ul class="pagination d-flex justify-content-center">';
	            $config['full_tag_close'] = '</ul>';
	             
	            $config['first_link'] = 'Primera página';
	            $config['first_tag_open'] = '<li class="page-item">';
	            $config['first_tag_close'] = '</li>';
	             
	            $config['last_link'] = 'Última página';
	            $config['last_tag_open'] = '<li class="page-item">';
	            $config['last_tag_close'] = '</li>';
	             
	            $config['next_link'] = 'Next';
	            $config['next_tag_open'] = '<li class="page-item">';
	            $config['next_tag_close'] = '</li>';
	 
	            $config['prev_link'] = 'Previus';
	            $config['prev_tag_open'] = '<li class="page-item">';
	            $config['prev_tag_close'] = '</li>';
	 
	            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="!#">';
	            $config['cur_tag_close'] = '</a></li>';
	 
	            $config['num_tag_open'] = '<li class="page-item">';
	            $config['num_tag_close'] = '</li>';

	            $this->pagination->initialize($config);
	                 
	            // construir los link de paginación
	            $params["links"] = $this->pagination->create_links();
	        }
	 		
	     
	        $this->load->view('Templates/header',$dato);
			$this->load->view('Adopta/AdoptaView', $params);
			$this->load->view('Templates/footer');
			//--------------------------------------------------------------
	        //--------------------------------------------------------------
	        
		}

		function filtrar(){
			echo "Entró en filtrado<br><br>";
			echo var_dump($this->input->post());
		}

		function loadPhotosPerros($perros){
			$ind = 0;
			$fotos;
			//echo var_dump($perros);
			foreach ($perros as $perro) {
				//carpeta para listar
				$carpeta = BASEPATH."../private/files/perros/".$perro['Id_Perro'];
				//carpeta para mostrar en view
				$carpeta2 = base_url()."private/files/perros/".$perro['Id_Perro'];
				$fotos[$ind] = $this->listarArchivos($carpeta,$carpeta2);
				$ind++;
			}
			return $fotos;
		}

		function listarArchivos( $path,$carpeta2 ){
		    // Abrimos la carpeta que nos pasan como parámetro
		    $ind = 1;
		    $dataReturn = "";
		    $dir = opendir($path);
		    // Leo todos los ficheros de la carpeta
		    while ($elemento = readdir($dir)){
		        // Tratamos los elementos . y .. que tienen todas las carpetas
		        if( $elemento != "." && $elemento != ".."){
		            // Si es una carpeta
		            if( is_dir($path.$elemento) ){
		                // Muestro la carpeta
		                echo "<p><strong>CARPETA: ". $elemento ."</strong></p>";
		            // Si es un fichero
		            } else {
		                // Muestro el fichero
		                $activeAux = ($ind == 1)? "active":"";
		                $dataReturn .='	<div class="carousel-item '.$activeAux.'">
                                        	<img src="'.$carpeta2.'/'.$elemento.'" class="d-block w-100" alt="...">
                                    	</div>';
                                    	$ind++;
		            }
		        }
		    }
		    return $dataReturn;
		}

		/*
			IMG DEL CAROUSEL DESDE VIEW
									<div class="carousel-item active">
                                        <img src="<?= base_url() ?>private/img_perros/<?= $fila->Nombre_Foto_File;?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= base_url() ?>private/img_perros/<?= $fila->Nombre_Foto_File;?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= base_url() ?>private/img_perros/<?= $fila->Nombre_Foto_File;?>" class="d-block w-100" alt="...">
                                    </div>
			
		*/
	}
?>
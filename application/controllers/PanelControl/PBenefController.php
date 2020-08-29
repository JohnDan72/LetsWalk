<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PBenefController extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('Usuario');
		    $this->load->model('Perro');
		    $this->load->model('Cita');
		    $this->load->library('form_validation');
		    $this->load->helper('form');
		    $this->load->helper('url');
		    $this->load->helper('file');
		}

		function index(){

			if (!$this->session->userdata('user') || $this->session->userdata('user')['Tipo_User'] != 2) {
				redirect("InicioController");
			}

			$dato['string'] = "Let's Walk | Panel de Control Benef";
            $dato['css'] = "panel";
			//$dato['alt_css'] = "<link rel='stylesheet' type='text/css' href='https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css'>";
			$dato['alt_js'] = "<script src=" . base_url() . "private/js/panel/beneficencia/index.js" . "></script>";

			if($this->session->userdata('benef')['Status']==2){

				$this->form_validation->set_rules('Activa', '','required');

				switch($this->input->post('Activa')){
					case '1': //Agregar Perro
					//echo "var dum:  ".var_dump($this->input->post());
					//echo "<br><br><br>";
					//echo "var dum2:  ".var_dump($_FILES);
                        if($this->agregarNuevoPerro()>0){
                            $dato['actDatosCorrect']="REGISTRO COMPLETADO";
                            $this->load->view('Templates/header',$dato);
                         	$this->load->view('panel/PanelBenefView',$dato);
                         	$this->load->view('Templates/footer');
                        }
                        else{
                            $dato['actDatosIncorrect']="ERROR";
                            $this->load->view('Templates/header',$dato);
                            $this->load->view('panel/PanelBenefView',$dato);
                            $this->load->view('Templates/footer');
                        }
                    break;

                    case '2'://Gestionar Citas
                        $this->load->view('Templates/header',$dato);
                        $this->load->view('panel/PanelBenefView',$dato);
                        $this->load->view('Templates/footer');
                    break;

                    case '3'://Modificar Informacion Usuario
                    	redirect("InicioController");
                    	/*
                        if($this->actualizarInfoPersonal()>0){
                            $dato['actDatosCorrectU']="DATOS ACTUALIZADOS";
                         	$this->load->view('Templates/header',$dato);
                         	$this->load->view('panel/PanelBenefView',$dato);
                         	$this->load->view('Templates/footer');
                        }
                        else{
                        	 $dato['actDatosIncorrectU']="SIN CAMBIOS";
                         	$this->load->view('Templates/header',$dato);
                         	$this->load->view('panel/PanelBenefView',$dato);
                         	$this->load->view('Templates/footer');
                       	}*/
                    break;

                    case '4'://Modificar Informacion Beneficencia
                    	redirect("InicioController");
                    	/*
                        if($this->actualizarInfoBenef()>0){
                         	$dato['actDatosCorrectB']="DATOS ACTUALIZADOS";
                         	$this->load->view('Templates/header',$dato);
                         	$this->load->view('panel/PanelBenefView',$dato);
                         	$this->load->view('Templates/footer');
                       	}
                       	else{
                         	$dato['actDatosIncorrectB']="SIN CAMBIOS";
                         	$this->load->view('Templates/header',$dato);
                         	$this->load->view('panel/PanelBenefView',$dato);
                         	$this->load->view('Templates/footer');
                       	}*/
                    break;

                    case '5'://Cambiar Contraseña
                    	redirect("InicioController");
                    	/*
                     	$retorno=$this->cambiarPassword();
                        if($retorno>0){
                        	$dato['actPasswdCorrect']="CONTRASEÑA ACTUALIZADA";
                        	$this->load->view('Templates/header',$dato);
                         	$this->load->view('panel/PanelBenefView',$dato);
                         	$this->load->view('Templates/footer');
                       	}
                        else if($retorno==-2){
                        	$dato['actPasswdIncorrect']="CONTRASEÑA SIN CAMBIOS";
                         	$this->load->view('Templates/header',$dato);
                         	$this->load->view('panel/PanelBenefView',$dato);
                         	$this->load->view('Templates/footer');
                       	}
                       	else{
                         	$this->load->view('Templates/header',$dato);
                         	$this->load->view('panel/PanelBenefView');
                         	$this->load->view('Templates/footer');
                       	}
                       	*/
                    break;

                    default://default
                       	$this->load->view('Templates/header',$dato);
                       	$this->load->view('panel/PanelBenefView',$dato);
                       	$this->load->view('Templates/footer');
				}
			}	
		}

		function agregarNuevoPerro(){
            $this->form_validation->set_rules('Nombre_Perro', '', 'trim|xss_clean|required');
            $this->form_validation->set_rules('Raza'		, '', 'trim|xss_clean|required');
            $this->form_validation->set_rules('Edad'		, '', 'trim|xss_clean|required');
            $this->form_validation->set_rules('DescripcionP'	, '', 'trim|xss_clean|required');
            $this->form_validation->set_rules('SexoP'		, '', 'trim|xss_clean|required');
            $this->form_validation->set_rules('Nombre_Foto_File'	, '', 'callback_file_check');

            $this->form_validation->set_rules('Mestizo'		, '', 'trim|xss_clean|max_length[1]|regex_match[/^[1]{1}+$/]');
            $this->form_validation->set_rules('Raza2'		, '', 'trim|xss_clean');
            $this->form_validation->set_rules('Nivel_E'		, '', 'trim|xss_clean|required');
            $this->form_validation->set_rules('Sociabilidad'		, '', 'trim|xss_clean|required');
            $this->form_validation->set_rules('Tamanio'		, '', 'trim|xss_clean|required');
            $this->form_validation->set_rules('Tipo_Pelaje'		, '', 'trim|xss_clean|required');

            //$this->form_validation->set_rules('Nombre_Foto_File2'	, '', '');
            //$this->form_validation->set_rules('Nombre_Foto_File3'	, '', '');

            $this->form_validation->set_rules('V_Triple'		, '', 'trim|xss_clean|max_length[1]|regex_match[/^[1]{1}+$/]');
            $this->form_validation->set_rules('V_Mpuppy'		, '', 'trim|xss_clean|max_length[1]|regex_match[/^[1]{1}+$/]');
            $this->form_validation->set_rules('V_Quintuple'		, '', 'trim|xss_clean|max_length[1]|regex_match[/^[1]{1}+$/]');
            $this->form_validation->set_rules('V_Sectuple'		, '', 'trim|xss_clean|max_length[1]|regex_match[/^[1]{1}+$/]');
            $this->form_validation->set_rules('Desp_Ext'		, '', 'trim|xss_clean|max_length[1]|regex_match[/^[1]{1}+$/]');
            $this->form_validation->set_rules('Desp_Int'		, '', 'trim|xss_clean|max_length[1]|regex_match[/^[1]{1}+$/]');
            $this->form_validation->set_rules('Esterilizacion'		, '', 'trim|xss_clean|max_length[1]|regex_match[/^[1]{1}+$/]');
            $this->form_validation->set_rules('Carnet_Fisico'		, '', 'trim|xss_clean|max_length[1]|regex_match[/^[1]{1}+$/]');


       		if($this->form_validation->run()==false){
            	return -1;
        	}
         	else{
         		//primero se sube la informacion del perro
         		extract($this->session->userdata('benef'));
	            $success = $this->Perro->insertNewDog($this->input->post(),$Id_Beneficencia,$_FILES['Nombre_Foto_File']['name'][0]);

	            
	            if ($success > 0) {
	            	$carpeta = BASEPATH."../private/files/perros/".$success;
       				//echo "Carpeta: $carpeta";
					if (!file_exists($carpeta)) {
					    mkdir($carpeta, 0777, true);
					    //echo("<br><br>Entro en mkdir");
					}
	            	
					$filesCount = count($_FILES['Nombre_Foto_File']['name']);
					$band = false;
		            for($i = 0; $i < $filesCount; $i++){
		                $_FILES['userFile']['name'] = $_FILES['Nombre_Foto_File']['name'][$i];
		                $_FILES['userFile']['type'] = $_FILES['Nombre_Foto_File']['type'][$i];
		                $_FILES['userFile']['tmp_name'] = $_FILES['Nombre_Foto_File']['tmp_name'][$i];
		                $_FILES['userFile']['error'] = $_FILES['Nombre_Foto_File']['error'][$i];
		                $_FILES['userFile']['size'] = $_FILES['Nombre_Foto_File']['size'][$i];

		                //Configuración de Subir Archivos
		               	$config['upload_path']   = $carpeta;
		               	$config['allowed_types'] = 'gif|jpg|png';
		               	$config['max_size']     = '5120'; //in KB
		                
		                $this->load->library('upload', $config);
		                $this->upload->initialize($config);
		                if($this->upload->do_upload('userFile')){
		                    $band = $band || true;
		                }
		            }
	            	
	               	if($band) {
		                return 1;
	            	}
	            	else{
	            		echo $this->upload->display_errors();
	            		$this->removeDir($carpeta);
	            		$this->Perro->deletePerroById($success);
	                   	return -1;
	               	}
	            }
	            else return -1;
	            
	            //si todo sale bien regresa un 1 positivo
          		
         	}
       	}

       	function mkDirPerroPrueba(){
       		redirect("InicioController");

       		$carpeta = BASEPATH."../private/files/perros/12";
       		echo "Carpeta: $carpeta";
					if (!file_exists($carpeta)) {
					    mkdir($carpeta, 0777, true);
					    echo("<br><br>Entro en mkdir");
					}
       	}

       	function removeDir($dir) {
           $files = array_diff(scandir($dir), array('.','..'));
            foreach ($files as $file) {
              (is_dir("$dir/$file")) ? $this->removeDir("$dir/$file") : unlink("$dir/$file");
            }
            return rmdir($dir);
        }
    public function file_check($str){
	       $allowed_mime_type_arr = array('image/jpeg','image/pjpeg','image/png','image/x-png');
	       $mime = get_mime_by_extension($_FILES['Nombre_Foto_File']['name'][0]);
	       if(isset($_FILES['Nombre_Foto_File']['name'][0]) && $_FILES['Nombre_Foto_File']['name'][0]!=""){
	           if(in_array($mime, $allowed_mime_type_arr)){
	               return true;
	           }else{
	               $this->form_validation->set_message('file_check', 'Solo se aceptan estos formatos: jpg/png.');
	               return false;
	           }
	       }else{
	           $this->form_validation->set_message('file_check', 'Por favor elija una imagen');
	           return false;
	       }
	}
}

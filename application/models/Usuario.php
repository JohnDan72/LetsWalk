<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->library('encryption');
		}

		function getUserByCorreo($correo){
			return $this->db->get_where('Usuario', "Correo='$correo'")->row_array();
		}

		function getBeneficenciaByCorreo($correo){

			return $this->db->get_where('Beneficencia',"CorreoB='$correo'")->row_array();
		}

		function confirmarPassCorreo($correo, $passw){
			$confirmPass="";

			//se obtiene la contraseña del user
			$result= $this->db->query("SELECT Passwd FROM Usuario WHERE Correo='$correo';")->row_array();
			//desencriptando contraseña para comparación
            $confirmPass= $this->encryption->decrypt($result['Passwd']);


    		if($passw==$confirmPass){
			return $this->db->get_where('Usuario', "Correo='$correo'")->row_array();
    		}
    		else{return false;}
		}
		function updateScoreTest($id_user,$score){
			$success = $this->db->query("UPDATE usuario SET ScoreTest=$score WHERE Id_User=$id_user;");
			if ($success) {
				return $this->db->get_where("Usuario","Id_User = $id_user")->row_array();
			}
			else{
				return false;
			}
		}

		function insertUserTemp($post, $token){
			unset($post['Passwd_1'],$post['term'],$post['action'],$post['g-recaptcha-response']);
			$post['Fecha_Creacion']=$this->db->query("SELECT now() as 'fecha';")->row_array()['fecha'];
			$post['Passwd'] = $this->encryption->encrypt($post['Passwd']);
			$post['Tipo_User'] = 1;
			$post['Status'] = 0;
			$post['token_email'] = $token;
			return $this->db->insert('Usuario',$post);
		}

		function getIdUserByCorreo($correo){
    		return $this->db->get_where('Usuario',"Correo='$correo'")->row_array()['Id_User'];
		}

		function confirmarCuentaByIdToken($id,$token){
			return $this->db->get_where("Usuario","Id_User = $id AND token_email = '".$token."'")->row_array();
		}

		function getStatusById($id){
			return $this->db->get_where('Usuario',"Id_User=$id")->row_array()['Status'];
		}

		function updateUserToActive($correo){ //activar un usuario que confirmó su correo

			$this->db->query("UPDATE usuario SET Status=1 WHERE Correo='$correo';");
		}

}
?>
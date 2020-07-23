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
			$result= $this->db->query("
				SELECT AES_DECRYPT(Passwd, 'letswalk1234') as Pass
				FROM Usuario 
				WHERE Correo='$correo';
			")->row_array();

            //$confirmPass= $this->encryption->decrypt($result['Passwd']);//desencriptando
            $confirmPass= $result['Pass'];//desencriptando

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

}
?>
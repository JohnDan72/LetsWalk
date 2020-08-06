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

		function insertBenefTemp($post, $token){
			unset($post['Passwd_1'],$post['term'],$post['action'],$post['g-recaptcha-response']);
			$postBenef = $post;
			$postDireccion = $post;

			//Se eliminan registros innecesarios para user
			unset(	$post['NombreB'],
					$post['DescripcionB'],
					$post['TelefonoB'],
					$post['Calle'],
					$post['Num_Ext'],
					$post['Colonia'],
					$post['Localidad'],
					$post['Municipio'],
					$post['CP']
				);
			//Se eliminan registros innecesarios para beneficencia
			unset(	$postBenef['Ap_Paterno'],
					$postBenef['Ap_Materno'],
					$postBenef['Nombre'],
					$postBenef['Passwd'],
					$postBenef['Correo'],
					$postBenef['Fecha_Nacimiento'],
					$postBenef['Sexo_b'],
					$postBenef['Telefono'],
					$postBenef['Calle'],
					$postBenef['Num_Ext'],
					$postBenef['Colonia'],
					$postBenef['Localidad'],
					$postBenef['Municipio'],
					$postBenef['CP']
				);
			//Se eliminan registros innecesarios para direccion
			unset(	$postDireccion['Ap_Paterno'],
					$postDireccion['Ap_Materno'],
					$postDireccion['Nombre'],
					$postDireccion['Passwd'],
					$postDireccion['Correo'],
					$postDireccion['Fecha_Nacimiento'],
					$postDireccion['Sexo_b'],
					$postDireccion['Telefono'],
					$postDireccion['NombreB'],
					$postDireccion['DescripcionB'],
					$postDireccion['TelefonoB']
				);
			$this->db->trans_start();
			//----Queries en transaction
				$fechaNow = $this->db->query("SELECT now() as 'fecha';")->row_array()['fecha'];
				//Se asignan campos faltantes para user
				$post['Fecha_Creacion'] = $fechaNow;
				$post['Passwd'] = $this->encryption->encrypt($post['Passwd']);
				$post['Tipo_User'] = 2;
				$post['Status'] = 0;
				$post['token_email'] = $token;
				$post['Sexo'] = $post['Sexo_b'];
				unset($post['Sexo_b']);
				//Se asignan campos faltantes para beneficencia
				$postBenef['Fecha_Creacion'] = $fechaNow;
				$postBenef['CorreoB'] = $post['Correo'];
				$postBenef['Status'] = 0;

				//se crea el usuario
				$this->db->insert('Usuario',$post);
				$postDireccion['Id_Direccion'] = $this->db->get_where("Usuario","Correo = '".$post['Correo']."'")->row_array()['Id_User'];
				//se inserta la direccion con el Id del usuario creado
				$this->db->insert('Direccion',$postDireccion);
				$postBenef['Id_Direccion'] = $postDireccion['Id_Direccion'];
				//se inserta por último la beneficencia nueva
				$this->db->insert('Beneficencia',$postBenef);
			//----Fin de Queries en transaction
			$this->db->trans_complete();

			//se comprueba si la transacción tuvo Éxito
			if ($this->db->trans_status() === FALSE)
			{
			    return false;
			}
			else{
				return true;
			}
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
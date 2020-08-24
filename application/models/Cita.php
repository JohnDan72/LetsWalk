<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cita extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->library('encryption');
		}

		function insertNewCita($post,$inf_perro){
			unset($post['action']);
			$post['Id_User']=$this->session->userdata('user')['Id_User'];
			$post['Id_Perro']=$inf_perro['Id_Perro'];
			$post['Id_Beneficencia']=$inf_perro['Id_Beneficencia'];
			
			//NOTA: no se agrega Status ni fecha creacion porque el estatus siempre es por default 0
			//y la fecha de creacion es un timestap por default
			//se añadio trigger de status perro para no cambiarlo manualmente
			return $this->db->insert('Cita',$post);
		}
		function getLastIdCita(){
			return $this->db->query("SELECT LAST_INSERT_ID() as Id_Cita")->row_array()['Id_Cita'];
		}

		function getCitaInformacionPDF($id_cita){
			return $this->db->query("
									SELECT cita.*,usuario.*,perro.*,carnet.*,beneficencia.*,direccion.*
									FROM cita
									LEFT JOIN perro on perro.Id_Perro = cita.Id_Perro
									LEFT JOIN beneficencia on beneficencia.Id_Beneficencia = perro.Id_Beneficencia
                                    LEFT JOIN usuario on usuario.Id_User = cita.Id_User
                                    LEFT JOIN direccion on direccion.Id_Direccion = beneficencia.Id_Direccion
                                    LEFT JOIN carnet on carnet.Id_Carnet = perro.Id_Carnet
									WHERE Id_Cita = $id_cita
									")->row_array();
		}
}
?>
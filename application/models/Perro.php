<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perro extends CI_Model {
		function __construct(){
			parent::__construct();
			//$this->load->library('encryption');
		}

		function getInfoPerroById($id_perro){
			return $this->db->query("
									SELECT perro.*,carnet.*,beneficencia.*
									FROM perro
									LEFT JOIN carnet on carnet.Id_Carnet = perro.Id_Carnet
									LEFT JOIN beneficencia on beneficencia.Id_Beneficencia = perro.Id_Beneficencia
									WHERE Id_Perro = $id_perro
									")->row_array();
		}

		function updateStatusPerro($id_perro, $status){
			$this->db->query("UPDATE Perro SET Status=$status WHERE Id_Perro='$id_perro';");
		}

		function getNumRegistrosFiltro($opcion){
			switch ($opcion) {
				case '4':
					//no adoptados
					return $this->db->query("SELECT count(*) as numero FROM Perro WHERE Status=2")->row()->numero;

				case '5':
					//adoptados
					return $this->db->query("SELECT count(*) as numero FROM Perro WHERE Status=0")->row()->numero;

				case '6':
					//en proceso
					return $this->db->query("SELECT count(*) as numero FROM Perro WHERE Status=1")->row()->numero;

				default: //cualquier otro caso se carga todo y solo cambia orden
					return $this->db->query("SELECT count(*) as numero FROM Perro")->row()->numero;
			}
		}
		
		

		function getPaginationPerrosFiltro($opcion, $num_per_page, $start){ //$start sirve para consultar a partir del registro en que se quedó
			$cadena="";
			switch ($opcion) {
				case '1' : return $this->db->get("Perro",$num_per_page,$start);
				case '2' : $this->db->order_by('Nombre_Perro,Id_Perro'); break;
				case '3' : $this->db->order_by('Id_Beneficencia,Id_Perro'); break;
				case '4' : $this->db->where('Status=2'); break;//disponibles
				case '5' : $this->db->where('Status=0'); break;//adoptados
				case '6' : $this->db->where('Status=1'); break;//en proceso
				case '7' : $this->db->order_by('SexoP,Id_Perro'); break;
				case '8' : $this->db->order_by('Edad,Id_Perro'); break;
				case '9' : $this->db->order_by('Raza,Id_Perro'); break;
				case '10': $this->db->order_by("Fecha_Alta DESC, Id_Perro"); break;
				case '11': $this->db->order_by("Fecha_Alta ASC, Id_Perro"); break;
			}
			//return $this->db->get_where("Perro",$cadena,$num_per_page,$start);
			return $this->db->get("Perro",$num_per_page,$start);
		}

		
		function getBenefPerro($perros){ //$start sirve para consultar a partir del registro en que se quedó
			$indice=0;

			foreach ($perros->result() as $fila) { 
				$result["$indice"]=$this->db->get_where("Beneficencia","$fila->Id_Beneficencia=beneficencia.Id_Beneficencia")->row();
				$indice++;
			}
			//SELECT Nombre_Perro, NombreB FROM perro,beneficencia WHERE Perro.Id_Beneficencia=beneficencia.Id_Beneficencia;
			return $result;
		}

		function isDisponible($id_perro){
			$statusPerro = $this->db->get_where("Perro","perro.Id_Perro = $id_perro")->row_array()['Status'];
			return ($statusPerro != 2)? false:true;
		}

		/*QUERY PARA OBTENER TODA LA INFO NECESARIA DE LOS PERROS PARA MOSTRAR EN ADOPCIÓN:
		
			SELECT 	
				perro.*,
	            carnet.*,
            	beneficencia.*
			FROM perro
			LEFT JOIN beneficencia ON beneficencia.Id_Beneficencia = perro.Id_Beneficencia
            LEFT JOIN carnet on carnet.Id_Carnet = perro.Id_Carnet
			ORDER BY perro.Id_Perro;
		*/
}
?>
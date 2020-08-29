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
			$where_sentence="";
			$order_by = "";
			$sql = "SELECT 	
						perro.*,perro.Status as Status_Perro,
			            carnet.*,
		            	beneficencia.*
					FROM perro";
			$sql_join = "
							LEFT JOIN beneficencia ON beneficencia.Id_Beneficencia = perro.Id_Beneficencia
				            LEFT JOIN carnet on carnet.Id_Carnet = perro.Id_Carnet
			            ";
			switch ($opcion) {
				case '1' : break; //no ocurre nada
				case '2' : $order_by = "ORDER BY perro.Nombre_Perro"; break;
				case '3' : $order_by = "ORDER BY perro.Id_Beneficencia,perro.Id_Perro"; break;
				case '4' : $where_sentence="WHERE perro.Status = 2"; break;//disponibles
				case '5' : $where_sentence="WHERE perro.Status = 0"; break;//adoptados
				case '6' : $where_sentence="WHERE perro.Status = 1"; break;//en proceso
				case '7' : $order_by = "ORDER BY perro.SexoP,perro.Id_Perro"; break;
				case '8' : $order_by = "ORDER BY perro.Edad,perro.Id_Perro"; break;
				case '9' : $order_by = "ORDER BY perro.Raza,perro.Id_Perro"; break;
				case '10': 	$order_by = "ORDER BY perro.Fecha_Alta DESC ,perro.Id_Perro";break;
				case '11': $order_by = "ORDER BY perro.Fecha_Alta ASC ,perro.Id_Perro"; break;
			}
			//estructura completa del query
			$sql = $sql." ".$sql_join." ".$where_sentence." ".$order_by." LIMIT $start,$num_per_page ;";
			return $this->db->query($sql)->result_array();
			
			//return $this->db->get_where("Perro",$cadena,$num_per_page,$start);
			//return $this->db->get("Perro",$num_per_page,$start);
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

		function insertNewDog($post, $idBeneficencia, $nombreImagen){
			unset($post['check'],$post['action'],$post['Activa']);
			$postCarnet = $post;

			unset(
				$postCarnet['Nombre_Perro'],
				$postCarnet['SexoP'],
				$postCarnet['Edad'],
				$postCarnet['Raza'],
				$postCarnet['Mestizo'],
				$postCarnet['Raza_2'],
				$postCarnet['DescripcionP'],
				$postCarnet['Nivel_E'],
				$postCarnet['Sociabilidad'],
				$postCarnet['Tipo_Pelaje'],
				$postCarnet['Tamanio']
			);
			unset(
				$post['V_Triple'],
				$post['V_Mpuppy'],
				$post['V_Quintuple'],
				$post['V_Sectuple'],
				$post['Desp_Ext'],
				$post['Desp_Int'],
				$post['Esterilizacion'],
				$post['Carnet_Fisico']
			);
			//$post['Fecha_Alta']=$this->db->query("SELECT now() as 'fecha';")->row_array()['fecha'];
			$post['Id_Beneficencia']=$idBeneficencia;
			$post['Status']=2;//disponible
			$post['Nombre_Foto_File']=$nombreImagen;

			if (isset($post['Mestizo'])) {
				$post['Raza'].= " y ".$post['Raza_2'];
			}
			//Nivel de energia
			if ($post['Nivel_E']<=25) {
				$post['Nivel_E'] = "Bajo";
			}
			elseif ($post['Nivel_E']<=50) {
				$post['Nivel_E'] = "Medio";
			}
			elseif ($post['Nivel_E']<=75) {
				$post['Nivel_E'] = "Alto";
			}else{
				$post['Nivel_E'] = "Muy Alto";
			}
			//nivel de sociabilidad
			if ($post['Sociabilidad']<=25) {
				$post['Sociabilidad'] = "Poco Sociable";
			}
			elseif ($post['Sociabilidad']<=50) {
				$post['Sociabilidad'] = "Medio Sociable";
			}
			elseif ($post['Sociabilidad']<=75) {
				$post['Sociabilidad'] = "Sociable";
			}else{
				$post['Sociabilidad'] = "Muy Sociable";
			}



			unset($post['Raza_2']);

			//se comprueba si el post de carnet esta vacio para mandar al menos un elemento en cero y no un NULL
			if (count($postCarnet) == 0) {
				$postCarnet['Carnet_Fisico'] = 0;
			}
			

			
			$this->db->trans_start();
			//----Queries en transaction
				$this->db->insert('Carnet',$postCarnet);

				$id_carnet = $this->db->query("SELECT LAST_INSERT_ID() as Id_Carnet")->row_array()['Id_Carnet'];
				$post['Id_Carnet'] = $id_carnet;

				$this->db->insert("Perro",$post);
			//----Fin de Queries en transaction
			$this->db->trans_complete();

			//se comprueba si la transacción tuvo Éxito
			if ($this->db->trans_status() === FALSE)
			{
			        $this->db->trans_rollback();
			        return -1;
			}
			else
			{
			        $this->db->trans_commit();

			        return $this->db->query("SELECT LAST_INSERT_ID() as Id_Perro")->row_array()['Id_Perro'];
			}
		}

		function deletePerroById($id_perro){
			//tiene trigger de borrar carnet despues de borrar perro, por eso ya no es necesario borrar perro
			$this->db->delete('Perro', array('Id_Perro' => $id_perro));
			return;
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
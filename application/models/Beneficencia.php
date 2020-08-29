<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beneficencia extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->library('encryption');
		}

		function getIdBenefByIdPerro($id_perro){
			return $this->db->get_where("Perro","Id_Perro = $id_perro")->row_array()['Id_Beneficencia'];
		}

		function getDiasInvalidosByIdPerro($id_perro){
			//se recupera el id de la benef del perro
			$id_benef = $this->db->get_where("Perro","Id_Perro = $id_perro")->row_array()['Id_Beneficencia'];

			$dataR = [];
			$this->db->where("Id_Benef=".$id_benef); //se busca sobre el id de la benef
			$diasInv = $this->db->get('Semana_Laboral_Benef')->row_array();//recuperamos los dias invalidos de la benef
			if (!$diasInv['Domingo']) {
				array_push($dataR, '0');
			}
			if (!$diasInv['Lunes']) {
				array_push($dataR, '1');
			}
			if (!$diasInv['Martes']) {
				array_push($dataR, '2');
			}
			if (!$diasInv['Miercoles']) {
				array_push($dataR, '3');
			}
			if (!$diasInv['Jueves']) {
				array_push($dataR, '4');
			}
			if (!$diasInv['Viernes']) {
				array_push($dataR, '5');
			}
			if (!$diasInv['Sabado']) {
				array_push($dataR, '6');
			}

			return $dataR;
		}

		function makeHorarios($fecha,$id_benef){
			//se recuperan los intervalos de los horarios de citas
			$intervalo[0] = $this->db->query("SELECT H_Cita_A FROM Horario_Beneficencia WHERE Id_Benef=$id_benef")->row_array()['H_Cita_A'];
			$intervalo[1] = $this->db->query("SELECT H_Cita_C FROM Horario_Beneficencia WHERE Id_Benef=$id_benef")->row_array()['H_Cita_C'];

			//se crean dates auxiliares para ir pasando de 30 min en 30 min
			$hora1 = new DateTime("2020-01-04 ".$intervalo[0]);
			$hora2 = new DateTime("2020-01-04 ".$intervalo[1]);
			$horaAux = $hora1;
			$horariosR = []; //arreglo de los horarios disponibles
			while ($horaAux<=$hora2) {
				//si el horario no ha sido reservado, entonces se adjunta a los horarios disponibles
				if (!$this->db->get_where("Cita","Id_Beneficencia=$id_benef  AND  Fecha='".$fecha."' AND Hora='".$horaAux->format('H:i')."'")->row_array()) {
					array_push($horariosR, $horaAux->format('H:i'));
				}
				//echo "Horario: ".end($horariosR)->format('H:i')."<br>";
				$horaAux->modify('+30 minute');	//se agrega 30 minutos a la hora actual
			}

			if (empty($horariosR)) {
				return false;
			}
			else{
				return $horariosR;
			}

		}

}
?>
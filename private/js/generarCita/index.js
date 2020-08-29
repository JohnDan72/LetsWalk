var desplazamiento_fecha = 30; //dias de desplazamiento de fechas
var fecha = new Date();
	fecha = sumarDias(fecha,1)
var anio = fecha.getFullYear();
var dia = fecha.getDate();

var _mes = fecha.getMonth(); //viene con valores de 0 al 11
_mes = _mes + 1; //ahora lo tienes de 1 al 12
if (_mes < 10) //ahora le agregas un 0 para el formato date
{
    var mes = "0" + _mes;
} else {
    var mes = _mes.toString;
}
if (dia < 10) //ahora le agregas un 0 para el formato date
{
    var dia_2 = "0" + dia;
} else {
    var dia_2 = dia;
}
//console.log("dia: "+fecha.getDate());
//console.log("dia + 1: "+(fecha.getDate() + 1));
let fecha_minimo = anio + '-' + mes + '-' + dia_2; // Nueva variable
let fecha_maximo = fecha;
	fecha_maximo.setDate(fecha.getDate() + desplazamiento_fecha); //desplazamiento de 30 dias
	var mes_max = fecha_maximo.getMonth() + 1
	if (mes_max < 10) //ahora le agregas un 0 para el formato date
	{
	    mes_max = "0" + mes_max;
	} else {
	    mes_max = mes_max.toString;
	}
	fecha_maximo = fecha_maximo.getFullYear()+'-'+mes_max+'-'+fecha_maximo.getDate()

//alert(fecha_maximo)
//console.log(fecha_minimo)
document.getElementById("fecha_cita").value = fecha_minimo
document.getElementById("fecha_cita").setAttribute('min', fecha_minimo);
document.getElementById("fecha_cita").setAttribute('max', fecha_maximo);


function sumarDias(fecha, dias){
  fecha.setDate(fecha.getDate() + dias);
  return fecha;
}


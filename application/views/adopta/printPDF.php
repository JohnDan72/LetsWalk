<?php
    ob_start();
    use Spipu\Html2Pdf\Html2Pdf;
?>
<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">


    <style type="text/css">

        #imagen img {
            float: left;
        }

        #Beneficiencia p {
            float: right;
        }

        .encabezado{
            font-size: 110%;
            margin-top: -10px;
        }

        .cursiva{
            font-style: italic;
            text-align: center;
        }
    </style>


    <div id="imagen"> <img width="200" height="200" src="https://image.ibb.co/dnxy5A/Logo-2.jpg"></div>


        <h1 ALIGN="center" style="margin-bottom: 10px;">Comprobante de cita <img src="https://image.ibb.co/efBQkA/baidu-logotipo-de-la-pata-1.jpg"></h1>
        <br>


        <p class="encabezado" style="margin-top: 50px;"><b>Folio: </b> <?= $Cita['Id_Cita'];?></p>
        <p class="encabezado"><b>Beneficiencia: </b> <?= $Cita['NombreB'];?></p>
        <p class="encabezado"><b>Fecha: </b> <?= $Cita['Fecha'];?></p>
        <p class="encabezado"><b>Hora: </b> <?= $Cita['Hora'];?></p>

        
        <p class="cursiva" style="margin-top: 80px;">Es importante que lleves este comprobante contigo, ya que de la contrario la beneficiencia no podrá ofrecerte el servicio. 
            Te recomendamos llevarlo en tu telefono y evitar el uso de papel</p>
        <p class="cursiva">Ayudanos a cuidar el medio ambiente</p>

        

        <p ALIGN="justify" style="margin-top: 40px;">
            El (la) solicitante del servicio: <b><?php echo $Cita['Nombre'] . " " . $Cita['Ap_Paterno'] . " " . $Cita['Ap_Materno']; ?></b> 
            declara estar comprometido con la causa de aRDogs por lo que esta de acuerdo en el proceso de trámite para la posible adopción del perro con nombre 
            <b><?php echo $Cita['Nombre_Perro']; ?></b> de raza <b><?php echo $Cita['Raza']; ?></b>, teniendo una edad de <b><?php echo $Cita['Edad'];?></b> 
        </p>

        <p ALIGN="justify">
        Tal evento será llevado acabo en el Centro de Adopción: <b><?php echo $Cita['NombreB'];?></b> con dirección: <b><?php echo $Cita['Calle']." ".$Cita['Num_Ext']." Colonia: ".$Cita['Colonia'].". ".$Cita['Localidad'].", ".$Cita['Municipio']." CP: ".$Cita['CP']; ?></b> todo esto sujeto a nuestros terminos y condiciones los cuales pueden ser consultados en <a href="https://ardogs.herokuapp.com"><b>ardogs.com</b></a>
        </p>



        <p align="center" style="margin-top: 100px;">
           Nombre del solicitante <br> <?php echo $Cita['Nombre'] . " " . $Cita['Ap_Paterno'] . " " . $Cita['Ap_Materno']; ?>
        </p>
</page>

<?php

$content = ob_get_clean();
require 'vendor/autoload.php';
try {
    $html2pdf = new HTML2PDF('P', 'A4', 'es', true, 'UTF-8', 3);
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output('PDF-CF.pdf');
} catch (exception $e) {
    echo $e;
    exit;
}
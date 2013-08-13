<?php


require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);



    $link = mysql_connect("localhost","root","root"); 
 mysql_select_db("base_de_datos",$link); 


$queEmp = "SELECT nombre FROM usuario ORDER BY ID DESC LIMIT 1";

$resEmp = mysql_query($queEmp, $link) or die(mysql_error());

$totEmp = mysql_num_rows($resEmp);




$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'nombre'=>'<b>Nombre:</b>'
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<img src=\"imagenes/avn.png\">\n";
$txttit = "<b>DISENO DE AERONAVES</b>\n";
$txttit.= "AERONAVE CON HELICE \n";
$txttit.= "Reporte Rendimiento \n";
$pdf->ezText($txttit, 12);

$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);

$queEmp = "SELECT NACA_ROOT_SECTION, NACA_TIP_SECTION , clmax, clmax2, prclmax  FROM rendimiento ORDER BY ID DESC LIMIT 1";
$resEmp = mysql_query($queEmp, $link) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'NACA_ROOT_SECTION'=>'<b>Perfil NACA RAIZ</b>',
				'NACA_TIP_SECTION'=>'<b>Perfil NACA TIP</b>',
				'clmax'=>'<b>Clmax de la raiz</b>',
				'clmax2'=>'<b>Clmax del tip</b>',
                                'prclmax'=>'<b>Prom. Clmax</b>'
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);

$txttit.= "Reporte \n";
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);




$queEmp = "SELECT tflap, clmaxflap, anguloflap, deltaclmax2, promedioflap, clmaxdepreciado  FROM rendimiento2 ORDER BY ID DESC LIMIT 1";
$resEmp = mysql_query($queEmp, $link) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
                                
				'tflap'=>'<b>Tipo de flap</b>',
				'clmaxflap'=>'<b>Cl max con flaps</b>',
				' anguloflap'=>'<b>Angulo flap</b>',
				'clmaxdepreciado'=>'<b>CL max depreciado</b>',
                     );
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);

$txttit.= "Reporte \n";
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);

$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>
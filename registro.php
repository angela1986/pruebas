<?php

require_once('funciones.php');
//conectar('localhost', 'root', 'root', 'registro');

//Recibir
$nombre = strip_tags($_POST['nombre']);

$edad = strip_tags($_POST['edad']);

$sexo = strip_tags($_POST['sexo']);

$universidad = strip_tags($_POST['universidad']);

$nick= strip_tags($_POST['nick']);

$clave = strip_tags(sha1($_POST['clave']));
$clave2 = strip_tags(sha1($_POST['clave2']));
$interes = strip_tags($_POST['interes']);
$ip = $_SERVER['REMOTE_ADDR'];

$query = @mysql_query('SELECT * FROM usuarios1 WHERE nombre="'.mysql_real_escape_string($nombre).'"');
if($existe = @mysql_fetch_object($query))
{
	echo 'El usuario '.$nombre.' ya existe.';	
}else{
	$meter = @mysql_query('INSERT INTO usuarios1 (nombre, edad, sexo, universidad, nick, clave, clave2,interes, ip) values ("'.mysql_real_escape_string($nombre).'","'.mysql_real_escape_string($edad).'","'.mysql_real_escape_string($sexo).'","'.mysql_real_escape_string($universidad).'","'.mysql_real_escape_string($nick).'","'.mysql_real_escape_string($clave).'", "'.mysql_real_escape_string($clave2).'", "'.mysql_real_escape_string($interes).'", "'.$ip.'")');
	if($meter)
	{
		echo 'Usuario registrado con exito';
	}else{
		echo 'Hubo un error en el registro.';	
	}
}
?>
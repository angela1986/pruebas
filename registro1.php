<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
&lt;?php<br>
require_once('funciones.php');<br>
conectar('localhost', 'root', 'root', 'registro');
<p>//Recibir<br>
  $nombre = strip_tags($_POST['nombre']);</p>
<p>$edad = strip_tags($_POST['edad']);</p>
<p>$sexo = strip_tags($_POST['sexo']);</p>
<p>$universidad = strip_tags($_POST['universidad']);</p>
<p>$nick= strip_tags($_POST['nick']);</p>
<p>$clave = strip_tags(sha1($_POST['clave']));<br>
  $clave2 = strip_tags(sha1($_POST['clave2']));<br>
  $interes = strip_tags($_POST['interes']);<br>
  $ip = $_SERVER['REMOTE_ADDR'];</p>
<p>$query = @mysql_query('SELECT * FROM usuarios1 WHERE nombre=&quot;'.mysql_real_escape_string($nombre).'&quot;');<br>
  if($existe = @mysql_fetch_object($query))<br>
  {<br>
  echo 'El usuario '.$nombre.' ya existe.'; <br>
  }else{<br>
  $meter = @mysql_query('INSERT INTO usuarios1 (nombre, edad, sexo,
  universidad, nick, clave, clave2,interes, ip) values (&quot;'.mysql_real_escape_string($nombre).'&quot;,&quot;'.mysql_real_escape_string($edad).'&quot;,&quot;'.mysql_real_escape_string($sexo).'&quot;,&quot;'.mysql_real_escape_string($universidad).'&quot;,&quot;'.mysql_real_escape_string($nick).'&quot;,&quot;'.mysql_real_escape_string($clave).'&quot;, &quot;'.mysql_real_escape_string($clave2).'&quot;, &quot;'.mysql_real_escape_string($interes).'&quot;, &quot;'.$ip.'&quot;)');<br>
  if($meter)<br>
  {<br>
  echo 'Usuario registrado con exito';<br>
  }else{<br>
  echo 'Hubo un error en el registro.'; <br>
  }<br>
  }<br>
  ?&gt;</p>

</body>
</html>

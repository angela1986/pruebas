<html>

    <head>


<title>DISE&NtildeO DE AERONAVES</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Custom Animation Banner with jQuery" />
        <meta name="keywords" content="jquery, animation, banner, customize, css3, fadein, slider, slideshow"/>
<link rel="shortcut icon" href="imagenes/avn.ico" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<link href="estilo.css" media="screen" rel="StyleSheet" type="text/css"/>
<link type="text/css" href="menu.css" rel="stylesheet" />
 <script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/Bebas_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('a, li, h1');
			Cufon('h1',{
				textShadow: '1px 1px #fff'
			});
		</script>
        <style type="text/css">
			
			
			
			span.reference{
				font-family: "Tahoma", "Geneva", sans-serifl;
				position:fixed;
				left:10px;
				bottom:10px;
				font-size:12px;
			}
			span.reference a{
				color:#999;
				text-transform:uppercase;
				text-decoration:none;
			}
			.ca_banner{
				margin-left:250px;
                                margin-bottom: 20px;
                                margin-top: 20px;
				float:left;
			}
			.content{
				width:960px;
				margin:0 auto;
			}
		</style>
<script type="text/javascript" src="jquery.js">
</script>
    <script type="text/javascript" src="menu.js">
    </script>
	<style type="text/css">



div#menu { margin:20px;
         
 }
</style> 
<style type="text/css"> <!-- 
body{background-image:url(http://galaxymusic.comyr.com/Fondos/5.gif);background-attachment:fixed;width:1000px;background-repeat:repeat;margin-left:auto;margin-right:auto;text-align:center;}   
--> </style> 

</head>
<body>
   
<div id="fondo">
<div id="global">

<div id="cabecera">
<div id="logotipo">
<img src="imagenes/site_logo.gif" alt="Tu web de inform�tica"></div>
</div>
<div>
        
<div id="menu">
    <ul class="menu">
        <li><a href="index.html" class="parent"><span>INICIO</span></a>
             <ul>
                <li><a href="" class="parent"><span> JUEGOS</span></a>
                    <ul>
                        <li><a href="juegos.html"><span> AIRPLANE ROAD</span></a></li>
                        <li><a href="juegos1.html"><span> NAVAL STRIK</span></a></li>
                    </ul>
                </li>
             </ul>
        </li>
        <li><a href="#" class="parent"><span>INFORMACION</span></a>
            <ul>
                <li><a href="#" class="parent"><span> 1</span></a>
                    <ul>
                        <li><a href="#"><span> 1.1</span></a></li>
                        <li><a href="#"><span> 1.2</span></a></li>
                    </ul>
                </li>
                <li><a href="#" class="parent"><span> AERODINAMICA</span></a>
                    <ul>
                        <li><a href="seleccionnaca.html"><span>PERFILES NACA</span></a></li>
                        <li><a href="#"><span> </span></a></li>
                    </ul>
                </li>
                <li><a href="aladinamica.html"><span>GEOMETRIA ALA</span></a></li>
                <li><a href="#"><span>Sub Item 4</span></a></li>
                <li><a href="#"><span>Sub Item 5</span></a></li>
                <li><a href="#"><span>Sub Item 6</span></a></li>
                <li><a href="#"><span>Sub Item 7</span></a></li>
            </ul>
        </li>
        <li><a href="glosario.html"><span>Help</span></a></li>
        <li class="last"><a href="#"><span>Contacts</span></a></li>
    </ul>
</div>
</div>



<br>

</table>
</div>

<table width="100%" border="0">
<tr>
<td width="160" valign="top" id="menu">
<h4>Registro</h4>
<ul>
<li><a href="ingreso.html">Iniciar sesion</a></li>
<li><a href="formulario.html">Registro</a></li>
<li><a href="intro.html">INTRODUCCION</a></li>
</ul>
</td>



<td valign="top" id="contenido">
<h3><Center>
 <? 
    // Primero comprobamos que ningún campo esté vacío y que todos los campos existan. 
    if(isset($_POST['nombre']) && !empty($_POST['nombre']) && 
    isset($_POST['edad']) && !empty($_POST['edad']) && 
    isset($_POST['sexo']) && !empty($_POST['sexo']) && 
    isset($_POST['universidad']) && !empty($_POST['universidad']) && 
    isset ($_POST['nick']) && !empty($_POST['nick']) && 
    isset ($_POST['Clave']) && !empty($_POST['Clave'])&& 
    isset ($_POST['Correo_electronico']) && !empty($_POST['Correo_electronico'])){ 

        // Si entramos es que todo se ha realizado correctamente 

        $link = mysql_connect("localhost","root","root"); 
        mysql_select_db("base_de_datos",$link); 

        // Con esta sentencia SQL insertaremos los datos en la base de datos 
        mysql_query("INSERT INTO usuario (nombre,edad,sexo,universidad,nick,Clave,Correo_electronico) 
        VALUES ('{$_POST['nombre']}','{$_POST['edad']}','{$_POST['sexo']}','{$_POST['universidad']}','{$_POST['nick']}','{$_POST['Clave']}','{$_POST['Correo_electronico']}')",$link);

        // Ahora comprobaremos que todo ha ido correctamente 
        $my_error = mysql_error($link); 

        if(!empty($my_error)) { 

            echo "Ha habido un error al insertar los valores. $my_error";  

        } else { 

            echo "Bienbenido  ", $_POST['nombre'] ," "," ", " los datos han sido introducidos satisfactoriamente ya puede ingresar a nuestro sistema e iniciar a diseñar."; 

        } 

    } else { 

        echo "Error, no ha introducido todos los datos"; 
 
    } 

?>  
    
</center></h3>
   <center><a href="formulario.html">Volver</a>;
    <a href="pagrft.html">Iniciar</a></center>
</td>
</tr>
</table>

<div id="copyright">Copyright&copy; 2012 - P&aacutegina creada por ANGELA PAOLA TRIVI&NtildeO PINZON - Todos los derechos reservados</div>

</div>
</div>
</body>
</html>
</html>
    
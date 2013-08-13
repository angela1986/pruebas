<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>


<title>Peso 1/aeronave</title>
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
<h2><Center>PRIMER PESO ESTIMADO DE UNA AERONAVE CON PROPELA</center></h2>
<CENTER> <IMG SRC="images/apropel.png" border="0" height="250" width="500"></CENTER>
<h4>

    <p>Como se especifica en la seccion de <a href="teoriapeso.html"> pesos de una aeronave></a>, la ecuacion 1.4 incluye los pesos de la tripulacion, de la carga util, del combustible y vacio de aeronaves que pertenecen a esta categoria. Algunos datos pertenecientes a este grupo son tomados por estadistica de otras aeronaves que ya se encuentran en operacion.</p>
<p> la siguiente grafica nos indica los valores de las aeronaves ya probados analizados y estudiados para poder hacer nuestros calculos</p>
<CENTER> <IMG SRC="images/pesos2.1.png" border="0" ></CENTER>
<br><center>Relacion de peso Vacio Vs. Peso We/Wo para aeronaves con propela</center></br>
<p>Como resultado de los datos mostrados en la grafica anterior elegimos para nuestra primera estimación como lo hacen para la mayoria de aviones de propela:</p>
<CENTER> <IMG SRC="images/ec8.5.png" border="0" ></CENTER>
<p>Para calcular el peso Wf/Wo debemos tener en cuenta que este peso esta relacionado con la mision de la aeronave. Usualmente una aeronave de estas caracteristicas cumple la siguiente mision,  el siguiente perfil es particularmente simple. Para otros tipos de misiones, especialmente las relacionadas con los aviones de combate militar, el perfil de la misión incluirá aspectos tales como combates aire-aire o aire-tierra, la caída de las armas, reabastecimiento en vuelo entre otras actividades que realizan.</p>
<CENTER> <IMG SRC="images/mision.png" border="0" ></CENTER>
<p>La cantidad de combustible necesaria para llevar a cabo la misión depende críticamente de la eficiencia de la propulsión del consumo específico de combustible del motor y el
la eficiencia de la helice, del lift-to-drag, de la eficacia aerodinámica entre otros factores que mas adelante se concideraran.El perfil de la misión es una herramienta de contabilidad útil para ayudarnos a estimar el peso de combustible. cada segmento del perfil de la misión se asocia con una fracción en peso, se define como el peso del avión en el extremo del segmento dividido por el peso al comienzo del segmento</p> 
<p>Por ejemplo, la fracción en peso de crucero es W3/W2, donde W3 es el avión al final de el crucero y W2 es el peso al comienzo del crucero. La relacion de peso del combustible es Wf/ Wo, se puede obtener de la siguiente manera. Usando el perfil de la misión en la figura la relación es:</p>
<CENTER> <IMG SRC="images/ec8.6.png" border="0" ></CENTER>
<p>Es importante tener en cuenta que el W5 no puede ser igual a 0 ya que asi ya haya aterrizado siempre una aeronave va a llevar conbustible de reserva ya sea por condiciones adversas como clima, problemas de trafico entre otros. Ademas que por la geometria de los tanques estos guardan algunos residuos del .06% de combustible. Asumiendo estos aspectos la formula para calcular la relacion de combustible es la siguiente:</p>
<CENTER> <IMG SRC="images/ec8.8.png" border="0" ></CENTER>
<p>Para el despegue, el segmento 0-1, los datos <a href="basedatos.html">históricos</a> indican que Wi/Wo es un valor muy pequeño por lo tanto estadisticamente se asume que: </p>
<CENTER> <IMG SRC="images/ec8.9.png" border="0" ></CENTER>
<p>Para el segmento 1-2,  se basan en datos <a href="basedatos.html"> históricos</a> para una primera estimación,que indican que W2/W1 también es pequeño. Por lo tanto, se supone que:</p>
<CENTER> <IMG SRC="images/ec8.10.png" border="0" ></CENTER>
<p>Para la estimacion de la seccion de crucero es necesario calcular la relacion L/D. Como ahun no se hara un estudio exaustivo de aerodinamica, se toman datos promediados de aeronaves similares como se muestran en la siguiente tabla</p>
<center><table border="0" cellpadding="0" cellspacing="0" >
<tr>
    <th scope="col">País</th>
<td> (L/D)max</td>
</tr>
<tr>
<td bordercolor="#FFFFFF">Cessna310</td>
<td bordercolor="#FFFFFF">13.0</td>
</tr>
<tr>
<td bordercolor="#FFFFFF">Beach Bonanza</td>
<td bordercolor="#FFFFFF">13.8</td>
</tr>
<tr>
<td bordercolor="#FFFFFF">Cessna Cardinal</td>
<td bordercolor="#FFFFFF">14.2</td>
</tr>
</table></center>
<p>Por lo tanto, una primera aproximación razonable para nuestro avión es:</p>
<br><center>(L/D)max=14</center></br>
<p>Ahora tenemos que hayar el consumo especifico de conbustible y la eficiencia de la helice; el valor típico del consumo especifico de combustible para los motores reciprocos actuales es de 0,4 lb/(hp*h); en unidades manejables</p>
<CENTER> <IMG SRC="images/ec8.12.png" border="0" ></CENTER>
<p>Por estudios realizados  sabemos que un valor razonable para la eficiencia de la hélice, en el supuesto de una hélice de paso variable teniendo en cuenta que es para un avión comercial es</p>
<CENTER> <IMG SRC="images/ec8.13.png" border="0" ></CENTER>
<p>teniendo los anteriores datos podemos encontrar el resultado de la siguiente ecuacion<p>
<CENTER> <IMG SRC="images/ec8.14.png" border="0" ></CENTER>
<p>Al remplazar los valores</p>
<CENTER> <IMG SRC="images/ec8.14.1.png" border="0" ></CENTER>
<p>Resolviendo</p>
<CENTER> <IMG SRC="images/ec8.15.png" border="0" ></CENTER>
<p>Sacando el inverso tenemos que</p>
<CENTER> <IMG SRC="images/ec8.16.png" border="0" ></CENTER>
<p>Finalmente, el combustible consumido durante el proceso de aterrizaje, en el segmento 4-5, es tomado también
en datos históricos. La cantidad de combustible utilizado para el aterrizaje es pequeño, sobre esta base el valor de W5/W4 es de aproximadamente 0,995. </p>
<P>Ya teniendo todas las relaciones de peso tenemos que:</p>
<CENTER> <IMG SRC="images/ec8.19.png" border="0" ></CENTER>
<p>Ahora ya podemos hallar la relacion de combustible la cual es:<p>
<CENTER> <IMG SRC="images/ec8.20.png" border="0" ></CENTER>
<p>CALCULO DE Wo</P>
<p>Hasta el momento ya hemos calculado los pesos de cada seccion de la mision, calculamos la relacion peso del conbustible, el paso a seguir es el calculo del peso bruto de la aeronave. Para lo cual tenemos que hallar el peso de los pasajeros, de la tripulacion y de la carga util</p>
<form name="form8" method="post" action="performans.php">  
<fieldset>
<legend></legend><h4>
<table cellspacing=20>
<tr>
<td>
<label> </label></td>
    
    <?php
     echo  "hola", $_POST['dtakeoff'] ;
     // Primero comprobamos que ningún campo esté vacío y que todos los campos existan. 
    if(isset($_POST['Vstall']) && !empty($_POST['Vstall']) && 
    isset($_POST['Vclimb']) && !empty($_POST['Vclimb']) && 
    isset($_POST['Rmision']) && !empty($_POST['Rmision']) && 
            isset($_POST['Xmision']) && !empty($_POST['Xmision']) &&
    isset($_POST['dtakeoff']) && !empty($_POST['dtakeoff']) && 
    isset ($_POST['Vcrucero']) && !empty($_POST['Vcrucero']) && 
    isset ($_POST['Wpasajero']) && !empty($_POST['Wpasajero'])&& 
    isset ($_POST['npasajero']) && !empty($_POST['npasajero'])&& 
    isset ($_POST['ntripulacion']) && !empty($_POST['ntripulacion'])){

    $link = mysql_connect("localhost","root","root"); 
    mysql_select_db("nombre_base_de_datos",$link); 

    // la base de datos se llamara datosentrada
    $insertinto = "INSERT INTO datos_entrada ( Vstall , Vclimb , Rmision , Xmision ,Vcrucero , Wpasajero ,  ntripulacion , dtakeoff , npasajero )  
        VALUES ('".$_POST['Vstall']."','".$_POST['Vclimb']."','".$_POST['Rmision']."','".$_POST['Xmision']."','".$_POST['Vcrucero']."','".$_POST['Wpasajero']."','".$_POST['ntripulacion']."','".$_POST['dtakeoff']."','".$_POST['npasajero']."')";
 

 mysql_query($insertinto,$link);
        

// Ahora comprobaremos que todo ha ido correctamente 
        $my_error = mysql_error($link); 

        if(!empty($my_error)) { 

            echo "Ha habido un error al insertar los valores. $my_error";  

        } else { 
	    $Wcrew = $_POST['Wpasajero']* $_POST['ntripulacion'];
	    $Wpayload = ($_POST['Wpasajero']*$_POST['npasajero'])+(($_POST['npasajero']+$_POST['ntripulacion'])*20);
	    $wo = (($Wcrew + $Wpayload)/0.221);
            $wf= 0.159*$wo;
	    $cpf= $wf/5.64;
	    echo "<br/>Wcrew = ", $_POST['Wpasajero'],"*",$_POST['ntripulacion']," "," =",  ($_POST['Wpasajero']* $_POST['ntripulacion']),"","lb"; 
	    
            echo "<br/><br/>La carga útil es el peso de los pasajeros, más el equipaje para los pasajeros y la tripulacion. Por el tipo de aeronave sabemos que es de corto alcance para viajes de negocios por lo cual segun REYMER se llevara equipaje para un viaje corto por lo tanto, es razonable suponer 20 libras de equipaje por persona en lugar de 40 libras que son las usadas normalmente. Por lo tanto, inclullendo el equipaje piloto, tenemos";
	    echo "<br/><br/>Wpayload = ",$_POST['Wpasajero'],"*",$_POST['npasajero'],"","+","","(",$_POST['npasajero'],"","+",$_POST['ntripulacion'],")","*","20","=",$Wpayload,"","lb";
            echo "<br/><br/>Al haber obtenido los pesos de pasajeros y tripulacion aplicamos a la siguiente ecuacion";
	    echo  "<br/><br/><img src=\"images/ec8.23.png\">";
	    echo  "<br/><br/>En donde obtenemos que:";
            echo "<br/><br/>Wo =","" ,  $wo, "lb";
	    echo "<br/><br/>Por medio de la relacion Wf/Wo que equivale a 0.159; podemos hayar ahora el peso del conbustible el cual es super importante para encontrar la capacidad de los tanques";
            echo  "<br/><br/><img src=\"images/ec8.24.png\">";
            echo  "<br/><br/>Wf = ", "", $wf,"","lb";
            echo  "<br/><br/>El peso de la gasolina de aviacion es  5,64 libras/gal. Por lo tanto la capacidad del tanque de gasolina es:";
	    echo  "<br/><br/><img src=\"images/ec8.25.png\">";
  	    echo  "<br/><br/>Capacidad tanque = ", "", $cpf,"","gal";
        } 

    } else { 

        echo "Error, no ha introducido todos los datos"; 
  echo  $_POST['Vstall'] ;
    } 
?>
</h4>
<div align="center">
<a href="performans.php">Siguiente</a>
<object width="425" height="355">
<param name="movie" value="http://www.youtube.com/v/z-8W5BHJT30&hl=es">

<param name="wmode" value="transparent">

<embed src="http://www.youtube.com/watch?v=vm0l9RMKsTA&feature=BFa&list=FLsjT69GOeyH95bwugvW3hyw" width="425" height="355" type="application/x-shockwave-flash" wmode="transparent"></embed>
</object>
</div>
</td>
</tr>
</table>

<div id="copyright">Copyright&copy; 2012 - P&aacutegina creada por ANGELA PAOLA TRIVI&NtildeO PINZON - Todos los derechos reservados</div>

</div>
</div>
</body>
</html>
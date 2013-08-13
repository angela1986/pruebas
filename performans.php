<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
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
                 <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>  
                 
                 <script>
            $(document).ready(function(){
                $("#calcular").click(function(evento){
                    evento.preventDefault();
                    $("#destino1").load("calculo.php", {valor: $("#NACA_ROOT_SECTION").val() , valor2: $("#NACA_TIP_SECTION").val()});
                });
            })
        </script>
        
        
        
         <script>
            $(document).ready(function(){
                $("#flaps").click(function(evento){
                    evento.preventDefault();
                    $("#destino2").load("flaps.php", {valor: $("#tflap").val() , valor2: $("#anguloflap").val()});
                });
            })
        </script>
        
        
        
        
        
        
                 
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
<h1><Center>RENDIMIENTO</center></h1>
<CENTER> <IMG SRC="images/400px-Airplane_vortex_edit.JPG" border="0" height="250" width="500"></CENTER>
<h4>
 <p>Esta seccion tiene que definir completamente el rendimiento de la aeronave con parametros como (Cl)max, L/D, W/S, y T/W.Estos parametros son determinados con ecuaciones con la velocidad maxima, rango, techo, velocidad de ascenso, velocidad de perdida,distancia de despegue y la distancia de aterrizaje</p>
<p>COEFICIENTE DE LIFT MAXIMO.</P>
<p>En esta etapa del diseño debemos tomar la decision de como sera la forma del ala, los aviones de aviacion general emplean <a href="seleccionnaca.html" target="-blank">NACA</a> de cuatro o cinco digitos.



<h4>
<table cellspacing=20>
<tr>
   
            <td>
              
                
               
                
                <label> </label><span style="color: #ffffff;"><h4>NACA ROOT SECTION</h4></span>
            </td>
            <td>
                <SELECT name="NACA_ROOT_SECTION" id="NACA_ROOT_SECTION"> 
                    <OPTION VALUE="NACA_23009">NACA 23009 </OPTION>
                    <OPTION VALUE="NACA_23012">NACA 23012</OPTION>
                    <OPTION VALUE="NACA_23018">NACA 23018</OPTION>
                </SELECT>
            </td>
            <td>
                                
                <a href="seleccionnaca.html" target="-blank" title="velocidad stallll"><IMG SRC="images/interro.png" border="0" height="20" width="20"
                   title="Seleccion perfil NACA"/></a>
            </td>
     </tr>
     
 
<tr>
   
            <td>
                <label> </label><span style="color: #ffffff;"><h4>NACA TIP SECTION</h4></span>
            </td>
            <td>
                 <SELECT name="NACA_TIP_SECTION" id="NACA_TIP_SECTION"> 
		<OPTION VALUE="NACA_23009">NACA 23009 </OPTION>
		<OPTION VALUE="NACA_23012">NACA 23012</OPTION>
		<OPTION VALUE="NACA_23018">NACA 23018</OPTION>
     </SELECT>
            </td>
            <td><a href="seleccionnaca.html" target="-blank" title="velocidad stallll"><IMG SRC="images/interro.png" border="0" height="20" width="20"
                   title="Seleccion perfil NACA"/></a>
            </td>
     </tr>
     <tr>
         <td colespan="3">
           
         </td>
     </tr>
     <tr>
         <td>
             <div id="destino1">                    
                </div>
 
         </td>
     </tr>
    <td>
</tr>
</h4>
</td>
<td><center><input type="submit" style = "width : 150px ; height :30px " id="calcular" value="calcular"></center></td>
</tr>
<h4>
    <p>Para mejorar  el rendimiento de despegue y aterrizaje, del ala que vamos a diseñar debe tener flaps del borde de salida. Por simplicidad (y, por lo tanto, el ahorro de costos de producción), debe seleccionar un flap de la siguiente grafica .</p>
    <CENTER> <IMG SRC="images/flaps.png" border="0" height="250" width="500"></CENTER>
    
</table>    
<table colespan="3"> 
<tr>
   <td>
          <span style="color: #ffffff;"><h4>Tipo de flap</h4></span>
            </td>
            <td>
                <SELECT name="tflap" id="tflap"> 
                    <OPTION name="superficies lisas" value="superficies lisas">Superficie lisa </OPTION>
                    <OPTION name="flap plano" value="flap plano">Flap plano</OPTION>
                    <OPTION name="flap dividido" value="flap dividido">Flap dividido</OPTION>
                    <OPTION name="flap slatenelborde" value="flap slatenelborde">Slat en el borde</OPTION>
                    <OPTION name="flap ranuradosimple" value="flap ranuradosimple">Flap ranurado simple</OPTION>
                    <OPTION name="flap ranuradodoble" value="flap ranuradodoble">Flap doble ranurado</OPTION>
                    <OPTION name="flap ranuradoconslat" value="flap ranuradoconslat">Flap doble ranurado con slat</OPTION>
                    <OPTION name="flap compuesto" value="flap compuesto">Flap con succi &oacuten de la capa limite en la parte superior de la superficie de sustentaci &oacuten</OPTION>
             </SELECT>
            </td>
     
       <td>
                                
                <a href="" target="-blank" title="velocidad stallll"><IMG SRC="images/interro.png" border="0" height="20" width="20"
                   title="Seleccion tipo de flap"/></a>
            </td>
</tr>
     
     
    
<tr>
<td>
<span style="color: #ffffff;"><h4> Angulo de defleccion del flap</h4>
</span></td>
<td>
<input type="text" name="anguloflap"  id="anguloflap">
</td><td>
<a href="" title="anguloflap"><IMG SRC="images/interro.png" border="0" height="20" width="20" 
title="Angulo de defleccion del flap"/></a></td>
</tr>



     <tr>
         
             <div id="destino2">                    
                </div>
 
        
     </tr>


<td><center><input type="submit" style = "width : 150px ; height :30px " id="flaps" value="flaps"></center></td>


</h4>


</table>
  </div> <CENTER> <div><a href="php-mysql.php" target="_blank">---REPORTE--  </a></div>  <div><a href="cargaalar.php">--SIGUIENTE---</a></CENTER></div>
   


   

    <div id="copyright">Copyright&copy; 2012 - P&aacutegina creada por ANGELA PAOLA TRIVI&NtildeO PINZON - Todos los derechos reservados</div>

    
    
    
    
    
    
    
    
    
    
    
</body>
</html>
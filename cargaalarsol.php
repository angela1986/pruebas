<?php
$valor = $_POST[""];
  $valor2 = $_POST[""];
  $impri = '';
$link = mysql_connect("localhost","root","root");
     mysql_select_db("nombre_base_de_datos",$link); 
    
     $sql = 'select * from datos_entrada ORDER BY ID DESC LIMIT 1';
     
    $result = @mysql_query($sql,$link);
   
   $ret = mysql_fetch_array($result); 

   /// es el valor seleccionado
    $segm = $ret["vstall"];
    $segm2 = $ret["Xmision"];
    
    
     $link = mysql_connect("localhost","root","root");
     mysql_select_db("base_de_datos",$link); 
    
     $sql = 'select * from rendimiento2 ORDER BY ID DESC LIMIT 1';
     
    $result = @mysql_query($sql,$link);
   
   $ret = mysql_fetch_array($result);
   /// es el valor seleccionado
    $segm1 = $ret["clmaxdepreciado"];
    $dencidad = 0.002377;
    //(w/s)
    $rws=(1/2)* $dencidad*$segm*$segm*$segm1;
    $vf=1.23* $segm;
    $g=32.2; 
    $r=($vf*$vf)/(0.2*$g);
    $hf=$r*(1-0.99863);
    $sa = (50-$hf)/0.052408;
    $sf = $r*(0.052336);
    $j=1.15;
    $n=3;
    $sg= $segm2-$sa-$sf;
    $casass= sqrt((2/$dencidad)*(1/$segm1));
    $aa = $j*$n *$casass;
    $niur=0.4;
    $bb=($j*$j)/($g*$dencidad*$segm1*$niur);
    echo "bb " . $segm2 ;
    $i  =  0 ;
    $resp= 0;
    $WS = 0;
    $a = $bb;
    $b = $aa;
    $c = - $sg;
     
    $raiz = ($b^2) - 4* $a * $c;
    //echo "b " . $b . "a: ".$a . "c: ".$c ;
    $s=5158/($rws);
    if ($raiz < 0 )
    {        
        $impri = $impri . "No se puede hacer el calculo Raiz Cudarada negativa";
        
    }
    else
    {
        $r1 = (($b*(-1)) + sqrt($raiz))/(2*$a);
        $r2 = (($b*(-1)) - sqrt($raiz))/(2*$a); 
        if ($r1>0) 
        {
            $r1 = $r1*$r1;
            $rrws =$r1;
        }
        if ($r2>0)
        {
             $r2 = $r2*$r2;
           $rrws = $r2 ;           
        }        
    }       

 $impri = $impri . " <CENTER><IMG SRC=\"images/ec8.26.png\"></CENTER>";


$impri = $impri . "<CENTER><IMG SRC=\"images/dencidad.png\"></CENTER>";

$impri = $impri . "W/s=".$rws;

$impri = $impri . "<p>El valor de W / S esta  limitado por la velocidad  stalling, Para los futuros c&aacutelculos tendremos en cuenta la distancia de aterrizaje teniendo en cuenta que esta es la suma de la distancia de aproximaci&oacuten (Sa). Distancia encendido (Sf) distancia de rodaje (Sg) el &aacutenngulo de aproximaci&oacuten requiere conocimientos de L/D y T/W.  Debido a que no se han hecho estimaciones de cualquiera de los dos sin embargo, se supone, bas&aacutendose en la regla de oro que el &aacutengulo  es de  3 &deg. Vamos a hallar el radio durante el encendido.</P>";

$impri = $impri . "<CENTER><IMG SRC=\"images/ec6.107.png\"></CENTER>";
$impri = $impri . "<center><p>Vf=1.23Vstall</P></center>";

$impri = $impri . "<center>R=</center>".$r;

$impri = $impri . "<p>Ahora hallaremos la altura que se da en este rango </p>";
$impri = $impri . "<CENTER><IMG SRC=\"images/ecaltura.png\"  ></CENTER>";

$impri = $impri . "<center>hf=</center>".$hf;

$impri = $impri . "<p>Por &uacuteltimo Sa :</p>";
$impri = $impri . "<CENTER><IMG SRC=\"images/ecsa.png\"></CENTER>";

$impri = $impri . "<center>sa=</center>".$sa;

$impri = $impri . "<p>La distancia Sf equivale a </p>";
$impri = $impri . "<CENTER><IMG SRC=\"images/ecsf.png\" ></CENTER>";

$impri = $impri . "<center>sf=</center>".$sf;

$impri = $impri . "<p> Una aproximaci&oacuten para la distancia del rodaje en tierra es </p>";
$impri = $impri . "<CENTER><IMG SRC=\"images/ec8.28.png\"></CENTER>";
$impri = $impri . "<p>Para aviones comerciales j= 1.15<p>";
$impri = $impri . "<p>Asumimos que N=3</p>";
$impri = $impri . "<p> <IMG SRC=\"images/niu.png\"  ></p>";
$impri = $impri . "W/S=".$rrws;

$impri = $impri . "<p>Anteriormente se  hallo un W/S el cual equivale a la restricci&oacuten de la velocidad stall. Este &uacutenltimo W/S es  obtenido por la restricci&oacuten de la distancia de aterrizaje. Para calcular el &aacuterea del ala normalmente se toma el W/S con restricci&oacuten de la velocidad stall. </p>";
$impri = $impri . "<CENTER><IMG SRC=\"images/ec8.33.png\" ></CENTER>";
$impri = $impri . "S=".$s;


 
 $link = mysql_connect("localhost","root","root"); 
mysql_select_db("base_de_datos",$link); 
 $sql = "INSERT INTO  cargaalar( dencidad,rws, r,gravedad, vf, hf, sa, sf, sg, rrws,s )
 VALUES ('". $dencidad ."','".$rws ."','".$r."','".$g."','".$vf."','".$hf."','".$sa."','".$sf."','".$sg."','".$rrws."','".$s."')";

                         mysql_query($sql,$link);
                        



  echo $impri; 
?>

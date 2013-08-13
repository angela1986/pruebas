<?php
  $valor = $_POST["valor"];
  $valor2 = $_POST["valor2"];
  $impri = '';
  
  
   $link = mysql_connect("localhost","root","root");
     mysql_select_db("base_de_datos",$link); 
    
     $sql = 'select * from rendimiento ORDER BY ID DESC LIMIT 1';
     
    $result = @mysql_query($sql,$link);
   
   $ret = mysql_fetch_array($result); 
   $campo = "prclmax";
   /// es el valor seleccionado
    $segm = $ret[$campo];
    

    
    if ($valor == "superficies lisas"){
                      $clmaxflap = 1;
                                   
                    }
                    
                      if ($valor == "flap plano"){
                      $clmaxflap = 2.6;          
                    }
                    
                     if ($valor == "flap dividido"){
                      $clmaxflap = 2.6;          
                    }
                    if ($valor == "flap slatenelborde                        "){
                      $clmaxflap = 2.4;          
                    }
                    if ($valor == "flap ranuradosimple                        "){
                      $clmaxflap = 2.9;          
                    }
                    if ($valor == "flap ranuradodoble                        "){
                      $clmaxflap = 3;          
                    }
                    if ($valor == "flap ranuradoconslat                        "){
                      $clmaxflap = 3.3;          
                    }
                    if ($valor == "flap compuesto                        "){
                      $clmaxflap = 3.9;          
                    }
                    
                    
                    
                    $valor2 == "anguloflap";
                    $deltaclmax2 = $clmaxflap-$segm;
                      $promedioflap=$segm+$deltaclmax2;
                     $clmaxdepreciado= $deltaclmax2 * $clmaxflap;
                     
                     
                      $impri = $impri . "";
                       $impri = $impri . "";
                      $impri = $impri . "Promedio de CLmax con ".$valor2." &#176"; 
                        $impri = $impri . "   de deflexi&oacuten de flap= " . $promedioflap;
                            $impri = $impri . "";
                       $impri = $impri . "<p> El Clmax para la totalidad del avi&oacuten , ignorando por el momento el efecto del fuselaje, la cola y otras partes de la configuraci&oacuten , tenemos que es igual a:</p>";
                       $impri = $impri . "";
                      $impri = $impri . "<center><p>Clmax= </p></center>" . $clmaxdepreciado ;

                       
                       
                       $link = mysql_connect("localhost","root","root"); 
                        mysql_select_db("base_de_datos",$link); 
                        $sql = "INSERT INTO rendimiento2( tflap,clmaxflap,anguloflap,
                             deltaclmax2,promedioflap,clmaxdepreciado )  VALUES ('". $valor ."','".$clmaxflap."','".$valor2 ."','"                                .$deltaclmax2."','".$promedioflap."','".$clmaxdepreciado."')";

                         mysql_query($sql,$link);
                   
                     
                        echo $impri; 
                       
                       
  
  
?>
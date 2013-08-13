<?php
  $valor = $_POST["valor"];
  $valor2 = $_POST["valor2"];
  $impri = '';
  
    if ($valor == "NACA_23009"){
                      $clmax = 1.5;
                      $impri = $impri . '<center>ROOT  NACA23009</center>';
                      $impri = $impri . "<left><table><tr><td>";
                    $impri = $impri . "<center><img src=\"images/NACA/N23009.jpg\"></center>";
                     $impri = $impri ."</td><td>";
                     $impri = $impri . "PARAMETROS CRITICOS";
                    $impri = $impri . "<left><table><tr><td>";
                    $impri = $impri . "Clmax=" . $clmax;
                    $impri = $impri ."</td><td>";
                    $impri = $impri ."</td></tr></table></left>"; 
                    $impri = $impri ."</td></tr></table></left>";                    
                                      
                    }
                    
                    if ($valor == "NACA_23012"){
                    $clmax = 1.8;
                    $impri = $impri . "<center>ROOT  NACA23012</center>";
                    $impri = $impri . "<left><table><tr><td>";
                    $impri = $impri . "<center><img src=\"images/NACA/N23012.jpg\"></center>";
                    $impri = $impri ."</td><td>";
                    $impri = $impri . "PARAMETROS CRITICOS";
                    $impri = $impri . "<left><table><tr><td>";
                    $impri = $impri . "Clmax=" . $clmax;
                    $impri = $impri ."</td><td>";
                    $impri = $impri ."</td></tr></table></left>"; 
                    $impri = $impri ."</td></tr></table></left>";                    
                    }
                   
                    
                    if ($valor == "NACA_23018"){
                          $clmax = 1.6;
                    $impri = $impri . "<center>ROOT  NACA23018</center>";
                    $impri = $impri . "<left><table><tr><td>";
                    $impri = $impri . "<center><img src=\"images/NACA/n23018.jpg\"></center>";
                     $impri = $impri ."</td><td>";
                    $impri = $impri . "PARAMETROS CRITICOS";
                    $impri = $impri . "<left><table><tr><td>";
                    $impri = $impri . "Clmax=" . $clmax;
                    $impri = $impri ."</td><td>";
                    $impri = $impri ."</td></tr></table></left>"; 
                    $impri = $impri ."</td></tr></table></left>"; 
                       }
                         if ($valor2 == "NACA_23009"){
                    $clmax2 = 1.5;
                      $impri = $impri . '<center>ROOT  NACA23009</center>';
                      $impri = $impri . "<left><table><tr><td>";
                    $impri = $impri . "<center><img src=\"images/NACA/N23009.jpg\"></center>";
                     $impri = $impri ."</td><td>";
                     $impri = $impri . "PARAMETROS CRITICOS";
                    $impri = $impri . "<left><table><tr><td>";
                    $impri = $impri . "Clmax=" . $clmax2;
                    $impri = $impri ."</td><td>";
                    $impri = $impri ."</td></tr></table></left>"; 
                    $impri = $impri ."</td></tr></table></left>";                    
                                 
                    }
                    if ($valor2 == "NACA_23012"){
                    $clmax2 = 1.8;
                    $impri = $impri . "<center>ROOT  NACA23012</center>";
                    $impri = $impri . "<left><table><tr><td>";
                    $impri = $impri . "<center><img src=\"images/NACA/N23012.jpg\"></center>";
                    $impri = $impri ."</td><td>";
                    $impri = $impri . "PARAMETROS CRITICOS";
                    $impri = $impri . "<left><table><tr><td>";
                    $impri = $impri . "Clmax=" . $clmax2;
                    $impri = $impri ."</td><td>";
                    $impri = $impri ."</td></tr></table></left>"; 
                    $impri = $impri ."</td></tr></table></left>";  
                    }
                    if ($valor2 == "NACA_23018"){
                        
                        $clmax2 = 1.6;
                    $impri = $impri . "<center>ROOT  NACA23018</center>";
                    $impri = $impri . "<left><table><tr><td>";
                    $impri = $impri . "<center><img src=\"images/NACA/n23018.jpg\"></center>";
                     $impri = $impri ."</td><td>";
                    $impri = $impri . "PARAMETROS CRITICOS";
                    $impri = $impri . "<left><table><tr><td>";
                    $impri = $impri . "Clmax=" . $clmax2;
                    $impri = $impri ."</td><td>";
                    $impri = $impri ."</td></tr></table></left>"; 
                    $impri = $impri ."</td></tr></table></left>"; 
                       }
                     
                     $prclmax = ($clmax+$clmax2)/2  ;
                      $impri = $impri . "";
                       $impri = $impri . "";
                      $impri = $impri . "Promedio (Cl)max:" . $prclmax ;
                       $impri = $impri . "";
                      
                         $link = mysql_connect("localhost","root","root"); 
                        mysql_select_db("base_de_datos",$link); 
                        $sql = "INSERT INTO rendimiento( NACA_ROOT_SECTION,NACA_TIP_SECTION,
                             clmax,clmax2, prclmax ) VALUES ('". $valor ."','".$valor2 ."','".$clmax."','".$clmax2."','".$prclmax."')";

                         mysql_query($sql,$link);
                        
                        
        
                       echo $impri; 
                       
                       
  
  
?>
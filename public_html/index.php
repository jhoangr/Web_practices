<?php
//index.php

ini_set('display_errors',0);
$accio=$_GET['accio'];	
//die($accio);
switch($accio)
{
 case "llistar-categories":
      require_once(__DIR__ ."/controllers/categories.php");
      break;
 case "llistar-productesbyID":
      require_once(__DIR__ ."/controllers/llistarProductes.php");
      break;
  case "registrar":
      require_once (__DIR__."/controllers/controlador_registro.php");
      break;
 case "mostrar-registro":
      //die($accio);
      require_once (__DIR__."/controllers/controlador_vista_registro.php");
      break;
 case  "mostrar-login":
       require_once(__DIR__."/controllers/controlador_vista_login.php");
 default:
         require_once(__DIR__ ."/controllers/controlador_portada.php");
      break;
}
?>

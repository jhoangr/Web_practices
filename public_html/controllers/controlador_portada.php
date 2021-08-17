
<?php
    require_once(__DIR__ ."/../views/header.php");
	require_once(__DIR__ ."/../models/accesoBD.php");
	require_once(__DIR__ ."/../models/consultaCategories.php");
	$connexio = connectaBD();
	$categories = consultaCategories($connexio);
	require_once (__DIR__."/../views/vista_portada.php");
	//require_once(__DIR__. "/../views/footer.php");
?>

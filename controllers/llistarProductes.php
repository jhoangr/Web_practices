<?php

$categoriaID=$_GET['categoriaID'];

        include __DIR__ ."/../models/accesoBD.php";
        include __DIR__ ."/../models/consultaProductosCategoriasbyID.php";
        $connexio = connectaBD();
        $productos = consultaCategoriesbyID($connexio,$categoriaID);
        include __DIR__."/../views/llistatProductosbyID.php";
?>




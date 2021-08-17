<?php
        require_once(__DIR__ ."/../models/accesoBD.php");
        $connexio = connectaBD();
        require_once(__DIR__."/../models/registroBD.php");
        userRegistration($connexio);

?>




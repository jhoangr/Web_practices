<?php
function connectaBD(){
 $servidor="localhost";$usuari="tdiw-d5";$clau="ut3fLotS";
 
try{ $connexio=new PDO("mysql:host=$servidor;dbname=tdiwd5;charset=UTF8",$usuari,$clau);
$connexio->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){echo "Error:"; $e->getMessage();}
return ($connexio);
}
?>

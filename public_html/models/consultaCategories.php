<?php 
function consultaCategories($connexio)
 { 

   try{

      $consulta=$connexio->prepare('SELECT NOM FROM CATEGORIA');
      $consulta->execute();
      $categories=$consulta->fetchALL(PDO::FETCH_ASSOC);
      }catch(PDOException $e){echo "Error: " .$e->getMessage();}
  return ($categories);

 }
?>

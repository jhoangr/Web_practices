<?php 
function consultaCategoriesbyID($connexio,$CategoriaID)
{
   try{
      $consulta=$connexio->prepare('SELECT P.NOM FROM PRODUCTE P,CATEGORIA C WHERE C.ID=P.ID_CATEGORIA AND P.ID_CATEGORIA='.$CategoriaID);
      $consulta->execute();
      $productes=$consulta->fetchALL(PDO::FETCH_ASSOC);
      }catch(PDOException $e){echo "Error: " .$e->getMessage();}
  return ($productes);

 }
?>


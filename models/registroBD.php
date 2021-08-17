<?php
function userRegistration($connexio)
{
 //RECOGEMOS DATOS DEL FORMULARIO
 $username=$_POST['nombre'];
 $correo=$_POST['mail'];
 $pass=$_POST['password'];
 $direc=$_POST['direccion'];
 $postal=$_POST['cpostal'];
 $actiu=1;
//var_dump(filter_var())


 $poblacio=$_POST['poblacion'];
       try{
          {   //PREPARANDO INSERT BASE DE DATOS, ID VACIO (AUTOINCREMENTAL)
              $conn = $connexio->prepare("INSERT INTO `CLIENT` (`NOM`, `ACTIU`, `email`, `adreça`, `població`, `ID`, `Password`, `código postal`) VALUES (:nom, :actiu, :email, :adr,:poblacio, NULL,:pass,:cod_p)");
              $conn->bindParam(':nom', $username,PDO::PARAM_STR) ;
              $conn->bindParam(':actiu', $actiu,PDO::PARAM_STR) ;
              $conn->bindParam(':email', $correo,PDO::PARAM_STR) ;
              $conn->bindParam(':adr', $direc,PDO::PARAM_STR) ;
              $conn->bindParam(':poblacio', $poblacio,PDO::PARAM_STR) ;
              $passHash=password_hash($pass,PASSWORD_BCRYPT);
              $conn->bindParam(':pass', $passHash,PDO::PARAM_STR) ;
              $conn->bindParam(':cod_p', $postal,PDO::PARAM_STR) ;
              $conn->execute();
          }
         }
        catch(PDOException $e)
         {
            echo '{"error":{"text":'. $e->getMessage() .'}}';
         }
}
?>


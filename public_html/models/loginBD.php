<?php

	function userLogin($usuario,$password)
	{

		require_once ("accesoBD.php");

		try{
		$connexio = connectaBD();
		$hash_password= hash('sha256',$password); //encriptar passw
		
		$SQL = "SELECT * FROM usuaris WHERE password = ':hash_password' AND usuario = :usuario";
		$consulta = $connexio->prepare($SQL);
		$consulta->bindParam(":usuario",$_POST ["usuario"], PDO::PARAM_INT);
		$consulta->bindParam(":hash_password",$_POST["hash_password"],PDO::PARAM_STR);
		$consulta->execute();
		
		$count = $consulta->rowCount();
		$data = $consulta->fetch(PDO::FETCH_OBJ);
		$connexio = null;
		/*if($count)
		{
		$_SESSION['usuario']=$data->usuario;
		return true
		else{
		return false;}*/
		
		}

		}
		catch(PDOException $e){
		echo '{"error":{"text":'. $e->getMessage() .'  }}';
		}

	}

?>

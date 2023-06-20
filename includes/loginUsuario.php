<?php

    require_once "classes/Usuario.php";
    $usuario = new Usuario();

	if($usuario->loginUsuario($_POST['login'],$_POST['senha']) != false){
		echo "<script type='text/javascript'> alert('Login realizado com sucesso!'); window.location.href='../?pagina=map'; </script>";
	}
	
?>
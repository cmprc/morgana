<?php
require "../../model/Usuario.class";

if(isset($_POST['senha'])){
	extract($_POST);
	$resultado = Usuario::getAll(" WHERE email = '".$email."' AND senha = '".$senha."'", true);

	if(mysqli_num_rows($resultado) > 0){
		$resultado = mysqli_fetch_assoc($resultado);
		session_start();
		$_SESSION['id'] = $resultado['id'];
		$_SESSION['nome'] = $resultado['nome'];
		$_SESSION['email'] = $resultado['email'];
		$_SESSION['nivel'] = $resultado['nivel'];
		echo 'success';
	}
	else
		echo 'error';
}
else
	echo 'error';
?>
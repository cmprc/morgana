<?php

	if(isset($_POST)){
		include_once('../../model/Usuario.class');
		extract($_POST);

		$usuario = new Usuario(null, $user['nome'], $user['email'], $user['senha'], $user['nivel']);
		if($usuario->insert())
			echo Usuario::getLastRegister(array('id' => TRUE))[0];
		else
			echo 'error';
	}
	else
		echo 'error';

?>
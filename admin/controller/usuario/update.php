<?php

if(isset($_POST)){
	include_once('../../model/Usuario.class');
	extract($_POST);


	$usuario = new Usuario($user['id'], $user['nome'], $user['email'], $user['senha'], $user['nivel']);
	if($usuario->update())
		echo 'success';
	else
		echo 'error';
}
else
	echo 'error';

?>
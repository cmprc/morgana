<?php

if(isset($_POST)){
	include_once('../../model/Usuario.class');
	extract($_POST);

	if(Usuario::delete($id))
		echo 'success';
	else
		echo 'error';
}
else
	echo 'error';

?>
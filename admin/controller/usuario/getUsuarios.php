<?php
include_once('../../model/Usuario.class');

$usuarios = Usuario::getAll();
foreach ($usuarios as $key => $value) {
	echo '<tr data-toggle="modal" data-target="#editar_usuario" data-id='.$value['id'].'>';
	echo '	<td> '.$value['id'].' </td>';
	echo '	<td> '.$value['nome'].' </td>';
	echo '	<td> '.$value['email'].' </td>';
	echo '	<td> '.Usuario::fullName($value['nivel']).' </td>';
	echo '</tr>';
}

?>
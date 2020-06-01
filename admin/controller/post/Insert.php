<?php
session_start();

if(isset($_POST)){
	include_once('../../model/Post.class');
	extract($_POST);

	$author = $_SESSION['nome'];

	$post = new Post(null, $post['titulo'], htmlspecialchars_decode($post['corpo']), null, $author);
	if($post->insert())
		echo Post::getLastRegister(array('id' => TRUE))[0];
	else
		echo 'error';
}
else
	echo 'error';

?>
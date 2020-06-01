<?php

if(isset($_POST)){
	include_once('../../model/Post.class');
	extract($_POST);

	$post = new Post($post['id'], $post['titulo'], html_entity_decode($post['corpo']));
	if($post->update())
		echo 'success';
	else
		echo 'error';
}
else
	echo 'error';

?>
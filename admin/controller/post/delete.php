<?php

if(isset($_POST)){
	include_once('../../model/Post.class');
	extract($_POST);

	if(Post::delete($id))
		echo 'success';
	else
		echo 'error';
}
else
	echo 'error';

?>
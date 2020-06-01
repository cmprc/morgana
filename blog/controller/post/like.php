<?php

if (isset($_POST)) {
	include_once('../../model/Post.class');
	Post::addInteraction($_POST['id'], 'likes');
} else {
	echo 'error';
}
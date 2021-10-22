<?php
	//Headers
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');

	include_once('../../config/database.php');
	include_once('../../models/post.php');

	//Instantiate DB & Connect
	$database = new Database();
	$db = $database->connect(); 

	//Instantiate Blog Post Object
	$post = new Post($db);
	
	//Get ID
	$post->id = isset($_GET['id']) ? $_GET['id'] : die();

	//Get Post
	$post->read_single();

	//Create aaray
	$post_arr = array(
		'id' => $post->id,
		'title' => $post->title,
		'body' => $post->body,
		'author' => $post->author,
		'category_id' => $post->category_id,
		'category_name' => $post->category_name
	);

	//Make JSON
	print_r(json_encode($post_arr));










?>
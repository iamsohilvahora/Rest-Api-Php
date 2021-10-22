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

	//Blog Post Query
	$result = $post->read();

	//Get row count
	$num = $result->rowCount();

	//Check if any posts
	if($num>0){
		//Post array
		$post_arr = array();
		$post_arr['data'] = array();
	
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
			extract($row);
			$post_item = array(
				'id' => $id,
				'title' => $title,
				'body' => html_entity_decode($body),
				'author' => $author,
				'category_id' => $category_id,
				'category_name' => $category_name
			);		

			//push to 'Data'
			array_push($post_arr['data'], $post_item);
		}

		//Turn to JSON & Output
		echo json_encode($post_arr);

	}
	else{
		//No Posts
		echo json_encode(
			array('message' => 'No Post Found')
		);
	}
?>
<?php
	//Headers
	header('Access-Control-Allow-Origin: *');
	header('Content-Type: application/json');

	include_once('../../config/database.php');
	include_once('../../models/category.php');

	//Instantiate DB & Connect
	$database = new Database();
	$db = $database->connect();

	//Instantiate Category Object
	$category = new Category($db);

	//Category read Query
	$result = $category->read();

	//Get row count
	$num = $result->rowCount();

	//Check if any categories
	if($num>0){
		//Post array
		$cat_arr = array();
		$cat_arr['data'] = array();
	
		while($row = $result->fetch(PDO::FETCH_ASSOC)){
			extract($row);
			$cat_item = array(
				'id' => $id,
				'name' => $name
			);
			//push to 'Data'
			array_push($cat_arr['data'], $cat_item);
		}

		//Turn to JSON & Output
		echo json_encode($cat_arr);
	}
	else{
		//No Categories
		echo json_encode(
			array('message' => 'No Category Found')
		);
	}
?>
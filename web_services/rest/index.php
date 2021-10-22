<?php
	//Process client request
	include 'functions.php';

	header('Content-type: application/json');
	
	if(!empty($_GET['name'])){
		$name = $_GET['name'];
		$price = get_price($name);
		
		if(empty($price)){
			deliver_response(200, 'Book Not Found', Null);
		}
		else{
			deliver_response(200, 'Book Found', $price);
		}	
	}
	else{
		deliver_response(400, 'Invalid Request', Null);
	}
	
	function deliver_response($status, $status_msg,$data){
		header('HTTP/1.1 $status $status_msg');
		
		$response['status'] = $status;
		$response['status_msg'] = $status_msg;
		$response['data'] = $data;
		
		$response = json_encode($response);
		
		echo $response;
	}
	
	
	//Process the GET request
	/*
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		
		//Resource Address
		$url = "http://localhost/php2018/web_services/rest/$name";
		
		//Send GET /PUT /POST request to resource
		$client = curl_init();
		
	
		curl_setopt($client, CURLOPT_URL, $url);
		curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
		
		//get response from resource
		$response = curl_exec($client);
		
		//decode
		$result = json_decode($response);
		
		echo $result->data;	
	}
	*/
?>

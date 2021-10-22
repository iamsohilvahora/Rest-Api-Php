<?php
if (isset($_POST['order_id']) && $_POST['order_id']!="") {
	$order_id = $_POST['order_id'];
	$url = "http://localhost/php2021/REST%20API/new_rest_api/simple_rest_api/api?order_id=".$order_id;
	//echo $url;
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	$result = json_decode($response);
	
	echo "<table>";
	echo "<tr><td><strong>Order ID:</strong></td><td>$result->order_id</td></tr>";
	echo "<tr><td><strong>Amount:</strong></td><td>$result->amount</td></tr>";
	echo "<tr><td><strong>Response Code:</strong></td><td>$result->response_code</td></tr>";
	echo "<tr><td><strong>Response Desc:</strong></td><td>$result->response_desc</td></tr>";
	echo "</table>";
	echo "<br /><br />";
}
?>

<form action="" method="POST">
	<label>Enter Order ID:</label><br />
	<input type="text" name="order_id" placeholder="Enter Order ID" required/>
	<br /><br />
	<button type="submit" name="submit">Submit</button>
</form>
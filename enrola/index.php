<?php 
function get_api_access_token() {

	$curl = curl_init();

	curl_setopt_array($curl, [
		CURLOPT_URL => "https://app.enrola.co.uk/api/v1/get-token?client_id=38_25qfcsah4o008sw48gookowwwwss8wwoscsowgswggss08k408&client_secret=4fpky06g4p6oswkcsocwsskks44okwwocsgw8cogk4088w0o4",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
	]);
	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);

	if ($err) {
		echo "cURL Error #:" . $err;
		exit();
	} else {
		$data = json_decode($response);
		if($data->status == 'success') {
			return $data->data->token;
		}
	}
}

function submit_form_data() {
	$access_token = get_api_access_token();
	if(empty($access_token)) {
		echo 'Token is not found';
		exit;
	}

	// enrola.co.uk API url
	$url = 'https://app.enrola.co.uk/api/v1/applications/add?access_token='.$access_token;

	// Setup request to send json via POST
	$data = array(  
		'opportunity_id' => 9602,
		'job_board_id' => 6,
		'first_name' => 'Tester 101',
		'last_name' => 'Tester 101',
		'email' => 'emailtesterfour@gmail.com',
		'birth_date' => '1990-01-01',
		'postcode' => 'E16 2TA',
		'mobile' => '07417417417',
		'address' => '0700, 5 Floow, Iscone Elegance, London'
	);

	$load_data = json_encode($data);

	// Create a new cURL resource
	$ch = curl_init($url);

	// Attach encoded JSON string to the POST fields
	curl_setopt($ch, CURLOPT_POSTFIELDS, $load_data);

	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

	// Return response instead of outputting
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	// Execute the POST request
	$result = curl_exec($ch);

	curl_close($ch);

	echo $access_token;

	echo '<pre>';
	print_r($result);
	echo '</pre>';
}

submit_form_data();

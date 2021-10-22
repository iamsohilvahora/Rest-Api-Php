<?php
//Image scrape with Curl in php
$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, "http://www.amazon.in/s?rh=n%3A4363894031&fs=true&ref=lp_4363894031_sar"); //get method
curl_setopt($ch, CURLOPT_URL, "https://bigbasket.com/pc/fruits-vegetables/fresh-fruits/"); //get
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
//curl_setopt($ch, CURLOPT_HEADER, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//curl_setopt($ch, CURLOPT_MAXREDIRS, 3);

$result = curl_exec($ch);
//print_r($result);
curl_close($ch);

preg_match_all('!//www.bigbasket.com/media/uploads/p/s/(.*).jpg!', $result, $data);
$finalArr = array_unique($data[0]);
foreach($finalArr as $imgSrc){
	echo "<img src='$imgSrc' />";
}


?>
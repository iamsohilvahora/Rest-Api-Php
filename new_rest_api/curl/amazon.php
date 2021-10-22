<?php
//Display data of amazon and Image scrape with Curl in php
$ch = curl_init();

$search = "chetan bhagat books";
$url = "https://www.amazon.in/s?k=$search";

curl_setopt($ch, CURLOPT_URL, $url); //get method
//curl_setopt($ch, CURLOPT_URL, "https://bigbasket.com/pc/fruits-vegetables/fresh-fruits/"); //get
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//curl_setopt($ch, CURLOPT_HEADER, 5);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
//curl_setopt($ch, CURLOPT_MAXREDIRS, 3);

//$result = curl_exec($ch);
curl_exec($ch);
//print_r($result);
curl_close($ch);

preg_match_all('!//https://m.media-amazon.com/images/I/(.*).jpg!', $result, $data);
$finalArr = array_unique($data[0]);
foreach($finalArr as $imgSrc){
	echo "<img src='$imgSrc' />";
}


?>
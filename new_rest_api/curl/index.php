<?php
//curl_init();
//curl_setopt();
//curl_exec();
//curl_close();

//echo "Curl";

//For url
$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, "http://www.google.com/search?q=ff9"); //get method
curl_setopt($ch, CURLOPT_URL, "http://www.google.com/");
//curl_setopt($ch, CURLOPT_URL, "http://localhost/php2018/ecommerce/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//$arr = array('search'=>'Tenet');
//curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
//curl_setopt($ch, CURLOPT_URL, "http://localhost/php2018/ecommerce/");
$result = curl_exec($ch);
print_r($result);
curl_close($ch);

//5141 + 1370
//17 july

/*
//For image file
$url = "http://content.endurance.com/img/webbuilder_8425_10.png";
$image = "pinImage.jpg";
$fimage = fopen($image, 'w+');
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_FILE, $fimage);
//curl_setopt($ch, CURLOPT_TIMEOUT, 1000);
curl_exec($ch);
curl_close($ch);
fclose($fimage);
*/

/*
//Image path which we will download
$imageURL='https://content.endurance.com/img/webbuilder_8425_10.png';

//get extension of image
$ext = pathinfo($imageURL, PATHINFO_EXTENSION);

//Local path of image - where will we save the image
$downloadTo = fopen('import/image/file'.  rand(1, 9999).'.'.$ext, 'wb');

//Download and save image
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $imageURL);
curl_setopt($ch, CURLOPT_FILE, $downloadTo);
curl_setopt($ch, CURLOPT_HEADER, 0);
$output = curl_exec($ch);
curl_close($ch);
*/






?>
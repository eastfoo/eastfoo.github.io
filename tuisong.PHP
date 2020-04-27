<?php

$urls = array(

	'http://www.eastfoo.com/index.html',
	'http://www.eastfoo.com/doctors/member1.html',
	'http://www.eastfoo.com/doctors/member2.html',
	'http://www.eastfoo.com/doctors/member3.html',
	'http://www.eastfoo.com/doctors/member4.html',
);
$api = 'http://data.zz.baidu.com/urls
site=www.eastfoo.com&token=zXN4qV0xWkSPnpIG';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
?>
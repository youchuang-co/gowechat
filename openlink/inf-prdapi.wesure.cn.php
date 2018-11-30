<?php
$param = json_encode(array(
    'body' => array(
        'url' => $_GET['id'],
    ),
));
$url = 'https://inf-prdapi.wesure.cn/prdapp/innerapi/acctapi/v1/wesure-converturl/Converturl.Openlink';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec($ch);
curl_close($ch);
echo $contents;
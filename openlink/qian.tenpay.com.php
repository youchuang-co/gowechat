<?php
$param = json_encode(array(
    'url' => $_GET['id'],
    'timestamp' => time(),
    'signature' => sha1($id.time().'c1d477c67b95a1c8cf18b0f45a096b1b')
));
$url = 'http://qian.tenpay.com/app/v2.0/wxh5_fund_qry_openlink.cgi';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec($ch);
curl_close($ch);
echo $contents;
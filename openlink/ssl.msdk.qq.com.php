<?php
$param = json_encode(array(
    'appid' => 'wxc4c0253df149f02d',
    'openid' => 'osewR0lJ9HwtAiDLxDzhyG0pmOek',
    'accessToken' => '14_wF73l8RQQsEZrjSFmxXAR91u2-B4depuKboYnq5npsfmD3qWWnEzvlIXEEI-aYATSU2HoV2APtk3aVEKgsif6zlQvdkU204iUXAbZXDfsYo',
    'url' => $_GET['id'],
));
$url = 'https://ssl.msdk.qq.com/profile/wxdeeplink?appid=wxc4c0253df149f02d&timestamp=1539386455&sig=50ee6151b0aef04e54bdfaad67bd4b3f&encode=2';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);  
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec($ch);
curl_close($ch);
echo $contents;
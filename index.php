<?php
// 创建一个新cURL资源>
$ch = curl_init();

// 设置URL和相应的选项
curl_setopt($ch, CURLOPT_URL, "http://index.html");
curl_setopt($ch, CURLOPT_AUTOREFERER, "https://weibo.com/");
header('Location: http://index.html');
?>
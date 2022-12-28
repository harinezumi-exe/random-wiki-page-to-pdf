<?php
$endPoint = "https://en.wikipedia.org/w/api.php";

// &prop=info&list=&generator=random&formatversion=2&inprop=url&grnnamespace=0
$params = [
    "action" => "query",
    "format" => "json",
    "prop" => "info",
    "generator" => "random",
    "inprop" => "url",
    "grnnamespace" => "0"
];

$random_page_query = $endPoint . "?" . http_build_query( $params );

$random_page = curl_init($random_page_query);
print_r($random_page);
// // $fp = fopen("example.txt", "w");
// 
// curl_setopt($ch, CURLOPT_FILE, $fp);
// curl_setopt($ch, CURLOPT_HEADER, 0);
// 
// curl_exec($ch);
// if (curl_error($ch)) {
//     fwrite($fp, curl_error($ch));
// }
// curl_close($ch);
// fclose($fp);
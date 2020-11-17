<?php

$url = "https://geodfw.com";
$fp = fopen($url, 'r');

$html = "";

while(!feof($fp)) {
    $html .= fgets($fp, 4096);
}

preg_match('/<title[^>]*>(.*?)<\/title>/ims',$html,$title);

echo "page title: ".$title[1];
fclose($fp);

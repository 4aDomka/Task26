<?php

$source = file_get_contents('.\index.html');
$dom = new DOMDocument("1.0","UTF-8");
@$dom->loadHTML($source);
$dom->preserveWhiteSpace = false;

// Получаем заголовок
$title = $dom->getElementsByTagName('title')->item(0)->nodeValue;

$description = '';
$keywords = '';

foreach($dom->getElementsByTagName('meta') as $metas) {
    if($metas->getAttribute('name') =='description'){
        $description = $metas->getAttribute('content');
    }
    if($metas->getAttribute('name') =='keywords'){
        $keywords = $metas->getAttribute('content');
    }
}
print_r($title).PHP_EOL;
print_r($description).PHP_EOL;
print_r($keywords).PHP_EOL;
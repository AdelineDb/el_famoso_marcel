<?php
$egg = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs"));
echo '<pre>';
var_dump($egg);
echo '</pre>';


$char = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"));
echo '<pre>';
var_dump($char);
echo '</pre>';

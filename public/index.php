<?php

$egg = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs"), true);
echo '<pre>';
var_dump($egg);
echo '</pre>';

foreach ($egg as $key=>$value) {
    $eggspower = 'les pouvoirs cet oeuf sont :' . $egg[$key]['name'] . '<br>';
    echo $eggspower;
}


$char = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"));
echo '<pre>';

echo '</pre>';
<?php
$eggs = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs"));

echo '<pre>';
var_dump($eggs);
echo '</pre>';

foreach ($eggs as $key => $egg)
{
    echo $eggs['image'][$key];
}


$char = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"));


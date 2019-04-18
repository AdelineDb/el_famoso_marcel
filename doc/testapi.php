<?php
$characters = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"));

echo '<pre>';
var_dump($eggs);
echo '</pre>';

foreach ($eggs as $key => $egg)
{
    echo $eggs['image'][$key];
}




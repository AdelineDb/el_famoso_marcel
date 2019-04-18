<?php

$char = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true);

require_once ('_head.html');

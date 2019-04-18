<?php
$egg = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs"), true);
$char = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>EASTER WILD</title>
    <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
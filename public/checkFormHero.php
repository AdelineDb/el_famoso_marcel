<?php

session_start();
$_SESSION['hero'] = $_POST['hero'];

$messageErreur = '';

if (!empty($_POST['hero'])){

    header('Location: cookingEgg.php');

}else{
    $messageErreur = 'Veuillez sélectionner votre Héro';
}
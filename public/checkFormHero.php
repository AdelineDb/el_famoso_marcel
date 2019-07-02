<?php

session_start();


$messageErreur = '';

if (isset($_POST['hero'])){
    $_SESSION['hero'] = $_POST['hero'];
    header('Location: cookingEgg.php');

}
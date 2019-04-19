<?php
require 'fin1.php';

if (session_destroy()) {
    header('Location: index.php');
}
?>

<?php
session_start();
require '_head.php';

$eggs = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs"), true);
$esterEgg = [
    '5cac51240d488f0da6151bdf' => 1,
    '5cac51240d488f0da6151bd3' => 1,
    '5cac51240d488f0da6151be3' => 1,
    '5cac51240d488f0da6151bed' => 1
];

if (!isset($_SESSION['egg'])) {
    header('Location: index.php');
}
        $succes = 0;

        ksort($esterEgg);
        ksort($_SESSION['egg']);

        foreach ($_SESSION['egg'] as $id => $egg) {
            if ($id == "5cac51240d488f0da6151c07" || $id == "5cac51240d488f0da6151bd1") {
                $succes += 1;}
        }
        if ($succes == 2) {
            header('Location: fin1.php');
        } else {
            header('Location: fin2.php');
        }

        $nbOeufs = 0;
        foreach ($_SESSION['egg'] as $id => $egg) {
            $nbOeufs += 1;
        }

        if (serialize($esterEgg) == serialize($_SESSION['egg'])) {
            header('Location: fin3.php');
        }

        ?>






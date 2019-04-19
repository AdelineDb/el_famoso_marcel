<?php
session_start();
require '_head.php';

$eggs = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs"), true);
$esterEgg = ['5cac51240d488f0da6151bdf' => 1, '5cac51240d488f0da6151bd3' => 1, '5cac51240d488f0da6151be3' => 1, '5cac51240d488f0da6151bed' => 1];

if (!isset($_SESSION['egg'])) {
    header('Location: index.php');
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php echo '<pre>';
        var_dump($_SESSION['egg']);
        echo '</pre>' ?>
        <ul>
            <?php
            $succes = 0;
            foreach ($_SESSION['egg'] as $key => $egg) {
                if ($esterEgg == ($_SESSION['egg'])) {
                    header('Location: fin3.php');
                } elseif ($key == "5cac51240d488f0da6151c07" || $key == "5cac51240d488f0da6151bd1") {
                    $succes += 1;

                }
                echo '<pre>';
                var_dump($succes);
                echo '</pre>';
                echo '<pre>';
                var_dump($key);
                echo '</pre>';
            }
            if ($succes == 2) {
                header('Location: fin1.php');
            } else {
                header('Location: fin2.php');
            }
            var_dump($_SESSION['egg']);
            ?>


        </ul>
    </div>
</section>





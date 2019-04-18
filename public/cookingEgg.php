<?php
require '_head.php';
include '../src/function.php';

$eggs = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs"), true);
?>

<body class="containerEggs">

<h1>EASTER COOK FOR THE QUEEN</h1>

<h2>Maintenant crée ton oeuf parfait pour la reine</h2>

<div class="allTheCards">
    <?php foreach ($eggs as $egg => $value) { ?>
        <div class="block_cards"> <?php
            if ($eggs[$egg]['id'] == "5cac51240d488f0da6151bf5" || $eggs[$egg]['id'] == "5cac51240d488f0da6151c07" || $eggs[$egg]['id'] == "5cac51240d488f0da6151be0" || $eggs[$egg]['id'] == "5cac51240d488f0da6151bf3" || $eggs[$egg]['id'] == "5cac51240d488f0da6151c09" || $eggs[$egg]['id'] == "5cac51240d488f0da6151bcd" || $eggs[$egg]['id'] == "5cac51240d488f0da6151bd1" || $eggs[$egg]['id'] == "5cac51240d488f0da6151be6" || $eggs[$egg]['id'] == "5cac51240d488f0da6151c14" || $eggs[$egg]['id'] == "5cac51240d488f0da6151bde" || $eggs[$egg]['id'] == "5cac51240d488f0da6151bd3" || $eggs[$egg]['id'] == "5cac51240d488f0da6151bdf" || $eggs[$egg]['id'] == "5cac51240d488f0da6151be3" || $eggs[$egg]['id'] == "5cac51240d488f0da6151bed") {
                if ($eggs[$egg]['id'] == "5cac51240d488f0da6151c07" || $eggs[$egg]['id'] == "5cac51240d488f0da6151bed" || $eggs[$egg]['id'] == "5cac51240d488f0da6151c14" || $eggs[$egg]['id'] == "5cac51240d488f0da6151bf3") {
                    ?>
                    <div><img src="<?php echo $eggs[$egg]['image']; ?>" alt="oeuf" width="150px"></div>
                <?php } else { ?>
                    <div><img src="img/oeufmystèrev1.jpg" alt="oeuf" width="150px"></div> <?php
                }
                ?>
                <p class="titreCards"> <?php echo $eggs[$egg]['name']; ?> </p>
                <p class="descriptionCards"> <?php echo 'Calibre ' . $eggs[$egg]['caliber']; ?> </p>
                <p class="descriptionCards"> <?php echo farming($eggs[$egg]['farming']); ?> </p>
                <div></div>
                <?php
            } ?>
        </div>
    <?php } ?>

</div>

</body>
</html>
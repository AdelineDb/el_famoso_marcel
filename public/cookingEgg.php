<?php
session_start();

require '_head.php';
include '../src/function.php';

$eggs = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs"), true);
$characters = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true);
?>



<body class="containerEggs">

<h1>EASTER COOK FOR THE QUEEN</h1>

<h2>Maintenant crée ton oeuf parfait pour la reine</h2>

<div class="cardjoueur">
    <?php foreach ($characters as $key => $character)
    {
        if ($characters[$key]['name'] == $_SESSION['hero']){ ?>
            <div class="block_cards">

                <img src="<?php echo $characters[$key]['image']; ?>" width="250px" height="380px" alt="">

                <div class="">
                    <p class="titreCards"><?php echo $characters[$key]['name']; ?></p>
                    <p class="descriptionCards"><?php echo $characters[$key]['origin']; ?></p>
                </div>

            </div>

        <?php }} ?>
    <p class="textintro">Maintenant à toi de jouer. <br/>
        Choisis 4 oeufs pour créer le mélange parfait qui créera l'oeuf parfait que la Reine attend de toi.`
        Tu ne vois pas les images, c'est normal... sois simplement plus malin.</p>
</div>

<div class="allTheCards1">

    <?php foreach ($eggs as $egg => $value) { ?>

        <?php
        if ($eggs[$egg]['id'] == '5cac51240d488f0da6151bed' || $eggs[$egg]['id'] == '5cac51240d488f0da6151c07' ||
            $eggs[$egg]['id'] == '5cac51240d488f0da6151be0' || $eggs[$egg]['id'] == '5cac51240d488f0da6151bf3' ||
            $eggs[$egg]['id'] == '5cac51240d488f0da6151c09' || $eggs[$egg]['id'] == '5cac51240d488f0da6151be6' ||
            $eggs[$egg]['id'] == '5cac51240d488f0da6151bcd' || $eggs[$egg]['id'] == '5cac51240d488f0da6151bd1' ||
            $eggs[$egg]['id'] == '5cac51240d488f0da6151c14' || $eggs[$egg]['id'] == '5cac51240d488f0da6151bde' ||
            $eggs[$egg]['id'] == '5cac51240d488f0da6151bd3' || $eggs[$egg]['id'] == '5cac51240d488f0da6151bdf' ||
            $eggs[$egg]['id'] == '5cac51240d488f0da6151be3' || $eggs[$egg]['id'] == '5cac51240d488f0da6151bf5') {
            ?>
            <div class="block_cards1">
                <img class="hoverimg" src="<?php echo $eggs[$egg]['image']; ?>" alt="oeuf" width="210px" height="220px">
                <div class="textcenter">
                    <span> <?php echo $eggs[$egg]['name']; ?> </span>
                    <span> <?php echo 'Calibre ' . $eggs[$egg]['caliber']; ?> </span>
                    <span> <?php echo farming($eggs[$egg]['farming']); ?> </span>
                </div>

                <div></div>
            </div>
            <?php
        } ?>

    <?php } ?>

</div>

<div class="boutonfin1">
    <button type="submit" formaction="fin1.php" formtarget="_self">JE CRÉE L’OEUF</button>
</div>

<a href="index.php">HOME</a>
</body>
</html>
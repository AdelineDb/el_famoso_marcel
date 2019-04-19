<?php
session_start();

require '_head.php';
include '../src/function.php';

$eggs = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs"), true);
$characters = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true);
$allEggs = [
    '5cac51240d488f0da6151bed', // trump
    '5cac51240d488f0da6151c07',
    '5cac51240d488f0da6151be0',
    '5cac51240d488f0da6151bf3',
    '5cac51240d488f0da6151c09',
    '5cac51240d488f0da6151be6',
    '5cac51240d488f0da6151bcd',
    '5cac51240d488f0da6151bd1',
    '5cac51240d488f0da6151c14',
    '5cac51240d488f0da6151bde',
    '5cac51240d488f0da6151bd3', // trump
    '5cac51240d488f0da6151bdf', // trump
    '5cac51240d488f0da6151be3', // trump
    '5cac51240d488f0da6151bf5'];

if (isset($_GET['add_egg'])) {
    if (in_array($_GET['add_egg'], $allEggs)) {
        $addEggs = $_GET['add_egg'];
        if (!isset($_SESSION['egg'][$addEggs])) {
            $_SESSION['egg'][$addEggs] = 1;
        }
    }
}
?>

<body class="containerEggs">

<h1>EASTER COOK FOR THE QUEEN</h1>

<div class="cardjoueur">

    <?php foreach ($characters as $key => $character) {
        if ($characters[$key]['name'] == $_SESSION['hero']) { ?>
            <div class="block1">

                <img src="<?php echo $characters[$key]['image']; ?>" width="120px" alt="">

                <div class="">
                    <p class="titrecard"><?= $characters[$key]['name'] . '<br>' . $characters[$key]['origin']; ?></p>
                </div>

            </div>

        <?php }
    } ?>

</div>
<div class="textintro1">
    <h2>Maintenant crée ton oeuf parfait pour la reine</h2>

    <p class="textintro2">Maintenant à toi de jouer. <br/>
        Choisis 4 oeufs, et uniquement 4, pour créer le mélange parfait qui créera l'oeuf parfait que la Reine attend de toi.<br/>
        Sois le plus malin dans cette quête de l'oeuf parfait. A tes risques et périls...</p>
</div>

<div class="allTheCards1">

    <?php foreach ($eggs

    as $egg => $value) { ?>

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
        <?php if ((isset($_SESSION['egg'])== $eggs[$egg]['id'])) { ?>
            <a class="addegg" href="?add_egg=<?= $eggs[$egg]['id'] ?>">Je choisis cet oeuf</a>
        <?php } else { ?>
            <a class="addegg1" href="?add_egg=<?= $eggs[$egg]['id'] ?>">J'ai choisi cet oeuf</a>
        <?php }
        }
        } ?>

        <div></div>
    </div>
</div>

<div>
    <a class="boutonfin1 textdeconone" href="checkFormEgg.php">
        <button type="submit">JE CRÉE L'OEUF</button>
    </a>
</div>

<a href="index.php">HOME</a>
<a href="fin1.php">FIN 1</a>
<a href="fin2.php">FIN 2</a>
<a href="fin3.php">FIN 3</a>

</body>
</html>
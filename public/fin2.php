<?php
session_start();

require_once('_head.php');
$characters = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true);
$eggs = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs"), true);
?>
<body class="fin1">

<h1>EASTER COOK FOR THE QUEEN</h1>

<section>
    <div class="block1">
        <?php foreach ($characters as $key => $character)
        {
        if ($characters[$key]['name'] == $_SESSION['hero']){ ?>
        <div class="cardjoueur">
            <img src="<?php echo $characters[$key]['image']; ?>" width="120px" "alt="">

            <div class="">
                <p class="titrecard"><?= $characters[$key]['name'] . '<br>' . $characters[$key]['origin']; ?></p>
                </p>
            </div>
            <?php }} ?>
        </div>
    </div>
    <div class="textintro1">
        <h2>Tu as tué la Reine !</h2>
        <div class="fin1bloc2">
            <img src="img/roimort.jpg" alt="la reine est morte" width="320px" height="446px">
            <p>Le royaume est déchu.<br/>
                Tu es banni.<br/>
                Pas merci hein…</p>
        </div>
    </div>




    <div class="cardoeuffin1bloc1">

        <?php var_dump($_SESSION['egg']);
        if ((isset($_SESSION['egg']) && (key_exists($eggs[$egg]['id'], $_SESSION['egg'])))) { ?>
        <p><div class="block_cards1">
            <img class="hoverimg" src="<?php echo $eggs[$egg]['image']; ?>" alt="oeuf" width="210px" height="220px">
            <div class="textcenter">
                <span> <?php echo $eggs[$egg]['name']; ?> </span>

            </div></p>
        <?php } ?>

    </div>
    <div class="bottom">
        <a class="boutonfin" href="choixPersonnage.php"><button type="submit">JE JOUE</button></a>
        <a class="boutonfin" href="cookingEgg.php"><button type="submit">JE CHANGE DE PERSONNAGE</button></a>
    </div>

    <a href="index.php">HOME</a>
    <a href="fin1.php">FIN 1</a>
    <a href="fin2.php">FIN 2</a>
    <a href="fin3.php">FIN 3</a>
</section>
</body>
</html>


<?php

session_start();
session_destroy();

require_once('_head.php');
$characters = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true);

?>
<body class="fin1">

<h1>EASTER COOK FOR THE QUEEN</h1>

<section>
    <div class="block1">
        <?php foreach ($characters as $key => $character)
        {
        if ($characters[$key]['name'] == $_SESSION['hero']){ ?>
        <div class="cardjoueur">
            <img src="<?php echo $characters[$key]['image']; ?>" width="120px" alt="">

            <div class="">
                <p class="titreCards"><?php echo $characters[$key]['name']; ?></p>
                <p class="descriptionCards"><?php echo $characters[$key]['origin']; ?></p>
            </div>
            <?php }
        }?>
        </div>

        <div class="textmort">
            <h2>Tu as tué la Reine !</h2>
            <div class="textmort2">
            <img src="img/roimort.jpg" alt="la reine est morte" width="320px">
            <p>Le royaume est déchu.<br/>
                Tu es banni.<br/>
                Pas merci hein…</p>
            </div>
        </div>
    </div>

    <div class="cardoeuffin1bloc1">
        <p>Card1</p>
        <p>Card2</p>
        <p>Card3</p>
        <p>Card4</p>

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



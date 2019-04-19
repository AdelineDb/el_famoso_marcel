<?php

session_start();

require_once('_head.php');
$characters = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true);

?>
<body class="fin1">

<h1>EASTER COOK FOR THE QUEEN</h1>

<section>
    <h2>Ton oeuf est parfait, la Reine est ravie !</h2>

    <div class="fin1bloc1">
        <?php foreach ($characters as $key => $character)
        {
        if ($characters[$key]['name'] == $_SESSION['hero']){ ?>
        <div class="cardjoueur">
            <img src="<?php echo $characters[$key]['image']; ?>" width="250px" height="380px" alt="">

            <div class="">
                <p class="titreCards"><?php echo $characters[$key]['name']; ?></p>
                <p class="descriptionCards"><?php echo $characters[$key]['origin']; ?></p>
            </div>
            <?php }} ?>
        </div>
        <div class="fin1bloc2">
            <img src="img/cerceicontente.jpg" alt="la reine est contente" width="320px">
            <p>Je suis satisfaite.<br/>
                Tu gagnes ma reconnaissance et c’est déjà pas mal. Tu vas pouvoir garder ta tête.<br/>
                Allez, salut !</p>
        </div>

    </div>

    <div class="cardoeuffin1bloc1">
        <p>Card1</p>
        <p>Card2</p>
        <p>Card3</p>
        <p>Card4</p>

    </div>
    <div>
        <a class="boutonfin" href="choixPersonnage.php"><button type="submit">JE JOUE</button></a>
        <a class="boutonfin" href="cookingEgg.php"><button type="submit">JE CHANGE DE PERSONNAGE</button></a>
    </div>


</section>
</body>
</html>


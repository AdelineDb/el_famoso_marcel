<?php
session_start();

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
            <p>Ton personnage :</p>
            <img src="<?php echo $characters[$key]['image']; ?>" width="120px" alt="">

            <div class="">
                <p class="titrecard"><?= $characters[$key]['name'] . '<br>' . $characters[$key]['origin']; ?></p>
                </p>
            </div>
            <?php }} ?>
        </div>
    </div>
    <div class="textintro1">
        <h2>Ton oeuf est parfait, la Reine est ravie !</h2>
        <div class="fin1bloc2">
            <img src="img/cerceicontente.jpg" alt="la reine est contente" width="320px" height="471px" >
            <p>Je suis satisfaite.<br/>
                Tu gagnes ma reconnaissance et c’est déjà pas mal. Tu vas pouvoir garder ta tête.<br/>
                Allez, salut !</p>
        </div>
    </div>

    <div class="bottom1">
        <a class="boutonfin" href="lougout1.php"><button type="submit">JE REVIENS AU DÉBUT</button></a>
    </div>

</section>
</body>
</html>


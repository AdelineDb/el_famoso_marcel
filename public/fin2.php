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
            <p>Ton personnage :</p>
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

    <div class="bottom">
        <a class="boutonfin" href="lougout1.php"><button type="submit">JE REVIENS AU DÉBUT</button></a>
    </div>

</section>
</body>
</html>


<?php

session_start();

require_once('_head.php');
$characters = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true);

?>
<body class="fin1">

<h1>EASTER COOK FOR THE QUEEN</h1>

<section>
    <h2>Tu as tué la Reine !</h2>

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
        <div class="fin1bloc2">
            <img src="img/roimort.jpg" alt="la reine est morte" width="320px">
            <p>Le royaume est déchu.<br/>
                Tu es banni.<br/>
                Pas merci hein…</p>
        </div>
    </div>

    <div class="cardoeuffin1bloc1">
        <p>Card1</p>
        <p>Card2</p>
        <p>Card3</p>
        <p>Card4</p>

    </div>
    <div class="boutonfin">
        <button type="submit" formaction="choixPersonnage.php" formtarget="_self">JE RECOMMENCE L'OEUF PARFAIT</button>
        <button type="submit" formaction="cookingegg.php" formtarget="_self">JE CHANGE DE PERSONNAGE</button>
    </div>


</section>
</body>
</html>



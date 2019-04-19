<?php

$char = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true);

require_once('_head.php');

?>
<body class="home">

<h1>EASTER COOK FOR THE QUEEN</h1>

<section class="hometaille">
    <div class="central-home">
        <div>
            <img src="https://images.innoveduc.fr/easter_hackathon/Cersei_Lannister.png" alt="Cersei Lannister">
            <div class="cersei-center">
            <p class="reine">LA REINE</p>
            <p>Cersei Lannister<br/>
            Humaine (ou presque)</p>
            </div>
        </div>

        <div class="home-intro-space">
            <h2 class="home-intro">J'ai faim !</br>
            Apporte-moi le meilleur oeuf de Pâques et je te récompenserai !</br>
            Néanmoins attention, ton mélange pourrait avoir de graves conséquences sur le royaume...</h2>
        </div>
    </div>
</section>
<div>
    <a class="boutonfin" href="choixPersonnage.php"><button type="submit">JE JOUE</button></a>
</div>

</body>
</html>


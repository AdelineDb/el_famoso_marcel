<?php

$char = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true);

require_once('_head.php');

?>
<body class="home">

<section>
    <div class="central-home">
        <div>
            <img src="https://images.innoveduc.fr/easter_hackathon/Cersei_Lannister.png" alt="Cersei Lannister">
            <div class="cersei-center">
            <p>LA REINE</p>
            <p>Cersei Lannister</p>
            <p>Humaine</p>
            </div>
        </div>

        <div class="home-intro-space">
            <h2 class="home-intro">J'ai faim !</br>
            Apporte-moi le meilleur oeuf de </br>
            Pâques et je te récompenserai !</br>
            Néanmoins attention, ton mélange</br>
            pourrait avoir de graves</br>
            conséquences sur le royaume...</h2>
        </div>
    </div>
    <div class="btn-center">
        <button class="btn-home" type="button">
            JE JOUE
        </button>
    </div>

</section>

</body>
</html>

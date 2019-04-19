<?php

session_start();

require_once('_head.php');
$characters = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true);

?>
<body class="fin1">

<h1>EASTER COOK FOR THE QUEEN</h1>

<section>
    <h2>GAME OVER</h2>

    <div class="fin1bloc3">
        <img src="img/130428-bombe-mururoa1.jpg" alt="la reine est contente" width="80%">
    </div>

    <div class="boutonfin">
        <button type="submit" formaction="choixPersonnage.php" formtarget="_self">JE RECOMMENCE L'OEUF PARFAIT</button>
        <button type="submit" formaction="cookingegg.php" formtarget="_self">JE CHANGE DE PERSONNAGE</button>
    </div>


</section>
</body>
</html>



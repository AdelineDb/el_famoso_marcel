<?php
session_start();
var_dump($_SESSION['hero']);
 require '_head.php';


$eggs = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs")); ?>

<section class="containerEggs">

<h2>Maintenant crée ton oeuf parfait pour la reine</h2>




</section>
</body>
</html>
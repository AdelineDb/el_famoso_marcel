<?php

require '_head.php'; ?>

<body class="perso">

<h1>EASTER COOK FOR THE QUEEN</h1>

<h2>Choisis ton personnage</h2>

<?php
$characters = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true); ?>

<div class="allTheCards" >

    <?php
    foreach ($characters as $key => $character)
    { if ($characters[$key]['id'] == '5cac51240d488f0da6151c46' || $characters[$key]['id'] == '5cac51240d488f0da6151c68' ||
        $characters[$key]['id'] == '5cac51240d488f0da6151c41' || $characters[$key]['id'] == '5cac51240d488f0da6151c4c' ||
        $characters[$key]['id'] == '5cac51240d488f0da6151c34'){ ?>

        <div class="block_cards">

            <img class="" src="<?php echo $characters[$key]['image']; ?>" width="250px" height="380px" alt="">

            <div class="">
                <p class="titreCards"><?php echo $characters[$key]['name']; ?></p>
                <p class="descriptionCards"><?php echo $characters[$key]['origin']; ?></p>
            </div>

        </div>

        <?php }

    } ?>

</div>
<div class="boutonfin">
    <button type="button" formaction="cookingegg.php" formtarget="_self">JE CHOISIS</button>
</div>


</body>
</html>





<?php
$egg = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs"),true);

$char = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true);

?>

<table>
    <tr>
    <td>Egg ID</td>
    <td>Egg name</td>
    <td>Egg caliber</td>
    <td>Egg farming</td>
    <td>Egg species</td>
    <td>Egg image</td>
    <td>Egg power</td>
    </tr>
    <?php foreach ($egg as $key => $value){ ?>
    <tr>
        <td><?= $eggId = $egg[$key]['id']; ?></td>

        <td><?= $eggName = $egg[$key]['name']; ?></td>

        <td><?= $eggCaliber = $egg[$key]['caliber']; ?></td>

        <td><?= $eggFarming = $egg[$key]['farming']; ?></td>

        <td><?= $eggCountry = $egg[$key]['country']; ?></td>

        <td><img src="<?= $eggImage = $egg[$key]['image']; ?>" width="150px"</td>

        <td><?= $eggPower = $egg[$key]['power']; ?></td>
    </tr>
    <?php }?>
</table>

<table>
    <tr>
        <td>Character ID</td>
        <td>Character name</td>
        <td>Character country</td>
        <td>Character image</td>
    </tr>
    <?php foreach ($char as $key1 => $value1){ ?>
        <tr>
            <td><?= $charId = $char[$key1]['id']; ?></td>

            <td><?= $charName = $char[$key1]['name']; ?></td>

            <td><?= $charSpecies = $char[$key1]['species']; ?></td>

            <td><img src="<?= $charImage = $char[$key1]['image']; ?>" width="150px"</td>

        </tr>
    <?php }?>
</table>
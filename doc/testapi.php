<?php
<<<<<<< HEAD
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
=======
$characters = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"));

echo '<pre>';
var_dump($eggs);
echo '</pre>';

foreach ($eggs as $key => $egg)
{
    echo $eggs['image'][$key];
}


$char = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"));


$egg = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs"), true);
echo '<pre>';
var_dump($egg);
echo '</pre>';

foreach ($egg as $key => $value) {
    $eggspower = 'Oeuf :' . $egg[$key]['name'] . '<br>';
    echo $eggspower;
}
echo 'PERSONNAGES';

$char = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"), true);
echo '<pre>';
?>
<table>
    <thead>
    <tr>
        <td>name</td>
        <td>gender</td>
        <td>origin</td>
        <td>image</td>
        <td>skills</td>
    </tr>
    </thead>
    <tbody>

    <?php
    foreach ($char as $key => $value) {
        echo '<tr> <td>';
        $charName = $char[$key]['name'];
        echo $charName;
        echo '</td>';

        echo '<td>';
        $charGender = $char[$key]['gender'];
        echo $charGender;
        echo '</td> ';

        echo '<td>';
        $charOrigin = $char[$key]['origin'];
        echo $charOrigin;
        echo '</td>';

        echo '<td>';
        $charImg = $char[$key]['image'];?>
        <img src="<?= $charImg;?>" alt="..." width="150px">
        </td>

        <td> <ul><?php
        '<li>'; $charSkills = $char[$key]['skills'][0];
        echo $charSkills; '<br></li>';
        '<li>'; $charSkills1 = $char[$key]['skills'][1];
        echo $charSkills1; '<br> </li>';
        '<li>'; $charSkills2 = $char[$key]['skills'][2];
        echo $charSkills2; '</li>';
        echo '</ul></td> </tr>';
    } ?>
    </tbody>
</table>
>>>>>>> 71fb5f8e6d0b14c322e1e131d2cd146429242a78

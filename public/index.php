<?php

$egg = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/eggs"), true);

/*echo '<pre>';
var_dump($egg);
echo '</pre>';*/

foreach ($egg as $key=>$value) {
    $eggspower = 'les pouvoirs cet oeuf sont :' . $egg[$key]['name'] . '<br>';
    echo $eggspower;
}

$char = json_decode(file_get_contents("http://easteregg.wildcodeschool.fr/api/characters"));

foreach ($char as $key=>$value) {
    $name = 'les noms des charactères sont :' . $char[$key]['name'] . '<br>';
    echo $name;
}

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


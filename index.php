<?php

echo 'Hello world !';

$monTitre = "Le titre de mon article";
$introductionArticle = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, placeat! Quibusdam officia harum voluptatibus quod atque aut quaerat incidunt praesentium! Sit ducimus neque necessitatibus odio amet voluptates. Repellendus, id! Amet?";
$number = 1;
$age = 12;

?>

<h1><?php echo $monTitre ?></h1>

<p><?= $introductionArticle ?></p>

<?php echo $number ?>

<p>Toto a <?php echo $age ?> ans. Il aura <?php echo ++$age ?> ans l'année prochaine.</p>

<h2>Compteur de 1 à 10 :</h2>

<?php
for ($i = 1; $i <= 10; $i++) {
    // Concaténation à l'aide du point
    echo $i . "<br>";
    // Interpolation dans des doubles guillemets. Attention : ne fonctionne pas en simple guillemets.
    echo "$i <br>";
    // Interpolation avec des accolades. Attention à ne pas mettre d'espaces dans les accolades.
    echo "{$i} <br>";
}

// Variables globales :
// Chemin du dossier courant
echo __DIR__;
echo "<br>";
// Chemin du fichier courant
echo __FILE__;
echo "<br>";
// Numéro de la ligne
echo __LINE__;
echo "<br>";

// Variables Superglobales
// Ressource : https://www.php.net/manual/fr/language.variables.superglobals.php


?>
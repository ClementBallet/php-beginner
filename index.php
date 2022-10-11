<?php

// Afficher du texte ou du HTML sur la page web
echo 'Hello world !';

// Déclaration de variable
$monTitre = "Le titre de mon article";
$introductionArticle = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, placeat! Quibusdam officia harum voluptatibus quod atque aut quaerat incidunt praesentium! Sit ducimus neque necessitatibus odio amet voluptates. Repellendus, id! Amet?";
$number = 1;
$age = 12;
$tableau = ["Toto", "Tata", "Titi"];

echo "<br>";

// La bonne pratique pour déclarer des constantes est d'utiliser define() :
define("PI", 3.14159265359, false);
// On peut vérifier si une constante a bien été créée avec defined() :
if (defined("PI")) {
   echo "La constante de PI vaut " . PI; 
}

echo "<br>";

// Mais on peut les déclarer comme ceci également :
const NOM = ['Toto', 'Dupont'];
echo "Je m'appelle " . NOM[0] . " " . NOM[1];

echo "<br>";

// La précédente constante pourra se déclarer de cette manière avec define() :
define("NOM2", ['Toto', 'Dupont']);
echo "Je m'appelle " . NOM2[0] . " " . NOM2[1];

// On peut explorer le contenu d'une variable avec var_dump et print_r :
var_dump($tableau);
print_r($tableau);

echo "<br>";

// Retrouver le type d'une variable :
echo "Le type de la variable tableau est : " . gettype($tableau) . "<br><br>";

// On peut ne pas fermer la balise php si toute notre page est du code php
?>

<!-- Faire un echo dans du HTML -->
<h1><?php echo $monTitre ?></h1>

<p><?= $introductionArticle ?></p>

<?php echo $number ?>

<p>Toto a <?php echo $age ?> ans. Il aura <?php echo ++$age ?> ans l'année prochaine.</p>

<p>Utilisation de fonction :</p>
<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

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

// Inclure un autre fichier php (dans les frameworks, on verra plutôt des require, le fonctionnement est le même, la différence est dans la réponse que va faire PHP si le fichier recherché est manquant : https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/inclure-fichier-include-require/#:~:text=La%20seule%20et%20unique%20diff%C3%A9rence,%2C%20indisponible%2C%20etc.)
// Pour récapituler : 
// include ne bloque pas l'éxecution du script si le fichier recherché est manquant alors que require oui.
// On peut voir également require_once et include_once, cela signifie que le fichier appelé ne pourra être require ou include qu'une seule fois
include 'vars.php';

// echo d'une variable placée dans mon fichier externe
echo $maVar;
echo "<br>";

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

echo "Liste de toutes les variables déclarées dans le fichier (y compris les variables globales et superglobales déjà définies par PHP) : ";
var_dump(get_defined_vars());

$vHost = $_SERVER['HTTP_HOST'];

?>
<p>Le nom du virtual host est <?= $vHost ?></p>
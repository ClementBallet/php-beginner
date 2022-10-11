# Introduction à PHP

## Documentation

La bible de PHP : https://www.php.net/manual/fr/index.php
Introduction à PHP : https://www.php.net/manual/fr/tutorial.php

## Installation de PHP

<br>

> Pour utiliser PHP il faut l'installer et lancer un serveur qui va transformer notre code PHP en HTML qui peut être lu par le navigateur.

<br>

Plusieurs solutions s'offrent à vous : 
- utilisation de WAMP (il peut être remplacé par XAMPP par exemple)
- installation de PHP en global
- installation de PHP dans le dossier de projet via le gestionnaire de package Composer

### WAMP

1. Installer WAMP (https://www.wampserver.com/) 
2. Lancer WAMP et s'assurer que l'icône est au vert
2. Créer un virtual host en allant sur l'url `http://localhost/add_vhost.php?lang=french`. Dans nom de Virtual Host, rentrer le nom que l'on veut avec une extension de préférence. Par exemple `intro-php.test`. Rentrer le chemin vers le dossier vers lequel vous allez travailler dans WAMP (il se trouvera forcément dans le dossier `C:\wamp64\www` et je conseille de faire un dossier de projet pour s'y retrouver). Par exemple : `C:\wamp64\www\Sites\intro-php`. Cliquer sur "Démarrer la création du Virtual Host".
3. Après la création du VHost, il faut obligatoirement redémarrer les services DNS. Faire clic droit sur l'iconé WAMP puis Outils puis Redémarrage DNS (ou alors redémarrer complètement WAMP).
4. Votre VHost est accessible via l'url que vous avez spécifié, par exemple intro-php.test, ou via le localhost.
5. Vous pouvez maintenant créer un fichier PHP dans le dossier que vous avez spécifié à la création de votre VHost et coder dans ce langage !

### Installation de PHP en global

1. Télécharger la dernière version de PHP ici : https://windows.php.net/download

### Installation avec Composer

1. Télécharger Composer ici : https://getcomposer.org/download/ et l'installer  
2. Ouvrir un terminal et taper la commande `composer -V`. Si elle ne fonctionne pas, tuer le terminal et ouvrir un nouveau pour retaper la commande. Si cela ne fonctionne toujours pas, redémarrer Windows. Si la commande ne fonctionne toujours pas, chercher "variables d'environnements" dans la recherche Windows et cliquer sur "Modifier les variables d'environnements". Dans la fenêtre qui s'ouvre, cliquer sur Variables d'environnements. Dans les Variables système, cliquer sur Path et Modifier... Vérifier si le chemin vers Composer est présent sinon l'ajouter : `C:\ProgramData\ComposerSetup\bin`. Redémarrer Windows et réessayer la commande `composer -V`.
3. Se placer dans le dossier de travail et ouvrir un terminal pour taper la commande `composer init`. Dans la première question posée pour le nom du package name, on peut mettre par exemple notre nom suivi du nom du projet. Par exemple `cballet/nom-du-projet`. Puis faire Entrée pour toute les autres demandes du terminal.
4. Le composer.json est maintenant créé et il a aussi installé un certain nombre de fichier dans le projet et peut-être un dossier `src`
5. Ouvrir un terminal à la racine du projet et taper la commande `composer require php`. Cela ajoutera PHP à vos dépendances de projet.
6. Créer un fichier `index.php` à la racine du projet (au même niveau que le `composer.json`) et écrire un script PHP
7. Ouvrir un terminal à la racine du projet et taper la commande `php -S localhost:8080`

## Reconnaissance de PHP par VSCode

Pour que PHP soit bien reconnu par VSCode, il faut l'ajouter en faisant les étapes suivantes :
1. Aller dans Affichage > Palette de commandes
2. Taper "settings.json" dans la recherche et choisir "Ouvrir les paramètres utilisateurs (JSON)"
3. Rajouter le `.exe` de php dans la ligne `php.validate.executablePath` ou ajoutez la ligne. Si vous travaillez dans WAMP, le chemin vers PHP est dans le dossier wamp64 : "C:/wamp64/bin/php/php8.1.0/php.exe" (**attention de bien choisir la version de PHP que vous utilisez**). Le résultat sera le suivant :
```"php.validate.executablePath": "C:/wamp64/bin/php/php8.1.0/php.exe"```

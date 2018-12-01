<?php

// Récupération du code tapé dans code mirror (via le formulaire nommé "code")
extract($_POST, EXTR_OVERWRITE);

// Préparation du fichier qui va recevoir le code
$nomFichier = "save.txt";

//Ouverture, création si non existant
$fichieOuvert = fopen($nomFichier, "a+");

//Écriture dans le fichier
fwrite($fichieOuvert, $code);

// Fermeture du fichier
fclose($fichieOuvert);
?>
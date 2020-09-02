<?php
/**** Supprimer une randonnée ****/
try
{
	// On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=randoapp;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$id = $_GET['id'];
$request = $bdd->exec("DELETE FROM hiking WHERE id =$id");
echo "<h1>La randonnée a bien été supprimée</h1><p><a href=read.php>cliquez ici</a> pour retourner à la page principale";
?>

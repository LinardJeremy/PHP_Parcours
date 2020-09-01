<?php 
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

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Randonnées</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <h1>Liste des randonnées</h1>
    <table>

      <!-- Afficher la liste des randonnées -->
      <?php 
$resultat = $bdd->query('SELECT * FROM hiking');
// $donnees = $resultat->fetch();
while ($donnees = $resultat->fetch())
{
  echo "<p>",$donnees['name']," ",$donnees['difficulty']," ",$donnees['distance'],"km ",$donnees['duration']," ",$donnees['height_difference'],"m de dénivelée
   <a href=update.php?id=",$donnees['id'],">modifier</a></p>";
}
$resultat->closeCursor();

      ?>
    </table>
  </body>
</html>

<?php 
session_start ();
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
 if (isset($_SESSION['login']) AND isset($_SESSION['pwd'])) {
   echo '<p><a href="create.php">Cliquez ici</a> pour rajouter une randonnée</p>';
 }
if (isset($_SESSION['login'])AND isset($_SESSION['pwd']))
{
    echo ' <p>Bonjour ', $_SESSION['login'],'</p>';
    echo '<a href=deconnect.php>deconnexion</a>';
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
    <p>Pour ajouter supprimer ou modifier les randonées merci de vous connecter.</p>
    <p>Si vous n'avez pas encore de compte veuillez cliquez <a href="register.php">ici</a></p>
  <?php
      if (!isset($_SESSION['login'])AND !isset($_SESSION['pwd'])) {
     echo '<form action="login.php" method="post">
        Votre login : <input type="text" name="login">
        <br />
      Votre mot de passé : <input type="password" name="pwd"><br />
       <input type="submit" value="Connexion">
      </form>';
  }
      ?>
    <table>

      <!-- Afficher la liste des randonnées -->
      <?php 
$resultat = $bdd->query('SELECT * FROM hiking');
// $donnees = $resultat->fetch();
while ($donnees = $resultat->fetch())
{
  echo "<p>",$donnees['name']," ",$donnees['difficulty']," ",$donnees['distance'],"km ",$donnees['duration']," ",$donnees['height_difference'],"m de dénivelée";
  if (isset($_SESSION['login'])AND isset($_SESSION['pwd'])) {
 echo  "<a href=update.php?id=",$donnees['id'],">modifier</a> <a href=delete.php?id=",$donnees['id'],">Supprimer</a></p>";
  }
}
$resultat->closeCursor();

      ?>
    </table>
  </body>
</html>

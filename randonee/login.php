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

$pseudo = $_POST['login'];
$mdp = $_POST['pwd'];
$req = $bdd->prepare('SELECT id, mdp FROM users WHERE pseudo = :pseudo');
$req->execute(array(
    'pseudo' => $pseudo
));
$resultat = $req->fetch();
$isPasswordCorrect = password_verify($_POST['pwd'], $resultat['mdp']);
if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
    echo "<a href=read.php>lien</a>";
}
else {
    if ($isPasswordCorrect){
    session_start ();
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['pwd'] = $_POST['pwd'];
    header ('location: read.php');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
?>



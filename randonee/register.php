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
 if (isset($_POST['login2'])AND isset($_POST['pwd2'])){
    $pseudo = $_POST['login2'];
    $pass_hache = password_hash($_POST['pwd2'],PASSWORD_DEFAULT);
 $req = $bdd->prepare('INSERT INTO users (`pseudo`,`mdp`) VALUES (:pseudo,:mdp)');
 $req->execute(array(
     'pseudo' => $pseudo,
     'mdp' => $pass_hache,
     ));
if (!$req){
    echo "error";
}
else {
    echo "congratulation c'est bon clique <a href=read.php>ici</a>";
}
 }
?>

<!DOCTYPE html>
<form action="register.php" method="post">
        choisir votre login : <input type="text" name="login2">
        <br />
      choisir votre mot de passé : <input type="password" name="pwd2"><br />
       <input type="submit" value="enregistrement">
      </form>
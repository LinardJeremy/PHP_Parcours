<?php
try
{
	// On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=pdoexo;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$resultat = $bdd->query('SELECT * FROM clients');
echo "<h1>Clients</h1>";
while ($donnees = $resultat->fetch())
{
    echo "<p>",$donnees['lastName']," ",$donnees['firstName'],"</p>";
}
$resultat2 = $bdd->query('SELECT * FROM shows ORDER BY title');
echo "<h2>Spectacle</h2>";
while($donnees=$resultat2->fetch()){
    echo "<p>",$donnees['title']," ",$donnees['performer']," ",$donnees['date']," ",$donnees['startTime'],"</p>";
    

}
echo "<h3>Liste 20 premiers client</h3>";
$resultat3 = $bdd->query('SELECT * FROM clients LIMIT 0,20');
while($donnees = $resultat3->fetch()){
    echo "<p>",$donnees['lastName'],"</p>";
}
echo "<h3>client avec carte de fidélité</h3>";
$resultat4 = $bdd->query("SELECT * FROM clients WHERE card = 1");
while($donnees = $resultat4->fetch()){
    echo "<p>",$donnees['lastName'],"</p>";
}
echo "<h3>client dont le nom commence par un M</h3>";
$resultat5 = $bdd->query("SELECT * FROM clients WHERE lastName LIKE 'm%' ORDER BY lastName");
while($donnees = $resultat5->fetch()){
    echo "<p>Nom : ",$donnees['lastName'],"</p>";
    echo "<p>Prenom :",$donnees['firstName'],"</p>";
}
echo "<h3>client fiche</h3>";
$resultat6 = $bdd->query("SELECT * FROM clients");
while($donnees = $resultat6->fetch()){
    echo "<div>";
    echo "<p>Nom : ",$donnees['lastName'],"</p>";
    echo "<p>Prenom :",$donnees['firstName'],"</p>";
    echo "<p>Date de naissance :",$donnees['birthDate'],"</p>";
    if ($donnees['card']==1){
    echo "<p>Card : oui</p>";
    echo '<p>Card numéro :',$donnees['cardNumber'],'</p>';
    }
    else if ($donnees['card']==0){
        echo "<p>Card : Non</p>";
    }
    echo "</div>";
}
?>

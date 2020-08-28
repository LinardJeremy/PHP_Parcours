<?php 
try
{
	// On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// $reponse = $bdd->query('INSERT INTO Météo
// (`ville`, `haut`, `bas`)
// VALUES
// ("Bruxelles", 27, 13),
// ("Liège", 25, 15),
// ("Namur", 26, 15),
// ("Charleroi", 25, 12),
// ("Bruges", 28, 16)
// ');
if (isset($_POST['cityName'])AND isset($_POST['maxDegree'])AND isset($_POST['minDegree'])){
$ville = $_POST['cityName'];
$haut = $_POST['maxDegree'];
$bas = $_POST['minDegree'];
// $id = $_POST["check"];
if (isset($_POST['check']))
{
$id = $_POST["check"];
    // echo $_POST['check']; // Affiche : "on"
    $req2 = $bdd->prepare('DELETE FROM `météo`WHERE id = :id');
    $req2->execute(array(
      'id'=>$id
    ));
}
else
{
    // echo 'Vous n\'avez pas coché la case.';
}
// echo $id;
// echo "<p>",$ville,"</p>";
 $req = $bdd->prepare('INSERT INTO météo (`ville`, `haut`, `bas`) VALUES (:ville,:haut,:bas)');
 $req->execute(array(
	'ville' => $ville,
	'haut' => $haut,
	'bas' => $bas
	));
}
$i=0;
echo "<h1>If you click on the checkbox the element befo will be delete take care</h1>";
$resultat = $bdd->query('SELECT * FROM météo');
// $resultat = $bdd->query($requete);
$donnees = $resultat->fetch();
echo "<form method='post' action='test.php'>";
while ($donnees = $resultat->fetch())
{
  echo "<label>",$donnees['ville'],"</label><input type='checkbox' name='check' value='",$donnees['id'],"'>";
//   echo '<div class="button">
//   <button type="submit">Delete</button>
// </div>';
  // echo "<p>",$donnees['haut']," ",$donnees['bas'],"</p>";


}
$resultat->closeCursor();

?>
<!-- <form action="test.php" method="post"> -->
    <div>
        <label for="city">ville</label>
        <input type="text" id="city" name="cityName">
    </div>
    <div>
        <label for="haut">Haut :</label>
        <input type="number" id="haut" name="maxDegree">

    </div>
    <div>
        <label for="bas">Bas :</label>
        <input type="number" id="bas" name="minDegree"></input>
    </div>
    <div class="button">
        <button type="submit">Envoyer le formulaire</button>
    </div>
</form>

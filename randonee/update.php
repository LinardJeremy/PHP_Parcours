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
$id = $_GET['id'];
$name;
$duration;
$distance;
$difficulty;
$height;
$option1 = '<option value="très facile">Très facile</option>';
$option2 = '<option value="facile">Facile</option>';
$option3 =	'<option value="moyen">Moyen</option>';
$option4 = '<option value="difficile">Difficile</option>';
$option5 =	'<option value="très difficile">Très difficile</option>';
$resultat = $bdd->query("SELECT * FROM hiking WHERE id = $id");
while ($donnees = $resultat->fetch())
{
	$id = $donnees['id'];
	$name= $donnees['name'];
	$difficulty= $donnees['difficulty'];
	$duration= $donnees['duration'];
	$distance= $donnees['distance'];
	$height= $donnees['height_difference'];

}
$request = $bdd->exec("UPDATE hiking SET name='$name', difficulty='$difficulty',duration='$duration',distance=$distance,height_difference=$height  WHERE id=$id");


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="/php-pdo/read.php">Liste des données</a>
	<h1>Ajouter</h1>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value=<?php echo "'",$name,"'"?>>
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
			<?php 
			  switch ($difficulty) {
				case "très facile":
                      $option1 = '<option value="très facile" selected>Très facile</option>';
					break;
				case "facile":
				$option2 = '<option value="facile" selected>Facile</option>';
					break;
				case "moyen":
				$option3 =	'<option value="moyen" selected>Moyen</option>';
					break;
				case "difficile":
				$option4 = '<option value="difficile" selected>Difficile</option>';
				break;
				case "très difficile":
				$option5 = '<option value="très difficile" selected>Très difficile</option>';
				break;
			}
			  echo $option1,$option2,$option3,$option4,$option5;
			?>
				<!-- <option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option> -->
			</select>
		</div>
		
		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value=<?php echo "'",$distance,"'"?>>
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="duration" name="duration" value=<?php echo "'",$duration,"'"?>>
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value=<?php echo "'",$height,"'"?>>
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>

<?php 
// include ("secret/connect.php");

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
if (isset($_POST['name'])AND isset($_POST['distance'])AND isset($_POST['duration']) AND isset($_POST['difficulty']) AND isset($_POST['height_difference'])){
$name = $_POST['name'];
$distance = $_POST['distance'];
$duration = $_POST['duration'];
$difficulty = $_POST['difficulty'];
$height = $_POST['height_difference'];

$req = $bdd->prepare('INSERT INTO hiking (`name`, `difficulty`, `distance`,`duration`,`height_difference`) VALUES (:name,:difficulty,:distance,:duration,:height_difference)');
$req->execute(array(
	'name' => $name,
	'difficulty' => $difficulty,
	'distance' => $distance,
	'duration'=> $duration,
	'height_difference'=> $height
	));
	echo "<h1>La randonée a bien été ajouté</h1>";
}
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
	<form action="create.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>

		<div>
			<label for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="time" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
		<button type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel="stylesheet" href="style.css">
<title> Générateur d'excuse ! </title>
</head>
<body lang="fr">
<h1>Générateur d'excuse</h1>
<section class='sectionForm'>
<!-- form -->
<form method="post" action="excuse.php">
<label>Name of the Child</label>
<input type="text" name="nameChild"><br>
<label> Your child is a boy or a girl ?</label>
<input type="radio" id="woman" name="gender" value='fille' >
  <label>Girl</label>
  <input type="radio" id="man" name="gender" value="garçon">
  <label >Boy</label><br>
  <label>Name of the Teacher</label>
<input type="text" name="nameTeacher"><br>
<label>Reason of absence</label>
<input type="radio" id="" name="reason" value='illness' >
  <label>illness</label><br>
  <input type="radio" id="" name="reason" value='death'>
  <label>Death of the pet (or a family member)</label><br>
  <input type="radio" id="" name="reason" value='extra'>
  <label>Significant extra-curricular activity</label><br>
  <input type="radio" id="" name="reason" value='other'>
  <label>My child thinks you are too stupid for him</label><br>
<input type="submit" name="submit" value="Send">
</form>
<!-- form -->
</section>
<article class="sectionP">
        <p>
        <?php 
         if (isset($_POST['nameChild'])AND isset($_POST['nameTeacher'])AND isset($_POST['gender']) AND isset($_POST['reason']) ) {
          $nameChild = $_POST['nameChild'];
          $nameTeacher = $_POST['nameTeacher'];
          $gender = $_POST['gender'];
          $reason = $_POST['reason'];
          $determinant;
          $pronom;
          if ($gender=="fille"){
              $determinant = "Ma";
              $pronom = "elle";
          }
          if ($gender=="garçon"){
              $determinant="Mon";
              $pronom = "il";

          }
            
          echo '<p>Monsieur/Madame   ',$nameTeacher,'</p>';
          echo "<p>", $determinant," ",$gender," ",$nameChild, "  élève dans votre collège, ne pourra pas assister au cours aujourd'hui.";
          if ($reason == "illness") {
              echo "<p> Son état de santé justifie cette absence. Le médecin lui a préconisé une période de repos.</p>";
          }
          if ($reason =="death") {
              echo "<p>Son poisson rouge Marcel est mort noyé hier soir, ", $pronom ," respectera donc une période de deuil.</p>";
          }
          if ($reason =="extra") {
              echo "<p>Malheureusement, ", $pronom, " doit suivre un stage intensif d'aqua-Poney.</p>";
          }
          if ($reason =="other") {
              echo "<p>Malheureusement, vous êtes trop idiot et ",$pronom, " en a marre de suivre vos cours pour le moment.</p>";
          }
          
        echo "<p>Notre enfant devrait reprendre la classe dans une semaine.</p>
        <p>Pour tout complément d’informations n’hésitez surtout pas à nous contacter.</p>
        <p>Nos plus sincères salutations</p>
        <p>Signé : Sa mère, Lulu La Goulue et son père Marcel le dépeceur de Haute-savoie </p>";   

        }
        else {
            echo "Remplir le formulaire";
        }
        ?>

</p>
</article>
</body>
</html>

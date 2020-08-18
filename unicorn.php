<html>
<section>
<form method="post" action="unicorn.php">
<input type="radio" id="woman" name="gender" value='Human' >
  <label for="huey">Human</label>
  <input type="radio" id="man" name="gender" value="Unicorn">
  <label for="huey">Unicorn</label>
  <label>Cat</label>
  <input type="radio" name="gender" value="cat">
  <input type="submit" name="submit" value="Send">
  </form>
</section>
<div>
<?php 
$choice= $_POST['gender'] ?? 'nobody';
  $img =  ($choice == "Unicorn") ? '<img src="https://media.giphy.com/media/21F1TuLSxWPAY/giphy.gif">' : (($choice=='cat') ? '<img src="https://media.giphy.com/media/v6aOjy0Qo1fIA/giphy.gif" alt="cat">' : (($choice=="Human") ? '<img src="https://media.giphy.com/media/ANVjGfJKOR7Pi/giphy.gif">' :"false"));
echo $img;
// if (isset($_POST['gender'])){
// if ($_POST['gender']=="Unicorn"){
// echo '<img src="https://media.giphy.com/media/21F1TuLSxWPAY/giphy.gif" alt="unicorn">';
// }
// if ($_POST['gender']=="cat"){
//     echo '<img src="https://media.giphy.com/media/v6aOjy0Qo1fIA/giphy.gif" alt="cat">';
// }
// if ($_POST['gender']=="Human"){
//     echo '<img src="https://media.giphy.com/media/ANVjGfJKOR7Pi/giphy.gif" alt="human">';
// }
// }
// else {
//     echo '<img src="https://media.giphy.com/media/3oz8xUFUB65tXgvHwI/giphy.gif">';
// }
?>
</div>

</html>
<html>


<?php 
$gender  = ($_POST['gender'] == "Woman") ? "F" : "M";
$hello = ($gender =="F")? "Hello Woman!": "Hello Man";


?>
<section>
<form method="post" action="ternary.php">
<input type="radio" id="woman" name="gender" value='Woman' >
  <label for="huey">Woman</label>
  <input type="radio" id="man" name="gender" value="man">
  <label for="huey">Man</label>
  <input type="submit" name="submit" value="Send">
  </form>
</section>
<p>
<?php
  echo $hello;
?>
</p>

</html>

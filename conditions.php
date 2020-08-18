<?php

$possible_states = array("health hazard","filthy","dirty","clean","immaculate");
$room_filthiness = $possible_states[4]; 


if( $room_filthiness=="health hazard" ){
	echo "DANGER ! Yuk, Room is dirty : let's clean it up !";
	// cleanup_room();
	// echo "<br>Room is now clean!";
    // $room_is_filthy = false;
}
else if( $room_filthiness=="filthy" ){
    echo "Yuk, Room is filthy : let's clean it up !";
    // echo "<br>Nothing to do, room is neat.";
}
else if ($room_filthiness=="dirty"){
    echo "Your room is dirty : let's clean it up!";
}
else if ($room_filthiness=="clean"){
    echo "your room is clean perfect!";
}
else if ($room_filthiness=="immaculate"){
    echo "your room is immaculate perfect";
}
?>
<br>
<?php
setlocale(LC_TIME, 'fra_fra');
date_default_timezone_set('Europe/Paris');
$now = strftime('%H:%M'); ; // How to get the current time in PHP ? Google is your friend ;-)
echo $now;
// Test the value of $now and display the right message according to the specifications.
if( $now>=5 AND $now<=9){
echo "Good Morning";
 }
else if ($now>9 AND $now<12) {
    echo "Good day";
}
else if ($now>=12 AND $now<16){
    echo "Good afternoon";
}
else if ($now>=16 AND $now<21){
    echo "Good evening !";
}
else if ($now>=21 AND $now<5){
    echo "Good night !";
}
// Déclaration variable formulaire avec none car elles doivent être déclarées pour éviter bug
?>;<br>
<form method="get" action="conditions.php">
<input type="radio" id="woman" name="gender" value='Woman' >
  <label for="huey">Woman</label>
  <input type="radio" id="man" name="gender" value="man">
  <label for="huey">Man</label>
  <label>Can you speak english ?</label>
  <input type="radio" id="langue" name="langage" value='yes' >
  <label for="huey">yes</label>
  <input type="radio" id="langue" name="langage" value='no' >
  <label for="huey">no</label>
	<label for="age">Your age</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form> <br>


<?php
//  echo $_GET['age'];
//  if (isset($_GET['age'])){
//      echo "Tape quelque chose idiot !";
//  }

//
if (isset($_GET['age'])AND isset($_GET['age']) AND isset($_GET['langage'])){

    if ($_GET['age']<12 AND $_GET['gender']=="Woman" AND $_GET['langage']=="yes"){
    echo "Hello girl";
}
else if ($_GET['age']<12 AND $_GET['gender']=="Woman" AND $_GET['langage']=="no") {
    echo "Aloha Girl !";
}
else if ($_GET['age']<12 AND $_GET['gender']=="man" AND $_GET['langage']=="no") {
    echo "Aloha Boy !";
}
 else if ($_GET['age']<12 AND $_GET['gender']=="man" AND $_GET['langage']=="yes"){
    echo "Hello boy";
}
 else if ($_GET['age']>=12 AND $_GET['age']<18 AND $_GET['gender']=="Woman"){
    echo "Hello missis teenager";
}
 else if ($_GET['age']>=12 AND $_GET['age']<18 AND $_GET['gender']=="man"){
    echo "Hello mister teenager";
}
 else if ($_GET['age']>=18 AND $_GET['age']<115 AND $_GET['gender']=="Woman"){
    echo "Hello Madam adult";
}
 else if ($_GET['age']>=18 AND $_GET['age']<115 AND $_GET['gender']=="man"){
    echo "Hello Mister adult";
}
else  if ($_GET['age']>=115 AND $_GET['gender']=="Woman"){
    echo  "Wow! Still alive ? Are you a robot, like me ? Can I hug you ? Old Lady";
}
 else if ($_GET['age']>=115 AND $_GET['gender']=="man"){
    echo  "Wow! Still alive ? Are you a robot, like me ? Can I hug you ? Old Sir";
}
}
else {
    echo "Faut remplir le formulaire en fait !";
}

?>
<p>
<?php 
if (isset($_GET['age'])AND isset($_GET['gender'])) {
    if ($_GET['age']>=21 AND $_GET['age']<=40 AND $_GET['gender']=="Woman"){
    echo "Welcome to the team !";
    }
    if($_GET['age']<=20 OR $_GET['age']>40 OR $_GET['gender']=="man"){
        echo "Sorry you don't fit the criteria !";
    }
}

?>
</p>

<form method="post" action="conditions.php">
<label>Enter a notation between 0 and 20</label>
<input type="number" step="any" name="notation">
<input type="submit" name="submit" value="Send">
</form>

<?php 
if (isset($_POST['notation'])) {
if($_POST['notation']<=4){
    echo"This work is really bad. What a dumb kid!";
}
if($_POST['notation']>5 AND $_POST['notation']<=9){
    echo"This is not sufficient. More studying is required.";
}
if( $_POST['notation']==10){
    echo "barely enough";
}
if( $_POST['notation']>10 AND $_POST['notation']<15){
    echo "Not Bad !";
}
if( $_POST['notation']>=15 AND $_POST['notation']<=18){
    echo "Bravo, bravissimo!";
}
if( $_POST['notation']>18 AND $_POST['notation']<=20){
    echo "Too good to be true : confront the cheater!";
}
}

?>

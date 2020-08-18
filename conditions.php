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
?>;<br>
<form method="get" action="conditions.php">
<input type="radio" id="woman" name="gender" value="Woman" >
  <label for="huey">Woman</label>
  <input type="radio" id="man" name="gender" value="man">
  <label for="huey">Man</label>
	<label for="age">Your age</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form> <br>

<?php
//  echo $_GET['age'];
//  if (isset($_GET['age'])){
//      echo "Tape quelque chose idiot !";
//  }

if ($_GET['age']<12 AND $_GET['gender']=="Woman"){
    echo "Hello kiddo girl";
}
else if ($_GET['age']<12 AND $_GET['gender']=="man"){
    echo "Hello kiddo boy";
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
else if ($_GET['age']>=115 AND $_GET['gender']=="Woman"){
    echo  "Wow! Still alive ? Are you a robot, like me ? Can I hug you ? Old Lady";
}
else if ($_GET['age']>=115 AND $_GET['gender']=="man"){
    echo  "Wow! Still alive ? Are you a robot, like me ? Can I hug you ? Old Sir";
}
?>

<?php 
// $number =1;
// while ($number<=120){
//     echo "<p>",$number,"<p>";
//     $number++;

// }
// for ($i =1;$i<=120;$i++){
//     echo "<pre>",$i,"</pre>";
// }
$firstname = ["nom1","nom2","nom3","nom4","nom5","nom6","nom7","nom8","nom9","nom10"];
for ($i=0;$i<sizeof($firstname);$i++){
    echo "<p>",$firstname[$i],"</p>";
}
$country =['Be'=>"Belgium",
"Ch" =>"China",
"Kr"=>"Korea",
"Jp"=>"Japan",
"US"=>"USA",
"SP"=>"Spain",
"As"=>"Australia",
"Bz"=>"Brazil",
"Ca"=>"Canada",
"Mx"=>"Mexico"
];

?>
<!-- <form>
<label for="country">Choose a country:</label> -->
<?php 


echo "<form>";
echo '<label for="country">Choose a country:</label>';
echo '<select>';
// for ($i=0;$i<sizeof($country);$i++){
    foreach($country as $key=>$value) {
            echo "<option value=",$key,">",$value,"</option>";
      }
    // echo "<option>",$country[$i][$i],"</option>";
  
// }
echo "</form>";
echo '</select>';

?>
</form>

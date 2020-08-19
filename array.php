<?php 
$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
$family = ["Gregory","Rudy","Magaly","Monique"];
echo '<pre>';
print_r($family);
echo '</pre>';
$recipe =["Machin","Truc","Bidule"];
echo '<pre>';
print_r($recipe);
echo '</pre>';
$movies = ["Sunny","La cité perdue de l'atlantide","Un troisiéme film"];
echo $movies[0];
var_dump($countries);
$countries[] = 'England';
var_dump($countries);
$me = [
    'firstname' => "Jeremy",
    'lastname' => "Linard",
    'age' => 26,
    'favoriteSeason' =>"Winter",
    "soccer" => TRUE,
];
$me['hobbies'] = ['Football',"gaming","reading"];
$otherPersone = [
    "firstname" =>"Gudule",
    "age"=> 253,
    "favoriteSeason" => "Summer",
    "soccer"=> FALSE,
    "hobbies"=> ["sleeping","eating"]
];
$me['otherPerson'] = $otherPersone;
echo '<pre>';
print_r($me);
echo '</pre>';
echo sizeof($otherPersone['hobbies']);
echo sizeof($me['hobbies']);
echo (sizeof($otherPersone['hobbies'])) + ( sizeof($me['hobbies']));
$me['hobbies'][]= "Taxidermy";
echo '<pre>';
print_r($me);
echo '</pre>';
$me['lastname'] ="Durand";
echo '<pre>';
print_r($me);
echo '</pre>';
$soulmate = [
    'firstname' => "Truc",
    'lastname' => "Machin",
    'age' => 26,
    'favoriteSeason' =>"Winter",
    "soccer" => TRUE,
    "hobbies"=> ["sleeping","eating","reading"]
];
$childMerge = array_merge($me['hobbies'], $soulmate['hobbies']);
echo '<pre>';
print_r($childMerge);
echo '</pre>';
print_r(array_uintersect($me['hobbies'], $soulmate['hobbies'], "strcasecmp"));

$web_development = [
    'frontend'=>[],
    'backend'=>[]
];
$web_development['frontend'][]= "xhtml";
$web_development['backend'][]= 'Ruby on Rails';
$web_development['frontend'][]= "css";
$web_development['backend'][]= "flash";
$web_development['frontend'][]= "javascript";
$web_development['frontend'][0] = "html";
unset($web_development['backend'][1]);
echo '<pre>';
print_r($web_development);
echo '</pre>';








?>
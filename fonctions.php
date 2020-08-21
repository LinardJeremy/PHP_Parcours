<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<?php 
$text = "According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
$textDivid = explode(" ",$text);

foreach ($textDivid as $word) {
   echo str_shuffle($word).' ';
};
$word = "football";
function upperCaseFirstLetter($str){
    $str[0] =  strtoupper($str[0]);
     return $str;
}
echo "<p>",upperCaseFirstLetter($word),"</p>";
echo "<p>", date('Y'),"</p>";
echo "<p>",date('l j F Y, H:i'),"</p>";

function sum($a,$b){
    if (is_numeric($a)AND is_numeric($b)){
    return $a+$b;
    }
    else {
        echo "Error: argument is the not a number.";
    }
}
echo sum(3,2);
echo "<p>",sum("a",1),"</p>";
$sentence = "In code we trust!";
$phrase2 = "Machin truc bidule chouette";
function acronym($str){
    $str = explode(" ",$str);
    $acronym ;
    foreach ($str as $element) {
        $acronym[] = strtoupper($element[0]);
     };
     $acronym = implode(".", $acronym);
    return $acronym;

 };
 echo acronym($sentence);
 echo "<p>",acronym($phrase2),"</p>";
$Wordtest = "microsphaera";
$wordtest2 ="chaenichthys";
function replaceLetter($str){
    $array = str_split($str);
    $find = "a";
    $find2 ="e";
    $pos = array_search( $find, $array);
    $pos2 = array_search($find2,$array);
    if ($pos>=0 AND $pos2==($pos+1)){
        $array[$pos]= "æ";
        unset($array[$pos2]);
    }
    $str = implode('', $array);
    return $str;
    // print_r($array)
};
echo replaceLetter($Wordtest);
echo "<p>",replaceLetter($wordtest2),"</p>";
$wordTest3 = "microsphæra";
function replaceInverseLetter($str){
    $find = "æ";
    $pos = strpos($str,$find);
    if ($pos>=0){
        $str[$pos]="é";
    }
    return $str;
}
echo "<p>",replaceInverseLetter($wordTest3),"</p>";

function feedback($message, $error="info"){
    return "<div class=$error>Error: $message.</div>";
};
echo feedback("Incorrect email address", "error");
echo feedback("Incorrect email address");
echo feedback("Incorrect email address", "test");

function generateWord(){
    $arrayLetter = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $rand1= rand(1,5);
    $word1=[];
    $word2=[];
    $rand2= rand(7,15);
    for ($i =0;$i<$rand1;$i++){
        $randLetter = rand(0,25);
        $word1[]=$arrayLetter[$randLetter];
    }
    for ($i=0;$i<$rand2;$i++){
        $randLetter = rand(0,25);
        $word2[]=$arrayLetter[$randLetter];
        
    }
    $str = implode('',$word1);
    $str2= implode('',$word2);
    return  "<h1>Generate a new word</h1><p>$str</p><p>$str2</p><button>Generate</button>";
}

echo generateWord();
echo "<p>",strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!"),"</p>";
function volumeCone($ray,$height){
    return  round($ray * $ray * 3.14 * $height * (1/3),2);  

}
echo "<p>",volumeCone(5,2),"</p>";
echo "<p>",volumeCone(2,4),"</p>";
echo "<p>",volumeCone(3,5),"</p>";

?>
</body>
</html>
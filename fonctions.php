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

?>
</body>
</html>
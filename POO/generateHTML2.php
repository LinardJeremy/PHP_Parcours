<?php 

class Html {
    function getLinkCss($link){
        echo "<link rel='stylesheet' href='",$link,"'>";
    }
    function getMeta($code){
        echo "<meta charset='",$code,"'>";
    }
    function getImg($src,$alt){
        echo "<img src='",$src,"'alt='",$alt,"'>";
    }
    function geta($href,$text){
        echo "<a href='",$href,"'>",$text,"</a>";
    }
    function getScript($src){
        echo "<script src='",$src,"'></script>";
    }
}
class Validator {
    function validateInt($check){
        if (filter_var($check,FILTER_VALIDATE_INT)) {
            echo("$check is a valid number");
        } else {
            echo("$check is not a valid number");
        }
        
    }
    function validateDecimal($check){
        if (filter_var($check,FILTER_VALIDATE_FLOAT)){
            echo("$check is a decimal number");
        }
        else{
            echo("$check is not a decimal number");
        }
    }
    function validateString($check){
        if(filter_var($check,FILTER_SANITIZE_STRING)){
            echo("$check is a string");
        }
        else {
            echo ("$check is not a string");
        }
    }
}
$message = $_POST['message'];
$valide = new Validator();
$valide->validateInt($message);
echo "<br>";
$valide->validateDecimal($message);
echo "<br>";
$valide->validateString($message);



$html = new Html();
$html->getLinkCss("style.css");
$html->getMeta("utf-8");
$html->getImg("test.png","test");
$html->geta("link.html","link");
$html->getScript('script.js');
?>
<form action="generateHTML2.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <label for="msg">Message :</label>
        <input id="name" name="message">
        
    </div>
    <button type='submit'>submit</button>
</form>
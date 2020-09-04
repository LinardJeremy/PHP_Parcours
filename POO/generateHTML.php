<?php 
class Form {
    function getForm($action){
        echo '<form action="',$action,'"></form>';
    }
    function getInput($type){
        echo '<input type="',$type,'">';
    }
    function getSelect($name){
        echo '<select name="',$name,'"></select>';
    }
    public $submit = "<button type='submit'>submit</button>";
    public $textarea = "<textarea></textarea>";
}
$p = new FORM();
$p->getForm("generateHTML.php");
$p->getInput("text");
$p->getSelect("PremierSelect");
echo $p->submit;
echo $p->textarea;
$p->getInput("radio");
$p->getInput("checkbox");
?>

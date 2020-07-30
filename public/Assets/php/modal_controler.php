<?php
mb_internal_encoding("UTF-8");
if (isset($_POST["name"]) && isset($_POST["phonenumber"])) {
    if(empty($_POST['name']) or empty($_POST['phonenumber']) or (strlen($_POST['phonenumber'])<7)){
        echo ('Сheck the entered data');
    }
    else{


        $title=''.$_POST["name"].'';
        $title= strval($title);
 
        mail("gleb.faizov.87@mail.ru", $title, $_POST["phonenumber"]); 
        echo("We will call you back later!");
    }   
}
?>

<?php

if (isset($_POST["name"]) && isset($_POST["phonenumber"]) && isset($_POST["provider"])) {
    $title="Добрый день".$_POST["name"]; 
    $phonenumber="Мы перезвоним вам по этому номеру: \n"."+7".$_POST["provider"].$_POST["phonenumber"];
    $title= iconv('cp1251', 'UTF-8', $title); 
    $phonenumber = iconv('cp1251', 'UTF-8', $phonenumber); 
    mail("glebfaizov@gmail.com", $title, $phonenumber ); 
}

?>
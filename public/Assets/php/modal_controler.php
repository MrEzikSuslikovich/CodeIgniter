<?php
mb_internal_encoding("UTF-8");
if (isset($_POST["name"]) && isset($_POST["phonenumber"])) {
    if(empty($_POST['name']) or empty($_POST['phonenumber']) or (strlen($_POST['phonenumber'])<7)){
        echo ('Сheck the entered data');
    }
    else{
    }   
}
?>

<?php
mb_internal_encoding("UTF-8");
if (isset($_POST["name"]) && isset($_POST["phonenumber"])) {
    if(empty($_POST['name']) or empty($_POST['phonenumber']) or (strlen($_POST['phonenumber'])<7)){
        echo ('Сheck the entered data');
    }
    else{


        $email = \Config\Services::email();

        $email->setFrom('glebfaizov@gmail.com', 'Your Name');
        $email->setTo('gleb.faizov.87@mail.ru');
        $email->setCC('another@another-example.com');
        $email->setBCC('glebfaizov@gmail.com');

        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');

        $email->send();
    }   
}
?>
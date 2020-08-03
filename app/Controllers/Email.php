<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
 
    class Email extends Controller {
    public function email()
    {
        if (isset($_POST["name"]) && isset($_POST["phonenumber"])) {
            if(empty($_POST['name']) or empty($_POST['phonenumber']) or (strlen($_POST['phonenumber'])<7)){
                echo ('Сheck the entered data');
            }
            else{
                $email = \Config\Services::email();
                $email->setFrom('T9785fec61881@yandex.kz', $_POST['name']);
                $email->setTo('T9785fec61881@yandex.kz');
                $email->setCC('T9785fec61881@yandex.kz');
                $email->setBCC('T9785fec61881@yandex.kz');
                $email->setSubject('Email Test');
                $email->setMessage($_POST['phonenumber']);
                $email->send();
                $email->printDebugger(['headers']);
                echo ('We will call you later!');
            }   
        }
    }
}
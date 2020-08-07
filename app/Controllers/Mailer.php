<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
 
class Mailer extends Controller {
    function __construct(){
        $email = \Config\Services::email();
        $email->setFrom('T9785fec61881@yandex.kz',"Alivio");
        $email->setTo('T9785fec61881@yandex.kz');
        $email->setCC('T9785fec61881@yandex.kz');
    }
    public function StartTrialSend()
    {   
            $email = \Config\Services::email();
            $email->setSubject('Email Test');
            $email->setMessage("Номер: ".$this->request->getVar('phonenumber')."   Имя: ".$this->request->getVar('name'));
            $email->send();
            $email->printDebugger(['headers']);
            echo ('We will call you later!');     
    }

}
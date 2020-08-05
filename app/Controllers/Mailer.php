<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
 
class Mailer extends Controller {
    private function MailConfigurator() {
        $email = \Config\Services::email();
        $email->setFrom('T9785fec61881@yandex.kz',"Alivio");
        $email->setTo('T9785fec61881@yandex.kz');
        $email->setCC('T9785fec61881@yandex.kz');
    }
    public function StartTrialSend()
    {   
        $this->MailConfigurator();
        $email = \Config\Services::email();
        $email->setSubject('Email Test');
        $email->setMessage("Номер: ".$_POST['phonenumber']."   Имя: ".$_POST['name']);
        $email->send();
        $email->printDebugger(['headers']);
        echo ('We will call you later!');
    }

}
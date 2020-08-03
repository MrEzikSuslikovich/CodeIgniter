<?php namespace App\Controllers;
use CodeIgniter\Controller;
 
    class Email extends Controller {
    public function email()
    {
        $email = \Config\Services::email();
        $email->setFrom('T9785fec61881@yandex.kz', 'Your Name');
        $email->setTo('gleb.faizov@inbox.ru');
        $email->setCC('gleb.faizov@inbox.ru');
        $email->setBCC('gleb.faizov@inbox.ru');
        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');
        $email->send();
        $email->printDebugger(['headers']);
    }
}
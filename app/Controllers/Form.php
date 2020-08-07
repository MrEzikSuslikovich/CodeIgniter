<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Form extends Controller
{
    public function index()
    {
        helper(['form', 'url']);
        $validation =  \Config\Services::validation();
        /*
        $validation->setRules([
            'username' => ['label' => 'Username', 'rules' => 'required'],
            'password' => ['label' => 'Password', 'rules' => 'required|min_length[10]']
        ]);
        $validation->withRequest($this->request)
           ->run();
        */
        if (! $this->validate([]))
        {
            echo view('Signup', [
                'validation' => $this->validator
            ]);
        }
        else
        {
            echo view('Success');
        }   
    }

    public function send() {
       echo($_POST['name']);
    }
}

<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Form extends Controller
{
    public function index()
    {
        helper(['form', 'url']);
        $validation =  \Config\Services::validation();
        if ($this->request->getMethod() === 'post' && $this->validate([
            'username' => 'required|min_length[3]|max_length[255]',
            'password'  => 'required'
        ]))
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

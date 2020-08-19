<?php namespace App\Controllers\Admin;

use CodeIgniter\Controller;
use App\Models\LoginModel;

class Authentication extends Controller
{
    public function login(){
        $session = \Config\Services::session($config);
        if ($this->request->getMethod() === 'post' && $this->validate([
            'username'=>'required',
            'password'=>'required'
            ]))
        {
            $db=new LoginModel();
            
            $session = session();
            $session->set('logged_in', "FALSE");
            $query = $db->query('SELECT name,password FROM users');
            $results = $query->getResultArray();

            foreach ($results as $row)
            {
                if($this->request->getPost('username') == $row['name'] && $this->request->getPost('password') == $row['password'] ){
                    $session->set('logged_in', "TRUE");
                    return redirect()->to('http://localhost:8080/admin');
                }
            } 
            echo view("authentication/error");     
        }
        else{
            echo view("authentication/login");
        }
    }
    public function logout(){
        $session = session();
        $session->set('logged_in', "FALSE");
        return redirect()->to('http://localhost:8080/news');
    }

}
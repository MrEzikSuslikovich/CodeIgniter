<?php namespace App\Controllers\Admin;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class Authcheck extends Controller
{
    public function check(){
        $session = session();
        if ($session->get('logged_in')=="FALSE" or empty($session->get('logged_in'))) {
            echo view("authentication/login");
            die;
        }
    }
}
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
    public function admin()
    {
        $model = new NewsModel();
        $pager = \Config\Services::pager();
        $data = [
        'news'  => $model->paginate(4,'group1'),
        'pager' => $model->pager
        ];
        echo view('admin/view', $data);
        $tests= new Authcheck();
        $tests->check();
        
    }
}
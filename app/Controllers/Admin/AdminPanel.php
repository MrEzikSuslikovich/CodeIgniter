<?php namespace App\Controllers\Admin;


use App\Models\NewsModel;
use CodeIgniter\Controller;
use App\Controllers\Admin\Authcheck;

class AdminPanel extends Controller{
    function __construct(){
        $tests= new Authcheck();
        $tests->check();
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
    }
    public function test(){
        echo view('admin/test');
    }
}

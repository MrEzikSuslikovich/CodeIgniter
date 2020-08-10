<?php namespace App\Controllers;

use CodeIgniter\Controller;

class NewsPagination extends Controller
{
    public function index()
    {
        $model = new \App\Models\NewsModel();

        $data = [
            'users' => $model->paginate(10),
            'pager' => $model->pager
        ];

        echo view('users/index', $data);
    }
}
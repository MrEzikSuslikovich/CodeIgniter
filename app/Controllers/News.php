<?php namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
    public function index()
    {
       
    $model = new NewsModel();
    $data = [
        'news'  => $model->paginate(4,'group1'),
        'pager' => $model->pager
    ];
    echo view('templates/header', $data);
    echo view('news/overview', $data);
    echo view('templates/footer', $data);
    }
    public function create()
    {
        $model = new NewsModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[file,4096]',
            ],
            'body'  => 'required'
        ]))
    {
        $avatar = $this->request->getFile('file');
        $avatar->move("public\Assets\img\uploads");
        $model->save([
            'title' => $this->request->getPost('title'),
            'body'  => $this->request->getPost('body'),
            'content'  =>"\public\Assets\img\uploads/".$avatar->getClientName(),
        ]);
            echo view('admin/success');

        }
        else
        {
            echo view('admin/create');
        }
    }
    public function update()
    {
        $model = new NewsModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'id'  => 'required',
                'body'  => 'required'
            ]))
        {
            $avatar = $this->request->getFile('file');
            $data = [
                'title' => $this->request->getPost('title'),
                'body'  => $this->request->getPost('body'),
                'content'  =>"\public\Assets\img\uploads/".$this->request->getPost('file'),
            ];
            $id=$this->request->getPost('id');
            $model->where('id', $id);
            $model->update(['id' => $id],$data);
            echo view('admin/success');

        }
        else
        {
            echo view('admin/update');
        }
    }
     public function delete()
    {
        $model = new NewsModel();

        if ($this->request->getMethod() === 'post' )
        {
            $data = [
                'title' => "tororo",
                'slug'  => "tororo",
                'body'  => "tororo"
            ];
            $id=$this->request->getPost('id');
            $model->delete(['id' => $id]);
            echo view('admin/success');

        }
        else
        {
            echo view('admin/delete');
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
    }
}
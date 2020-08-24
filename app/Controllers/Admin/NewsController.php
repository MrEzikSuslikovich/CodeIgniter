<?php namespace App\Controllers\Admin;


use App\Models\NewsModel;
use CodeIgniter\Controller;
use App\Controllers\Admin\AdminPanel;

class NewsController extends AdminPanel{
    public function create()
    {
        $model = new NewsModel();
        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/svg,image/JPG]',   
                'max_size[file,4096]',
            ],
            'body'  => 'required'
        ]))
    {   
        $avatar = $this->request->getFile('file');
        $filename=$avatar->getRandomName();
        $avatar->move("public\Assets\img\uploads",$filename);
        $model->save([
            'title' => $this->request->getPost('title'),
            'body'  => $this->request->getPost('body'),
            'content'  =>"\public\Assets\img\uploads/".$filename,
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
                'file' => [
                    'uploaded[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/gif,image/png,image/svg,image/JPG]',
                    'max_size[file,4096]',
                ],
                'body'  => 'required'
            ]))
        {
            $avatar = $this->request->getFile('file');
            $filename=$avatar->getRandomName();
            $avatar->move("public\Assets\img\uploads",$filename);
            $data = [
                'title' => $this->request->getPost('title'),
                'body'  => $this->request->getPost('body'),
                'content'  =>"\public\Assets\img\uploads/".$filename,
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
            $id=$this->request->getPost('id');
            $model->delete(['id' => $id]);
            echo view('admin/success');

        }
        else
        {
            echo view('admin/delete');
        }
    }
}
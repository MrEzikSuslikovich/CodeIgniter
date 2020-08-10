<?php namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Controller;

class News extends Controller
{
    public function index()
    {
    $model = new NewsModel();
    $pager = \Config\Services::pager();
    $data = [
        'news'  => $model->paginate(3),
        'title' => 'News archive',
    ];
    $link = [
        'active' => false,
        'uri'    => 'http://example.com/foo?page=2',
        'title'  => 1
    ];
    echo view('templates/header', $data);
    echo view('news/overview', $data);
    echo view('templates/footer', $data);
    }

    public function view($slug = NULL)
    {
        $model = new NewsModel();

        $data['news'] = $model->getNews($slug);

        if (empty($data['news']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the news item: '. $slug);
        }

        $data['title'] = $data['news']['title'];

        echo view('templates/header', $data);
        echo view('news/view', $data);
        echo view('templates/footer', $data);
    }
    public function create()
    {
        $model = new NewsModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'body'  => 'required'
            ]))
        {
            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', TRUE),
                'body'  => $this->request->getPost('body'),
            ]);

            echo view('news/success');

        }
        else
        {
            echo view('news/create');
        }
    }

}
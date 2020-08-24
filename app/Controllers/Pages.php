<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\NewsModel;
    class Pages extends Controller {
    public function showme($page = 'home')
    {
		if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        helper(['form', 'url']);
        $validation =  \Config\Services::validation();
        $data['title'] = ucfirst($page);
        echo view('pages/'.$page, $data); 
        }
        public function news()
        {
        $model = new NewsModel();
        $data = [
            'news'  => $model->paginate(4,'group1'),
            'pager' => $model->pager,
        ];
        echo view('news/overview', $data);
        }
    }  
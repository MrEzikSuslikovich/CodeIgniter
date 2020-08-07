<?php namespace App\Controllers;
use CodeIgniter\Controller;
 
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
        echo view('templates/header', $data);
        echo view('pages/'.$page, $data); 
        echo view('templates/footer', $data);
        if (! $this->validate([]))
        {
            echo view('module/StartTrial', [
                'validation' => $this->validator
            ]);
        }
        else
        {
            echo view('Success');
        }  
    }
}
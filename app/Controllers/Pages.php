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
 
        $data['title'] = ucfirst($page); // Capitalize the first letter
 
        echo view('templates/header', $data);
        echo view('pages/'.$page, $data);
        echo view('templates/footer', $data);
    }
    public function email()
    {
        $email = \Config\Services::email();
        $email->setFrom('T9785fec61881@yandex.kz', 'Your Name');
        $email->setTo('gleb.faizov@inbox.ru');
        $email->setCC('gleb.faizov@inbox.ru');
        $email->setBCC('gleb.faizov@inbox.ru');
        $email->send();
        $email->printDebugger(['headers']);
        $object['controller']=$this; 
        $this->load->view('showme',$object);
    }
}
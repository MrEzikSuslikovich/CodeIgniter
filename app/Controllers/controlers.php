<?php
    class Pages extends MyTest{
        public function view($page = 'home'){
            if(!file_exists(APPPATH.'Views/pages/'.$page.'.php')){
                show_404();
            }

            $data['title'] = ucfirst($page);

            $this->load->view('templates/header');
            $this->load->view('main/'.$page,$data);
            $this->load->view('templates/footer');
        }
    }
?>
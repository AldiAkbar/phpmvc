<?php 

class Home extends Controller {
    public function index() {
        $data['judul'] = 'Home';
        // MENGGUNAKAN MODEL yang dibuat dengan nama user-model DENGAN METHOD getUser()
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}

?>
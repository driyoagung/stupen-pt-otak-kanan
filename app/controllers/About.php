<?php 

class About extends Controller{
    public function index($nama ="badang", $pekerjaan = "siswa"){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Me';
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
        
    }

    public function page(){

        $data['judul'] = "Page";
        $this->view('template/header', $data);
        $this->view('about/page',);
        $this->view('template/footer');


    }
}

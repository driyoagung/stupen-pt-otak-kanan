<?php 


class Mahasiswa extends Controller{
    public function index(){
        $data["judul"] = "Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhs();
        $this->view('template/header', $data);
        $this->view("mahasiswa/index", $data);
        $this->view('template/footer');
    }
    public function detail($id){
        $data["judul"] = "Detail Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getMhsById($id);
        $this->view('template/header', $data);
        $this->view("mahasiswa/detail", $data);
        $this->view('template/footer');
    }
    public function tambah(){
        if($this->model('Mahasiswa_model')->tambahDataMhs($_POST)>0){
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location: '. BASEURL . '/mahasiswa');
            exit;
        }else{
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location: '. BASEURL . '/mahasiswa');
            exit;
        }

    }
    public function hapus($id){
        if($this->model('Mahasiswa_model')->hapusDataMhs($id)>0){
            Flasher::setFlash('berhasil','dihapus','success');
            header('Location: '. BASEURL . '/mahasiswa');
            exit;
        }else{
            Flasher::setFlash('gagal','dihapus','danger');
            header('Location: '. BASEURL . '/mahasiswa');
            exit;
        }

    }
}

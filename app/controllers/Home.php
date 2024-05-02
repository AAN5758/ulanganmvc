<?php 

class Home extends Controller {

    public function index()
    {
        $data['judul'] = 'Dashboard';
        // $data['nama'] = "Willy";
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();//tambah

        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);//ubah home->mahasiswa
        $this->view('templates/footer');
    }
}
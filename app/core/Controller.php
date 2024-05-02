<?php 

class Controller {
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    public function tambah() //ubah isinya
    {
        $nip = $_POST['nip'];
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $whatsapp = $_POST['whatsapp'];
        $alamat = $_POST['alamat'];
        $golongan_id = $_POST['golongan_id'];

        $data = $this->model("Mahasiswa_model")->addMahasiswa(
            $nip,
            $nik,
            $nama,
            $jenis_kelamin,
            $tempat_lahir,
            $tanggal_lahir,
            $whatsapp,
            $alamat,
            $golongan_id,
        );
        // var_dump($data);
        if (!data) {
            Flasher::setFlash("create user", "sukses", "post");
            header('Location: http://localhost/ulanganmvc/public');
        } else {

            Flasher::setFlash("create user", "error", "post");
            header('Location: http://localhost/ulanganmvc/public');
        }

    }
}
<div class="container mt-5">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <b>NIP</b>
            <p class="card-title"> <?= $data['mhs']['nip'] ?></p>
            <b>NIK</b>
            <p class="card-subtitle mb-2 text-muted"> <?= $data['mhs']['nik'] ?></p>
            <b>Nama</b>
            <p class="card-title"> <?= $data['mhs']['nama'] ?></p>
            <b>Jenis Kelamin</b>
            <p class="card-title"> <?= $data['mhs']['jenis_kelamin'] ?></p>
            <b>Tempat Lahir</b>
            <p class="card-title"> <?= $data['mhs']['tempat_lahir'] ?></p>
            <b>Tanggal Lahir</b>
            <p class="card-title"> <?= $data['mhs']['tanggal_lahir'] ?></p>
            <b>Nomor Whatsapp</b>
            <p class="card-title"> <?= $data['mhs']['whatsapp'] ?></p>
            <b>Alamat</b>
            <p class="card-title"> <?= $data['mhs']['alamat'] ?></p>
            <b>Golongan ID</b>
            <p class="card-title"> <?= $data['mhs']['golongan_id'] ?></p>
            <a href="<?= BASEURL; ?>" class="card-link"> Kembali </a>
        </div>
    </div>

</div>
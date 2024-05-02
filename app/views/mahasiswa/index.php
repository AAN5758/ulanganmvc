<div class="container mt-3">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>



    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Karyawan
            </button>
        </div>
    </div>

    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="#formModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="formModalLabel">&times;</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>


                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="number" class="form-control" id="nip" name="nip" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="number" class="form-control" id="nik" name="nik" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" autocomplete="off" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="whatsapp">Whatsapp</label>
                            <input type="number" class="form-control" id="whatsapp" name="whatsapp" autocomplete="off"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Jl. Riyanto"
                                autocomplete="off" required>
                        </div>

                        <div class="form-group">
                            <label for="golongan_id">Golongan ID</label>
                            <input type="number" class="form-control" id="golongan_id" name="golongan_id""
                                autocomplete=" off" required>
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismis="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <h3>Daftar Karyawan</h3>
        <ul class="list-group">
            <?php foreach ($data['mhs'] as $mhs): ?>
                <li class="list-group-item">
                    <?= $mhs['nama']; ?>

                    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end"
                        onclick="return confirm('Yang Beneeer??')">Hapus</a>


                    <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>"
                        class="badge bg-success float-end me-3 ms-3 tampilModeUbah" data-toggle="modal"
                        data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>

                    <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"
                        class="badge bg-primary float-end">Detail</a>

                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>
</div>
<div class="container">

    <div class="row mt-3 ">
        <div class="col-md-6">
            
                <div class="card">
                    <div class="card-header">
                        Form Tambah Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input name="nama" type="text" class="form-control" id="nama">
                                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nrp">NRP</label>
                                <input name="nrp" type="text" class="form-control" id="nrp">
                                <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="text" class="form-control" id="email">
                                <small class="form-text text-danger"><?= form_error('email'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurursan</label>
                                <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Gambar Bangunan">Gambar Bangunan</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informasi">Teknik Informasi</option>
                                </select>
                            </div>
                            <button id="tombol-tambah" type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
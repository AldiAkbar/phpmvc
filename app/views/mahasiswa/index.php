<div class="container mt-4">

    <div class="row">
        <div class="col-md-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary tombol-data-mahasiswa" data-toggle="modal" data-target="#formModal" >Tambah Data Mahasiswa</button>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method='post'>
                <div class="input-group">
                    <input type="text" class="form-control input-keyword" name="keyword" id="keyword"  placeholder="Cari mahasiswa.." autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-primary search-button" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger ml-1 float-right" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success ml-1 float-right ubah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Update</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary ml-1 float-right">View</a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>

    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                        <input type="hidden" name="id" id="id">

                        <div class="form-group">
                            <label for="nama"><strong>Nama: </strong> </label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama...">
                            <label for="nim"><strong>NIM: </strong> </label>
                            <input type="number" name="nim" class="form-control" id="nim" placeholder="Masukkan NIM...">
                            <label for="jurusan"><strong>Jurusan: </strong> </label>
                            <select class="form-control" name="jurusan" id="jurusan">
                            <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Planologi">Teknik Planologi</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Hukum Islam">Hukum Islam</option>
                            </select>
                            <label for="email"><strong>Email: </strong> </label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email...">
                            <label for="foto"><strong>Foto: </strong> </label>
                            <input type="file" name="foto" class="form-control" id="foto">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary tombol" >Tambah Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
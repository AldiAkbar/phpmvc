<div class="container mt-5">
    <div class="row">
        <div class="col-3 offset-1">
            <img src="<?= BASEURL; ?>/img/<?= $data['mhs']['foto']; ?>" class="card-img-top" alt="card img cap" style="width: 250px;">
        </div>

        <div class="col-2">
            <div class="card-body">
                <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['nim']; ?></h6>
                <p class="card-text"><?= $data['mhs']['email']; ?></p>
                <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
                <a href="<?= BASEURL; ?>/mahasiswa" class="card-lick">Back</a>
            </div>
        </div>
    
    </div>

</div>
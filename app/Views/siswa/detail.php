<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="text-center">Detail Materi</h3>
            <hr>
            <div class="card mb-3 p-3">
                <div class="row d-flex justify-content-between">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><b><?= $materi['judul']; ?></b></h5>
                            <p class="card-text">Detail: <?= $materi['deskripsi']; ?></p>
                            <a type="application/pdf" class="bg-info p-2 text-white rounded text-decoration-none" href="/mtr/<?= $materi['file']; ?>" class="card-text"><?= $materi['file']; ?>
                                <i class="fas fa-file-download"></i>
                            </a>
                            <br><br>
                        </div>
                    </div>
                </div>
            </div>
            <p class="card-text"><small class=""> <a class="text-muted text-decoration-none" href="/siswa">❮ Kembali</a></small></p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
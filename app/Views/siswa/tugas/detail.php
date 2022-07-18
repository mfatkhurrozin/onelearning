<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="text-center">Detail Tugas</h3>
            <hr>
            <div class="card mb-3 p-3">
                <div class="row ">
                    <div class="col-md-10 ">
                        <div class="card-body">
                            <h5 class="card-title"><b><?= $tugas['judul']; ?></b></h5>
                            <p class="card-text">Detail: <?= $tugas['deskripsi']; ?></p>
                            <div class="d-flex align-items-center">
                                <span><a type="application/pdf" style="display: inline; background:#3b4347;" class="p-2 text-white rounded text-decoration-none" href="/tgs/<?= $tugas['file']; ?>" class="card-text"><?= $tugas['file']; ?>
                                        <i class="fas fa-file-download"></i>
                                    </a>
                                </span>
                                <span class="card-text text-danger p-2">Deadline: <?= $tugas['tanggal']; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex align-items-center">
                        <div class="card-body">
                            <a href="/tugasjawab/tambah/<?= $tugas['id']; ?>" style="background:#00abd4" class="btn text-white py-2">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i><br>
                                Jawab
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="card-text"><small class=""> <a class="text-muted text-decoration-none" href="/siswatugas">❮ Kembali</a></small></p>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>
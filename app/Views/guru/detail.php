<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="text-center">Detail Materi</h3>
            <hr>
            <div class="card mb-3 p-3">
                <div class="row ">
                    <div class="col-md-9 ">
                        <div class="card-body">
                            <h5 class="card-title"><b><?= $materi['judul']; ?></b></h5>
                            <p class="card-text">Detail: <?= $materi['deskripsi']; ?></p>
                            <a type="application/pdf" href="/mtr/<?= $materi['file']; ?>" style="display: inline; background:#00abd4;" class="card-text p-2 text-white rounded text-decoration-none"><?= $materi['file']; ?>
                                <i class="fas fa-file-download"></i>
                            </a>

                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center">
                        <div class="card-body">
                            <a href="/guru/ubah/<?= $materi['id']; ?>" class="btn btn-outline-warning"><i class="fas fa-edit"></i><br> Ubah</a>
                            <form action="/guru/<?= $materi['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data Ini !!!')">
                                    <i class="fas fa-trash-alt"></i><br> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <p class="card-text"><small class=""> <a class="text-decoration-none text-muted" href="/guru">❮ Kembali</a></small></p>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="text-center">Detail Tugas</h3>
            <hr>
            <div class="card mb-3 p-3">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title"><b><?= $tugas['judul']; ?></b></h4>
                            <p class="card-text">Detail: <?= $tugas['deskripsi']; ?></p>
                            <div class="d-flex align-items-center">
                                <a style="display: inline; background:#00abd4;" class="p-2 text-white rounded text-decoration-none" type="application/pdf" href="/tgs/<?= $tugas['file']; ?>"> <?= $tugas['file']; ?>
                                    <i class="fas fa-file-download"></i>
                                </a>
                                <p class="card-text text-danger p-2">Dateline: <?= $tugas['tanggal']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                        <div class="card-body">
                            <a href="/tugas/ubah/<?= $tugas['id']; ?>" class="btn btn-outline-warning"><i class="fas fa-edit"></i><br>Ubah</a>
                            <form action="/tugas/<?= $tugas['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data Ini !!!')">
                                    <i class="fas fa-trash-alt"></i><br> Hapus
                                </button>
                            </form>
                            <a href="/jawaban/<?= $tugas['id']; ?>" class="btn btn-success"><i class="fas fa-check-square"></i><br>Jawaban</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p class="card-text"><small> <a class="text-muted text-decoration-none" href="/tugas">❮ Kembali</a></small></p>
</div>
<?= $this->endSection(); ?>
<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="col">
        <h3 class="text-center">Form Ubah Tugas</h3>
        <hr>
        <form action="/tugas/update/<?= $tugas['id']; ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <input type="hidden" name="sampulLama" value="<?= $tugas['file']; ?>">
            <div class="text-left ">
                <div class="row mb-3 d-flex justify-content-center">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= (old('judul')) ? old('judul') : $tugas['judul'] ?>">
                        <div id="judulFeedback" class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 d-flex justify-content-center">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= (old('deskripsi')) ? old('deskripsi') : $tugas['deskripsi'] ?>">
                    </div>
                </div>
                <div class="row mb-3 d-flex justify-content-center">
                    <label for="sampul" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-6">
                        <div class="custom-file">
                            <input type="file" class="form-control <?= ($validation->hasError('file')) ? 'is-invalid' : ''; ?>" id="file" name="file" onchange="previewImg()">
                            <div id="sampulFeedback" class="invalid-feedback">
                                <?= $validation->getError('file'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 d-flex justify-content-center">
                    <label for="tanggal" class="col-sm-2 col-form-label">Dateline</label>
                    <div class="col-sm-6">
                        <input type="datetime-local" class="form-control" id="tanggal" name="tanggal" value="<?= $tugas['tanggal'] ?>">
                    </div>
                </div>
                <div class="row mb-3 d-flex justify-content-center">
                    <div class="col-sm-8 d-flex justify-content-end">
                        <button type="submit" class="tombol daftar px-3">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i> Ubah Data</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>
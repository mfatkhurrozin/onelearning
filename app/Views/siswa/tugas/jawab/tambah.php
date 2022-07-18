<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="col ">
        <h3 class="text-center">Form Pengumpulan Tugas</h3>
        <hr>
        <form action="/tugasjawab/simpan" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="text-left ">
                <div class="row mb-3 d-flex justify-content-center">
                    <label class="col-sm-2 col-form-label"> Tugas</label>
                    <div class="col-sm-6">
                        <input type="hidden" name="id_user" class="form-control disabled muted" value="<?= user_id() ?>"></input>
                        <input type="hidden" name="id_tugas" class="form-control disabled muted" value="<?= $idtugas['id']; ?>"></input>
                        <span><?= $idtugas['judul']; ?></span>
                    </div>

                </div>

                <div class="row mb-3 text-left d-flex justify-content-center">
                    <label for="judul" class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control <?=
                                                                ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= user()->username ?>">

                        </input>
                        <div id="judulFeedback" class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 text-left d-flex justify-content-center">
                    <label for="judul" class="col-sm-2 col-form-label">No Siswa</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control <?=
                                                                ($validation->hasError('no_siswa')) ? 'is-invalid' : ''; ?>" id="no_siswa" name="no_siswa" autofocus value="<?= old('no_siswa'); ?>">
                        <div id="judulFeedback" class="invalid-feedback">
                            <?= $validation->getError('no_siswa'); ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3 d-flex justify-content-center">
                    <label for="sampul" class="col-sm-2 col-form-label">File</label>
                    <div class="col-sm-6">
                        <div class="custom-file">
                            <input type="file" class="form-control  <?=
                                                                    ($validation->hasError('file')) ? 'is-invalid' : ''; ?>" id="file" name="file_siswa" onchange="previewImg()">
                            <div id="fileFeedback" class="invalid-feedback">
                                <?= $validation->getError('file_siswa'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 d-flex justify-content-center">
                    <div class="col-sm-8 d-flex justify-content-end">
                        <button type="submit" onclick="return confirm('Apakah Anda Yakin dengan Jawaban Anda ??')" class="tombol daftar px-3">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i> Kirim Tugas</button>
                    </div>
                </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>
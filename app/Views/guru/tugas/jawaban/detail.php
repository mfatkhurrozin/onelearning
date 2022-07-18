<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col">
            <h3 class="text-center">Daftar Jawaban</h3>
            <hr>
            <!-- flashdata dengan alert --->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">No Siswa</th>
                        <th scope="col">Jawaban</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($jawaban->getResult() as $a) :
                    ?>
                        <tr>
                            <td><?= $a->nama; ?></td>
                            <td><?= $a->no_siswa; ?></td>
                            <td>
                                <a type="application/pdf" style="display: inline; background:#3b4347;" class="p-2 text-white rounded text-decoration-none" href="/jwb/<?= $a->file_siswa; ?>">
                                    <?= $a->file_siswa; ?>
                                    <i class="fas fa-file-download"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
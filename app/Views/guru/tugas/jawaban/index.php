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
                        <th scope="col">Tugas</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">No Siswa</th>
                        <th scope="col">Jawaban</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($jawaban as $a) :
                    ?>
                        <tr>
                            <td><?= $a['judul']; ?></td>
                            <td><?= $a['username']; ?></td>
                            <td><?= $a['email']; ?></td>
                            <td><?= $a['no_siswa']; ?></td>
                            <td><a href="/jwb/<?= $a['file']; ?>"><?= $a['file']; ?></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
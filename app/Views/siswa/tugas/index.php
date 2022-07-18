<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col">
            <h3 class="text-center">Daftar Tugas</h3>

            <!-- flashdata dengan alert --->
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1 + (4 * ($currentPage - 1));
                    foreach ($tugas as $a) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td width="650px"><?= $a['judul']; ?></td>
                            <td><?= $a['tanggal']; ?></td>
                            <td><a href="/siswatugas/<?= $a['id']; ?>" class="btn btn-outline-info">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('tugas', 'default_full') ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
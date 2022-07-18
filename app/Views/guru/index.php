<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col">
            <h3 class="text-center">Daftar Materi</h3>
            <hr>
            <a href="/guru/tambah" class="tombol daftar mb-2"><i class="fas fa-plus-square p-2"></i>Tambah Materi</a>

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
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1 + (4 * ($currentPage - 1));
                    foreach ($materi as $b) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td width="850px"><?= $b['judul']; ?></td>
                            <td><a href="/guru/<?= $b['id']; ?>" class="btn btn-outline-info">
                                    <i class="fas fa-edit"></i> Detail
                                </a>
                                <form action="/guru/<?= $b['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data Ini?')">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('materi', 'default_full') ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
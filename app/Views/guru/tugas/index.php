<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col">
            <h3 class="text-center">Daftar TUGAS</h3>
            <hr>
            <!-- <a href="/tugas/tambah" class="btn btn-primary">Tambah Tugas</a> -->
            <a href="/tugas/tambah" class="tombol daftar mb-2"><i class="fas fa-plus-square p-2"></i>Tambah Tugas</a>

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
                        <th scope="col">Dateline</th>
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
                            <td><a href="/tugas/<?= $a['id']; ?>" class="btn btn-outline-info">
                                    <i class="fas fa-edit"></i>
                                    Detail
                                </a>
                                <form action="/tugas/<?= $a['id']; ?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus Data Ini !!!')">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </form>
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
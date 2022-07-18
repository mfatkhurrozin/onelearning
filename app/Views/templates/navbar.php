<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
  <?php if (in_groups('siswa')) : ?>
    <li><a href="<?= base_url('siswa'); ?>" class="nav-link px-2 link-secondary">Materi</a></li>
    <li><span class="nav-link px-2 link-dark">|</span></li>
    <li><a href="<?= base_url('siswatugas'); ?>" class="nav-link px-2 link-dark">Tugas</a></li>

  <?php elseif (in_groups('guru')) : ?>
    <li><a href="<?= base_url('guru'); ?>" class="nav-link px-2 link-secondary">Materi</a></li>
    <li><span class="nav-link px-2 link-dark">|</span></li>
    <li><a href="<?= base_url('tugas'); ?>" class="nav-link px-2 link-dark">Tugas</a></li>

  <?php elseif (in_groups('admin')) : ?>
    <li><a href="<?= base_url('admin'); ?>" class="nav-link px-2 link-secondary">Kelola Users</a></li>

  <?php endif; ?>

</ul>
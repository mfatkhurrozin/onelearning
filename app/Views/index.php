<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
<div class="container utama">
  <div class="row justify-content-center">
    <img src="/img/logo.png" style="width:300px" class="img-fluid float-right" alt="" srcset="">
  </div>
  <div class="row">
    <div class="col d-flex justify-content-center flex-column text-center">
      <p class="text-muted p-3">Selamat datang <?= user()->username; ?> di E-Learning, aplikasi ini dibuat dengan menggunakan bahasa pemrograman PHP didukung framework CodeIgniter4. <br>Dibuatnya aplikasi ini untuk memenuhi syarat Ujian Akhir Semester 3 Teknik Informatika Stmik Widya Pratama Pekalongan, dikerjakan secara kelompok yang beranggotakan : <br>M. Fatkhurrozin (20.240.0004) , Rahadian Ahmad (20.240.0094) , M.Nizar Ardansyah (20.240.0095)</p>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
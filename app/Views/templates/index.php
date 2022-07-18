<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <title> <?= $title;  ?></title>
  <style>
    * {
      font-family: 'Lato', sans-serif;
    }

    .tombol {
      box-shadow: none;
      background: #00abd4;
      border: none;
      padding: .5rem 1rem;
      border-radius: 8px;
      text-decoration: none;
      color: white;
    }

    .login {
      background: white;
      border: 1px solid #00abd4;
    }

    .login:hover {
      background: #00abd4;
      color: white;
    }

    .daftar {
      color: white;
    }

    .tombol:hover {
      -webkit-box-shadow: 0 10px 6px -6px #00abd4;
      -moz-box-shadow: 0 10px 6px -6px #00abd4;
      box-shadow: 0 10px 6px -6px #00abd4;
      transition: all 0.15s ease-out;
      color: white;
    }

    .utama {
      margin-top: 4rem;
      margin-bottom: 4rem;
    }

    .pagination>li>a {
      background-color: white;
      color: #5A4181;
    }

    .pagination>li>a:focus,
    .pagination>li>a:hover,
    .pagination>li>span:focus,
    .pagination>li>span:hover {
      color: #5a5a5a;
      background-color: #eee;
      border-color: #ddd;
    }

    .pagination>.active>a {
      color: white;
      background-color: #00abd4 !Important;
      border: solid 1px #00abd4 !Important;
    }

    .pagination>.active>a:hover {
      background-color: #007793 !Important;
      border: solid 1px #007793;
    }
  </style>
</head>

<body>

  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex">
        <img src="/img/logo.png" style="width:80px" class="img-fluid" alt="" srcset="">
      </a>

      <?= $this->include('templates/navbar'); ?>

      <div class="row-md-3 float-right align-items-baseline">
        <!-- <button type="button" class="tombol login me-2">Login</button> -->

        <a href="<?= base_url('logout'); ?>" class="tombol daftar">
          <i class="fas fa-sign-out-alt"></i>
          Out
        </a>
      </div>
    </header>
    <div class="row">
      <div class="col ">
        <?php if (in_groups('siswa')) : ?>
          <h2>Dashboard Siswa</h2>
        <?php elseif (in_groups('guru')) : ?>
          <h2>Dashboard Guru</h2>
        <?php endif; ?>
      </div>
      <div class="col d-flex justify-content-end align-items-center">
        <div class="p-1 text-white" style="background:#3b4347; border-radius:20px;">
          <span style="margin-right: 10px; margin-left:10px">Hai, <?= user()->username; ?></span>
          <img class="img-profile rounded-circle" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" alt="" style="width:30px;" srcset="">
        </div>
      </div>
    </div>
  </div>
  <main>
    <?= $this->renderSection('page-content'); ?>
  </main>
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24">
            <use xlink:href="#bootstrap" />
          </svg>
        </a>
        <span class="text-muted">&copy; <?= date('Y'); ?> | E-Learning, Inc</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="#"><i class="fab fa-facebook"></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><i class="fab fa-instagram"></i></a></li>

      </ul>
    </footer>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
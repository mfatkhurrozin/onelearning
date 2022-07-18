<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato" rel="stylesheet"> 
    <title><?php $title; ?></title>
    <style>
     *{
      font-family: 'Lato', sans-serif;
     }
     .tombol {
       box-shadow:none;
       background:#00abd4;
       border:none;
       padding: .5rem 1rem;
       border-radius: 8px
     }
     .login {
      background:white;
      border: 1px solid #00abd4;
     }
     .login:hover {
      background:#00abd4;
      color:white;
     }
     .daftar {
       color:white;
     }
     .tombol:hover {
        -webkit-box-shadow: 0 10px 6px -6px #00abd4;
        -moz-box-shadow: 0 10px 6px -6px #00abd4;
        box-shadow: 0 10px 6px -6px #00abd4;
        transition: all 0.15s ease-out;
     }
     .utama {
       margin-top:4rem;
       margin-bottom:4rem;
     }
    </style>
  </head>
  <body>
    
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
      <img src="/img/logo.png" style="width:80px" class="img-fluid" alt="" srcset="">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
        <li><span class="nav-link px-2 link-dark">|</span></li>
        <li><a href="#" class="nav-link px-2 link-dark">Dashboard</a></li>
        <li><span class="nav-link px-2 link-dark">|</span></li>
        <li><a href="#" class="nav-link px-2 link-dark">Tentang</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="tombol login me-2">Login</button>
        <button type="button" class="tombol daftar ">Sign-up</button>
      </div>
    </header>
  </div>
      <main>
        <div class="container utama">
          <div class="row">
            <div class="col-3">
              <img src="/img/logo.png" style="width:300px" class="img-fluid float-right" alt="" srcset="">
            </div>
            <div class="col d-flex justify-content-center flex-column">
                <h1>Tentang</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi voluptatibus accusantium dignissimos laborum dolores pariatur. Dignissimos voluptates dolorem ullam deleniti minus autem sed eius. Provident quasi, amet excepturi ad maxime explicabo esse suscipit, ipsam assumenda sit omnis quam qui laboriosam.</p>
            </div>
          </div>
        </div>
        <div class="" style="background: #454f56">
          <div class="container">
            <h3 class="text-center text-white mt-4 py-3">Our Team</h3>
            <div class="row d-flex align-items-center mb-4">
              <div class="col d-flex align-items-center flex-column">
                <img class="bd-placeholder-img rounded-circle mb-3" width="160" height="160" src="/img/nizar.jpg" alt="">
                <p class="fw-normal text-white lh-sm"> <span class="fw-bolder">Mohammad Nizar</span> Ardansyah </p>
                <p class="fw-normal text-muted lh-sm"> <span class="fw-bolder">20.240.0095</span> </p>
              </div>
              <div class="col d-flex align-items-center flex-column">
                <img class="bd-placeholder-img rounded-circle mb-3" width="160" height="160" src="/img/rozin.jpg" alt="">
                <p class="fw-normal text-white lh-sm"> Mohammad<span class="fw-bolder"> Fatkhurrozin</span> </p>
                <p class="fw-normal text-muted lh-sm"> <span class="fw-bolder">20.240.0002</span> </p>
              </div>
              <div class="col d-flex align-items-center flex-column">
                <img class="bd-placeholder-img rounded-circle mb-3" width="160" height="160" src="/img/rahad.jpg" alt="">
                <p class="fw-normal text-white lh-sm"> <span class="fw-bolder">Rahadian</span> Ahmad </p>
                <p class="fw-normal text-muted lh-sm"> <span class="fw-bolder">20.240.0094</span> </p>
              </div>
            </div>
          </div>
        </div>
        
      </main>
      <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            </a>
            <span class="text-muted">&copy; 2021 Company, Inc</span>
          </div>

          <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="#"><img src="/img/social/logo-facebook.svg" alt="" srcset="" width="24" height="24"></a></li>
            <li class="ms-3"><a class="text-muted" href="#"><img src="/img/social/logo-instagram.svg" alt="" srcset="" width="24" height="24"></a></li>
            
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

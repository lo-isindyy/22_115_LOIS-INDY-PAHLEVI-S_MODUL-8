<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
  <body>
    <!-- header -->
    <nav class="navbar bg-primary fixed-top">
      <div class="container-fluid">
        <div>
          <span class="navbar-brand mb-0 h1">PBW </span>
          <a class="navbar-brand" href="#">Selamat datang, Lois Indy Pahlevi S</a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
              Praktikum PBW A
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body position-relative">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Daftar Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Informasi Tugas</a>
              </li>
            </ul>
            <div class="tombol position-absolute bottom-0 start-50">
              <a class="btn btn-primary d-grid gap-2" href="#" role="button"
                >Logout</a
              >
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end header -->

    <!-- content -->
    <section class="mt-5">
      <div class="content position-relative" style="padding-top: 50px">
        <div class="row">
          <h1 class="text-center font-size">
            WEBSITE PRAKTIKUM PEROGRAMAN BERBASIS WEB
          </h1>
        </div>
        <div class="row align-items-center mt-4">
          <div class="col-4">
            <div class="card mx-auto" style="width: 85%">
              <img src="ucil.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Lois Indy Pahlevi S.</h5>
                <h5 class="card-title">220441100115</h5>
                <p class="card-text">
                  Halloo, perkenalkan nama saya Lois Indy Pahlevi S, sapaan ku Lois, saya adalah mahasiswa prodi sistem Informasi
                  universitas trunojoyo Madura, hobi saya adalah mengumpulkan tugas tepat waktu.
                </p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mx-auto" style="width: 85%">
              <img src="ucil4.jpeg" class="card-img-top" alt="..."" />
              <div class="card-body">
                <h5 class="card-title">Syafira Putri Kamila</h5>
                <h5 class="card-title">220441100036</h5>
                <p class="card-text">
                  Halloo, perkenalkan nama saya Syafira Putri Kamila, sapaan ku Fira, saya adalah mahasiswa prodi sistem Informasi
                  universitas trunojoyo Madura, hobi saya adalah mengumpulkan tugas tepat waktu.
                </p>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="card mx-auto" style="width: 85%">
              <img src="ucil3.jpeg" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">Yuyun Oktalina Arlita</h5>
                <h5 class="card-title">220441100025</h5>
                <p class="card-text">
                  Halloo, perkenalkan nama saya Yuyun Oktalina Arlita, sapaan ku Yuyun, saya adalah mahasiswa prodi sistem Informasi
                  universitas trunojoyo Madura, hobi saya adalah mengumpulkan tugas tepat waktu.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end content -->

    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
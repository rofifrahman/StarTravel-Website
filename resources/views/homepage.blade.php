<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Star Travel</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/global.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand fs-2" style="margin-left: -100px" href="/"
          ><img
            src="img/star-removebg-preview 4.png"
            alt="Logo Website"
            style="display: inline-block; margin-right: -50px"
          />Star Travel</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto fw-semibold">
            <li class="nav-item dropdown me-3">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Layanan Kami
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/ulasan">Ulasan</a></li>
                <li><a class="dropdown-item" href="/riwayatpemesanan">Riwayat Pemesanan</a></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="/pemesanan">Pemesanan</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="#">Hubungi Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login"
                ><img src="img/span.svg-icon.png" alt=""
              /></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Hero Section -->
    <header>
      <div
        class="hero-section"
        style="
          background-image: url('img/3959b876db9fd2f06151572736d958e4\ 1.png');
          background-size: cover;
        "
      >
        <div class="container">
          <div class="row" style="padding-bottom: 200px">
            <div class="col-4">
              <img
                style="margin-top: 40px; margin-left: -90px"
                src="img/Group 20.svg"
                alt=""
              />
              <p class="text-center" style="margin-top: -50px">
                Star Travel menjalankan busnya di seluruh pelosok Indonesia.
                Perusahaan bus adalah penyedia berbagai jenis layanan bus yang
                menghubungkan berbagai jalur kota.
              </p>
            </div>
            <div class="col-5 offset-3">
              <img style="margin-top: 150px" src="img/Mask group.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- End of  Hero Section -->

    <div class="container" style="margin-top: 70px">
      <h1 class="text-center text-decoration-underline fw-bold">
        LAYANAN KAMI
      </h1>
      <div class="row" style="margin-top: 70px">
        <div class="col-6">
          <img src="img/Group 22.svg" alt="" />
        </div>
        <div class="col-6">
          <h1 class="text-center fw-bold" style="margin-top: 80px">
            Armada Innova Reborn
          </h1>
          <p class="mt-4 fs-4">
            Perjalanan Anda Dijamin Aman Dengan Berbagai Fitur Dan Keunggulan
            Innova Newborn. Dengan Kapasitas Mobil Yang Lebih Luas, Perjalanan
            Akan Terasa Nyaman Hingga Sampai Tujuan.
          </p>
        </div>
      </div>
      <img style="margin-top: 80px" src="img/Group 21.svg" alt="" />
      <img
        class="offset-2"
        style="margin-top: 80px"
        src="img/jadwal travel.svg"
        alt=""
      />
        <h1
        class="text-center text-decoration-underline fw-bold"
        style="margin-top: 70px"
        >
        HUBUNGI KAMI
      </h1>
      <img style="margin-top: 70px; margin-bottom: 100px; margin-left: 50px;" src="img/Kontak.svg" alt="">
      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>


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

    <div class="container">
      <div class="row text-center" style="margin-top: 70px">
        <div
          class="col-5 ms-5 rounded-4"
          style="
            background-image: url('img/d26132106110c02004a5efa452420fea\ 1.png');
            background-size: cover;
          "
        >
          <img
            src="img/Group 8.png"
            alt="Logo Website"
            style="margin-left: -150px; margin-top: -20px"
          />

          <p class="text-center" style="margin-top: -40px">
            Sahabat Perjalanan Anda!
          </p>
          <input
            class="btn text-center rounded-5 fw-semibold"
            type="submit"
            value="About Us"
            style="
              color: #fff;
              background-color: black;
              height: 60px;
              width: 250px;
              margin-top: 50px;
              margin-bottom: 180px;
            "
          />
        </div>
        <div
          class="col-5 text-center rounded-4"
          style="background-color: #7274a8"
        >
          <div class="row">
            <p class="text-white fw-bold fs-3" style="padding-top: 50px">
              Registration
            </p>
          </div>
          <form method="post" action="#">
            @csrf
            <label class="text-black fw-semibold fs-5 mt-3" for="username"
              >Nama Lengkap</label
            >
            <br />
            <input
              class="text-center placeholder-white mt-2"
              name="name"
              type="text"
              id="nama_lengkap"
              placeholder="Type your name"
              style="background-color: #7274a8; border: none; width: 280px"
            />
            <br />
            <img style="margin-top: -20px" src="img/Line 2.png" alt="" /><br />
            <label class="text-black fw-semibold fs-5" for="password"
              >Username</label
            >
            <br />
            <input
              class="text-center placeholder-white mt-2"
              name="username"
              type="text"
              id="username"
              placeholder="Type your username"
              style="background-color: #7274a8; border: none; width: 280px"
            />
            <br />
            <img style="margin-bottom: 20px" src="img/Line 2.png" alt="" />
            <br />
            <label class="text-black fw-semibold fs-5" for="password"
              >Password</label
            >
            <br />
            <input
              class="text-center placeholder-white"
              name="password"
              type="password"
              id="password"
              placeholder="Type your password"
              style="background-color: #7274a8; border: none; width: 280px"
            />
            <br />
            <img style="margin-bottom: 20px" src="img/Line 2.png" alt="" />
            <br />
            <label class="text-black fw-semibold fs-5" for="password"
              >Konfirmasi Password</label
            >
            <br />
            <input
              class="text-center placeholder-white"
              name="password2"
              type="password"
              id="password2"
              placeholder="Type your password"
              style="background-color: #7274a8; border: none; width: 280px"
            />
            <br />
            <img style="margin-bottom: 20px" src="img/Line 2.png" alt="" />
            <br />
            <input
              class="btn text-center rounded-5 fw-semibold"
              type="submit"
              name="register"
              value="Register"
              style="
                color: black;
                background-color: white;
                height: 40px;
                width: 300px;
                margin-top: 15px;
              "
            />
          </form>
          <p class="text-white mt-3 pb-5">
            Already have an account?<a
              class="text-white fw-bold"
              style="text-decoration: none"
              href="/login"
            >
              Login in here
            </a>
          </p>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

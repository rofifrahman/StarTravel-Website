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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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

      <main class="container" style="margin-top: 20px">
        <h1 class="text-decoration-underline fw-semibold">
          <span class="underline">Ulasan</span>
        </h1>
        <div
          class="purple-box mt-5"
          style="background-color: #babce7; margin: 20px; border-radius: 10px"
        >
          <div class="row">
            <div class="col-12">
              <div class="review-card" style="padding: 30px">
                <div class="row">
                  <div class="col-1">
                    <img
                      src="img/avatar1.png"
                      alt="User Avatar"
                      width="60"
                      height="60"
                    />
                  </div>
                  <div class="col-10">
                    <h5 class="fw-bold">Putri</h5>
                    <p>Malang, Jawa Timur</p>
                    <p class="review-text fs-5">
                      Seneng banget sama travel ini. Pesannya gampang,
                      pelayanannya cepat, dan yang paling penting, mobilnya
                      selalu bersih dan wangi. Perjalanan jadi lebih nyaman dan
                      aman. Terima kasih star travel!!!
                    </p>
                    <div class="review-footer">
                      <small>4 April 2024</small>
                      <div class="pt-2">
                        <i class="bi bi-hand-thumbs-up"></i>
                        <i class="bi bi-three-dots"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-nowrap p-3 align-items-center">
            <img class="profile" src="img/avatar2.png" alt="" />
            <input
              type="text"
              id="ulasan"
              class="form-control border-black text-start mx-3"
              style="border-radius: 5px; width: 100%; height: 3rem"
              placeholder="Bagikan Ulasanmu"
            />
            <button id="send-btn" class="btn">
              <i class="bi bi-send"></i>
            </button>
          </div>
      </main>
    </body>
  </html>

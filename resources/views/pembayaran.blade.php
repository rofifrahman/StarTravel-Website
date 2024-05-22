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
    <style>
      .form-check-input {
        width: 1.5em;
        height: 1.5em;
        border-color: black;
      }
      .form-check-input:checked {
        background-color: #5d61bc;
        border-color: #5d61bc;
      }
      .form-check-input:focus {
        box-shadow: none;
      }
    </style>
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
      <h1
        class="text-center text-decoration-underline fw-bold mb-5"
        style="margin-top: 70px"
      >
        Pembayaran
      </h1>
      <div class="row">
        <div class="col-lg-6">
          <div class="col">
            <div class="row mt-3">
              <div
                class="col-12 rounded-3 mb-4"
                style="background-color: #5d61bc"
              >
                <div class="d-flex ps-3 py-3 align-items-center">
                  <img
                    src="img/Group 29.svg"
                    alt=""
                    style="width: 70px; height: 50px"
                  />
                  <p class="text-white fs-4 pt-3">Total Pembayaran</p>
                </div>
                <div class="col-5 pb-5 offset-4">
                  <div
                    class="card rounded-5 text-center py-2"
                    style="background-color: white"
                  >
                    <p class="fs-5 fw-semibold pt-2" id="totalPembayaran">
                      Rp. 140.000
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-12 rounded-3" style="background-color: #5d61bc">
                <div class="d-flex ps-3 py-3 align-items-center">
                  <img
                    src="img/Group 30.svg"
                    alt=""
                    style="width: 70px; height: 50px"
                  />
                  <p class="text-white fs-4 pt-3">Metode Pembayaran</p>
                </div>
                <form  enctype="multipart/form-data" id="pembayaran" method="post">
                  @csrf
                  <div class="col-10 pb-5 offset-1">
                    <div
                      class="card rounded-5 py-2 justify-content-between align-items-center mb-4"
                      style="
                        background-color: white;
                        padding-left: 20px;
                        padding-right: 20px;
                      "
                    >
                      <div class="d-flex">
                        <p
                          class="fs-4 fw-semibold pt-2 mb-0"
                          style="margin-left: 190px"
                        >
                          Tunai
                        </p>
                        <div class="form-check form-check-reverse pt-2 mt-1">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="metodePembayaran"
                            id="metodePembayaran1"
                            style="margin-left: 170px"
                          />
                        </div>
                      </div>
                    </div>
                    <div
                      class="card rounded-5 py-2 d-flex justify-content-between align-items-center mb-4"
                      style="
                        background-color: white;
                        padding-left: 20px;
                        padding-right: 20px;
                      "
                    >
                      <p class="fs-4 pt-3 fw-semibold">Transfer</p>
                      <div
                        class="card rounded-5"
                        style="background-color: #d9d9d9"
                      >
                        <div class="d-flex">
                          <img
                            class="ps-3"
                            src="img/png-transparent-bank-central-asia-logo-bca-finance-business-bank-blue-cdr-text-thumbnail-removebg-preview 1.svg"
                            alt=""
                          />
                          <p class="fs-4 pt-3 ps-4 fw-semibold">BCA</p>
                          <div
                            class="form-check form-check-reverse pt-3 mt-1 mb-0"
                            style="padding-left: 280px; margin-right: 20px"
                          >
                            <input
                              class="form-check-input"
                              type="radio"
                              name="metodePembayaran"
                              id="metodePembayaran2"
                            />
                          </div>
                        </div>
                      </div>
                      <div
                        class="card rounded-5 mt-3"
                        style="background-color: #d9d9d9"
                      >
                        <div class="d-flex">
                          <img
                            class="ps-3"
                            src="img/BankNegaraIndonesia46-logo 1.svg"
                            alt=""
                          />
                          <p class="fs-4 pt-3 ps-4 fw-semibold">BNI</p>
                          <div
                            class="form-check form-check-reverse pt-3 mt-1 mb-0"
                            style="padding-left: 300px; margin-right: 20px"
                          >
                            <input
                              class="form-check-input"
                              type="radio"
                              name="metodePembayaran"
                              id="metodePembayaran3"
                            />
                          </div>
                        </div>
                      </div>
                      <div
                        class="card rounded-5 mt-3 mb-3"
                        style="background-color: #d9d9d9"
                      >
                        <div class="d-flex">
                          <img
                            class="ps-3"
                            src="img/images-removebg-preview 1.svg"
                            alt=""
                          />
                          <p class="fs-4 pt-3 ps-3 fw-semibold">Mandiri</p>
                          <div
                            class="form-check form-check-reverse pt-3 mt-1 mb-0"
                            style="padding-left: 230px; margin-right: 20px"
                          >
                            <input
                              class="form-check-input"
                              type="radio"
                              name="metodePembayaran"
                              id="metodePembayaran4"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="text-white fs-5">Upload Bukti Transfer</p>
                    <div class="d-flex">
                      <img src="img/Upload Bukti Pembayaran Icon.svg" alt="" style="width: 50px;">
                      <input class="form-control rounded-4" type="file" id="buktiTransfer" name="buktiTransfer" style="width: 450px; height:50px; margin-left:-17px;">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-5 offset-1">
          <div class="row mt-3">
            <div class="col-12 rounded-3" style="background-color: #5d61bc">
              <div class="d-flex ps-3 py-3 align-items-center">
                <img
                  src="img/Group 31.svg"
                  alt=""
                  style="width: 70px; height: 50px"
                />
                <p class="text-white fs-4 pt-3">Detail Pesanan</p>
              </div>
              <p class="text-white fs-5" style="margin-left: 89px">
                Alamat Penjemputan
              </p>
              <div
                class="col-9 offset-2 rounded-5 pt-3 pb-1 ps-3"
                style="background-color: white"
              >
                <p id="alamatPenjemputanDetailPesanan">
                  Jl. Semeru No. 1 Ponorogo
                </p>
              </div>
              <p class="text-white fs-5 pt-4" style="margin-left: 89px">
                Alamat Tujuan
              </p>
              <div
                class="col-9 offset-2 rounded-5 pt-3 pb-1 ps-3"
                style="background-color: white"
              >
                <p id="alamatTujuanDetailPesanan">
                  Jl. Sigura - gura III No. 2 , Malang
                </p>
              </div>
              <p class="text-white fs-5 pt-4" style="margin-left: 89px">
                Tanggal Pergi
              </p>
              <div
                class="col-9 offset-2 rounded-5 pt-3 pb-1 ps-3"
                style="background-color: white"
              >
                <p id="tangggalDetailPesanan">Senin, 20 Mei 2024</p>
              </div>
              <p class="text-white fs-5 pt-4" style="margin-left: 89px">
                Jumlah Kursi
              </p>
              <div
                class="col-9 offset-2 rounded-5 pt-3 pb-1 ps-3 mb-5"
                style="background-color: white"
              >
                <p id="jumlahKursiDetailPesanan">1</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="offset-5 col-4 pt-4">
        <input
          class="text-center rounded-4"
          type="submit"
          name="bayarSekarang"
          value="Bayar Sekarang"
          id="bayarSekarang"
          style="
            background-color: #040860;
            color: white;
            width: 200px;
            height: 50px;
          "
        />
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>

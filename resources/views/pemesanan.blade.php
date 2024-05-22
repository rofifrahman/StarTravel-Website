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
        <div
        class="col rounded-4"
        style="margin-top: 70px; background-color: #5d61bc"
      >
        <h3 class="pt-5 ps-5 text-white fw-bold">Tiket Travel</h3>
        <form method="post" id="Pemesanan" action="/pemesanan">
          @csrf
          <div class="pt-4 row">
            <div class="col-6">
              <p class="ps-5 text-white fs-5">Dari</p>
            </div>
            <div class="col-6">
              <p class="ps-5 text-white fs-5">Ke</p>
            </div>
            <div class="row">
              <div class="col-6 ps-5">
                <div class="input-group mb-3">
                  <img src="img/Group 23.svg" alt="">
                  <select class="form-select rounded-4" id="kotaAsal" name="kota_asal" aria-label="Example select with button addon"">
                    <option selected>Pilih Kota</option>
                    <option value="Ponorogo">Ponorogo</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Malang">Malang</option>
                    <option value="Solo">Solo</option>
                    <option value="Surabaya">Surabaya</option>
                  </select>
                </div>
              </div>
              <img style="width: 60px; height: 66px; margin-top: -10px;" src="img/exchange.svg" alt="">
              <div class="col-5">
                <div class="input-group mb-3">
                  <img src="img/Group 23.svg" alt="">
                  <select class="form-select rounded-4" id="kotaTujuan" name="kota_tujuan" aria-label="Example select with button addon">
                    <option selected>Pilih Kota</option>
                    <option value="Ponorogo">Ponorogo</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Malang">Malang</option>
                    <option value="Solo">Solo</option>
                    <option value="Surabaya">Surabaya</option>
                  </select>
                </div>
              </div>
            </div>
              <div class="pt-4 row">
                <div class="col-6">
                  <p class="ps-5 text-white fs-5">Alamat Penjemputan</p>
                </div>
                <div class="col-6">
                  <p class="ps-5 ms-4 text-white fs-5">Alamat Tujuan</p>
                </div>
              </div>
              <div class="row pb-4">
                <div class="col-6 ps-5 ms-2">
                  <input
                        type="text"
                        name="alamat_penjemputan"
                        id="alamatPenjemputan"
                        class="form-control rounded-4"
                        style="height: 100px; width: 580px;"
                        placeholder="Tulis alamat lengkap"
                      />
                </div>
                <div class="col-5 ps-5 ms-4">
                  <input
                        type="text"
                        name="alamat_tujuan"
                        id="alamatTujuan"
                        class="form-control rounded-4"
                        style="height: 100px; width: 530px;"
                        placeholder="Tulis alamat lengkap"
                      />
                </div>
              </div>
              <div class="pt-4 row">
                <div class="col-6">
                  <p class="ps-5 text-white fs-5">Tanggal Pergi</p>
                </div>
                <div class="col-6">
                  <p class="ps-5 ms-4 text-white fs-5">Jumlah Kursi</p>
                </div>
              </div>
              <div class="row">
              <div class="col-6 ps-5">
                <div class="input-group mb-3">
                  <img src="img/Calendar.svg" alt="">
                  <input style="width: 520px;" class="rounded-4 form-control" type="date" name="tanggal_pergi" id="tanggalPergi">
                </div>
              </div>
              <div class="col-5 ms-5 ps-4">
                <div class="input-group mb-3">
                  <img src="img/Person.svg" alt="">
                  <select class="form-select rounded-4" id="jumlahKursi" name="jumlah_kursi" aria-label="Example select with button addon">
                    <option selected>Jumlah Kursi</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="pt-4 row">
              <div class="col-6">
                <p class="ps-5 text-white fs-5">Harga</p>
              </div>
            </div>
            <div class="row">
              <div class="col-6 ps-5">
                <div class="row">
                  <img src="img/Group 24.svg" alt="" style="width: 80px;">
                  <div class="col-10 card rounded-4" style="height: 44px; margin-left:-10px;">
                    <p class= "mt-2" id="harga"></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row pt-5 mt-3 pb-5 mb-4 text-center">
              <div class="offset-4 col-4">
                <input type="hidden" name="harga" id="hiddenHarga">
                <input class="text-center rounded-4" type="submit" name="pesan" value="Pesan" id="pesan" style="background-color: #040860; color: white; width: 200px; height: 50px;" />
              </div>
            </div>
          </form>
        </div>
      </div>
        <div class="row" style="margin-top: 70px" id="hasil">
        <?php
        if (isset($_POST["pesan"])) {
            if (!pemesanan($_POST) > 0) {
                echo mysqli_error($connection);
            }
            
            $pemesanan = query("SELECT * FROM pemesanan");
            foreach ($pemesanan as $row) :
            ?>
            <div
                class="col-5 card rounded-5 offset-4 mt-5"
                style="background-color: #5d61bc"
            >
                <h2 class="text-white fw-bold pt-4 ps-2">Status Pembayaran</h2>
                <p class="pt-4 ps-2 fw-bold text-white fs-4">Dari</p>
                <p class="ps-2 text-white" style="margin-top: -15px" id="dariPembayaran">
                <?= $row["kota_asal"]?>
                </p>
                <p class="pt-1 ps-2 fw-bold text-white fs-4">Tujuan</p>
                <p class="ps-2 text-white" style="margin-top: -15px" id="tujuanPembayaran">
                <?= $row["kota_tujuan"]?>
                </p>
                <p class="pt-1 ps-2 fw-bold text-white fs-4">Tanggal Pergi</p>
                <p
                class="ps-2 text-white"
                style="margin-top: -15px"
                id="tanggalPergiPembayaran"
                >
                <?= $row["tanggal_pergi"]?>
                </p>
                <p class="pt-1 ps-2 fw-bold text-white fs-4">Jumlah Kursi</p>
                <p class="ps-2 text-white" style="margin-top: -15px" id="jumlahKursiPembayaran">
                <?= $row["jumlah_kursi"]?>
                </p>
                <p class="pt-1 ps-2 fw-bold text-white fs-4">Harga</p>
                <p class="ps-2 text-white" style="margin-top: -15px" id="hargaPembayaran">
                <?= $row["harga"]?>
                </p>
                <p class="pt-1 ps-2 fw-bold text-white fs-4">Status Pembayaran</p>
                <p class="ps-2 text-white pb-5" style="margin-top: -15px">Lunas</p>
            </div>
            <?php
            endforeach;
        }
        ?>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
        const kursiSelect = document.getElementById('jumlahKursi');
        const hargaElement = document.getElementById('harga');
        const hiddenHarga = document.getElementById('hiddenHarga');

        function updatePrice() {
          const selectedKursi = parseInt(kursiSelect.value);
          const basePrice = 140000;
          const totalPrice = selectedKursi * basePrice;
          
          hargaElement.textContent = `Rp ${totalPrice.toLocaleString('id-ID')}`;
          hiddenHarga.value = totalPrice;
        }

        kursiSelect.addEventListener('change', updatePrice);
    </script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="ajax.js"></script>
  </body>
</html>

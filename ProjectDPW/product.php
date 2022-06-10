<?
session_start();
require 'koneksi.php';



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Trends.Co | Belanja Baju Online</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success2">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logo_white.png" alt="" width="50" height="50" class="me-2" /><strong>Trends.co</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../produk.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../berita.php">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../bantuan.php">Bantuan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keranjang.php">Keranjang</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
          </ul>
        </div>
      </div>
    </nav>

    <!--Breadcrumd-->
    <div class="container">
      <nav aria-label="breadcrumb" style="background-color: #ffff" class="mt-3">
        <ol class="breadcrumb p-3">
          <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-dark">Beranda</a></li>
          <li class="breadcrumb-item active" aria-current="page">Product</li>
          
        </ol>
      </nav>
    </div>
    <!--Breadcrumd-->

    <!--Singgel Product-->
    <div class="container">
      <div class="row row-product">
        <div class="col-lg-5">
          <figure class="figure">
            <img src="img/assets_produk/produk1.jpg" class="figure-img img-fluid" style="border-radius: 5px; width: 450px" />
          </figure>
        </div>

        <div class="col-lg-7">
          <h4>Trends.co - Sadness</h4>
          <div class="garis-bawah"></div>
          <h3 class="text-muted mb-2">Rp. 75.000</h3>
          <h5 class="mt-4">ukuran:</h5>
          <select class="form-select mt-4" aria-label="Default select example">
            <option value="L">L</option>
            <option value="M">M</option>
            <option value="XL">XL</option>
          </select>
          <p class="mt-4">T-Shirt Trends.co saat ini merupakan salah satu lini pakaian terbaik dan berkualitas tinggi di antara Local Brand Indonesia. Dibuat dengan bahan cotton yang nyaman untuk menemani harimu dan memiliki print desain yang unik. Dapatkan long lasting tee dengan warna cantik ini untuk merasa muda selamanya!

Untuk Model Pria: Tinggi 185-186 cm, Berat 75 kg, Menggunakan Ukuran XL
Untuk Model Wanita: Tinggi 168-170 cm, Berat 55 kg, Menggunakan Ukuran M

Bahan: Katun

M: Lebar Dada: 52 cm - Panjang Baju: 72 cm - Lebar Badan: 44
L: Lebar Dada: 54 cm - Panjang Baju: 74 cm - Lebar Badan: 46
XL: Lebar Dada: 56 cm - Panjang Baju: 76 cm - Lebar Badan: 48

Toleransi setiap size 1-1½cm
          </p>
          <!--Ukuran-->
          <div class="btn-produk mt-4">
          <button type="button" class="btn btn-success2" name="addprod">Tambah Barang</button>
          </div>
        </div>
      </div>
    </div>
    <!--Singgel Product-->

    <footer class="bg-light mt-5 p-5 text-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <a href="">
              <img src="../frontend/img/logo_dark.png" alt="" />
            </a>
            <span>Copyright &copy 2022 | Created and Developed by <a href="https://www.google.com" class="text-dark fw-bold">Trends.co</a></span>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://use.fontawesome.com/0cf54b252c.js"></script>
  </body>
</html>

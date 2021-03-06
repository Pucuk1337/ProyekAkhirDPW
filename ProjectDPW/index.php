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
    <title>Trends.Co | Belanja Baju Online</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success2">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo_white.png" alt="" width="50" height="50" class="me-2" /><strong>Trends.co</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="product.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="berita.php">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bantuan.php">Bantuan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="keranjang.php">Keranjang</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <button type="button" class="btn btn-outline-light me-2 mt-2"><a href="login.php">Masuk</a></button>
            <button type="button" class="btn btn-success2 me-2 mt-2"><a href="register.php">Daftar</a></button> 
          </ul>
        </div>
      </div>
    </nav>

    <!-- Carousel -->
    <div class="jumbotron">
      <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/assets_carousel/img1.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/assets_carousel/img2.jpg" class="d-block w-100" alt="..." />
            </div>
            <div class="carousel-item">
              <img src="img/assets_carousel/img3.jpg" class="d-block w-100" alt="..." />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

    <!-- Produk -->
    <div class="container mt-4">
      <div class="judul-kategori" style="background-color: #fff; padding: 2px 10px">
        <h5 class="text-center mt-2">PRODUK</h5>
      </div>
    </div>
    <div class="container">
      <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-3 mt-4 d-flex align-items-stretch">
          <div class="card">
            <img src="img/assets_produk/produk1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Trends.CO - Sadness</h5>
              <p class="card-text">Rp. 75000</p>
              <a href="#" class="btn btn-success2">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 mt-4 d-flex align-items-stretch">
          <div class="card">
            <img src="img/assets_produk/produk2.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Trends.CO - Tears</h5>
              <p class="card-text">Rp. 75000</p>
              <a href="#" class="btn btn-success2">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 mt-4 d-flex align-items-stretch">
          <div class="card">
            <img src="img/assets_produk/produk3.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Trends.CO Ft. Leaf - Back to Nature</h5>
              <p class="card-text">Rp. 75000</p>
              <a href="#" class="btn btn-success2">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 mt-4 d-flex align-items-stretch">
          <div class="card">
            <img src="img/assets_produk/produk4.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Trends.CO - Kesenjangan Sosial</h5>
              <p class="card-text">Rp. 75000</p>
              <a href="#" class="btn btn-success2">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 mt-4 d-flex align-items-stretch">
          <div class="card">
            <img src="img/assets_produk/produk1.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Trends.CO - Sadness</h5>
              <p class="card-text">Rp. 75000</p>
              <a href="#" class="btn btn-success2">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 mt-4 d-flex align-items-stretch">
          <div class="card">
            <img src="img/assets_produk/produk2.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Trends.CO - Tears</h5>
              <p class="card-text">Rp. 75000</p>
              <a href="#" class="btn btn-success2">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 mt-4 d-flex align-items-stretch">
          <div class="card">
            <img src="img/assets_produk/produk3.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Trends.CO Ft. Leaf - Back to Nature</h5>
              <p class="card-text">Rp. 75000</p>
              <a href="#" class="btn btn-success2">Beli</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-3 mt-4 d-flex align-items-stretch">
          <div class="card">
            <img src="img/assets_produk/produk4.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Trends.CO - Kesenjangan Sosial</h5>
              <p class="card-text">Rp. 75000</p>
              <a href="#" class="btn btn-success2">Beli</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#00cba9"
        fill-opacity="1"
        d="M0,192L40,197.3C80,203,160,213,240,229.3C320,245,400,267,480,245.3C560,224,640,160,720,154.7C800,149,880,203,960,213.3C1040,224,1120,192,1200,197.3C1280,203,1360,245,1400,266.7L1440,288L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
      ></path>
    </svg>
    <!-- Footer-->
    <div class="berita">
      <div class="container">
        <div class="row text-center text-white">
          <div class="col">
            <!--Section: News of the day-->
            <div class="row gx-5">
              <div class="col-md-6 mb-4">
                <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                  <img src="img/assets_carousel/img1.jpg" class="img-fluid" alt="" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                  </a>
                </div>
              </div>

              <div class="col-md-6 mb-4">
                <span class="badge bg-danger px-2 py-1 shadow-1-strong mb-3">News of the day</span>
                <h4><strong>Kolaborasi Trends.Co dengan Leaf</strong></h4>
                <p class="text-white">Kolaborasi dengan Leaf membangun sebuah mimpi. Tampilan desain yang sederhana ini mampu meningkatkan sebuah esensi warna hijau yang lekat dengan sebuah dedaunan atau bisa kita bilang ...</p>
                <button type="button" class="btn btn-success2"><a href="berita.php"> Baca Selengkapnya</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#00cba9"
        fill-opacity="1"
        d="M0,256L40,266.7C80,277,160,299,240,261.3C320,224,400,128,480,112C560,96,640,160,720,165.3C800,171,880,117,960,122.7C1040,128,1120,192,1200,213.3C1280,235,1360,213,1400,202.7L1440,192L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"
      ></path>
    </svg>
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

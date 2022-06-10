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
    <nav class="navbar navbar-expand-lg navbar-dark bg-success2" aria-label="navbar">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/logo_white.png" alt="" width="50" height="50" class="me-2" /><strong>Trends.co</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="produk.php">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="promo.php">Promo</a>
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
    <div class="container">
      <nav aria-label="breadcrumb" class="breadcrumb-2 mt-3">
        <ol class="breadcrumb p-3">
          <li class="breadcrumb-item"><a href="index.php" class="text-dark">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
        </ol>
      </nav>
    </div>
    <div class="container">
      <div class="row row-product">
        <div class="col">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Hapus</th>
                <th scope="col">Produk</th>
                <th scope="col">Gambar</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Sub Total</th>
              </tr>
            </thead>
            <tbody class="align-middle">
              <tr>
                <th scope="row">
                  <a href="#" style="color: black"><i class="fa-solid fa-trash"></i></a>
                </th>
                <td>Trends.CO - Sadness</td>
                <td>
                  <a href="#"><img src="../frontend/img/assets_produk/produk1.jpg" class="img-keranjang" alt="" /></a>
                </td>
                <td>Rp. 75000</td>
                <td>
                  <button class="button btn-dark btn-sm"><i class="fas fa-minus"></i></button>
                  <span class="mx-2">1</span>
                  <button class="button btn-success2 btn-sm"><i class="fas fa-plus text-white"></i></button>
                </td>
                <td>Rp. 75000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" colspan="2">Total Keranjang Belanja</th>
              </tr>
            </thead>
            <tbody class="align-middle">
              <tr>
                <td class="fw-bold">Total Harga</td>
                <td>Rp. 75.000</td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-success2 me-2 mt-2"><a class="text-white" href="register.php">Checkout</a></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://use.fontawesome.com/0cf54b252c.js"></script>
  </body>
</html>

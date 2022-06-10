<?php
session_start();
require '../koneksi.php';
$a = 0;



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css" />
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
        <a class="navbar-brand" href="#"><img src="../img/logo_white.png" alt="" width="50" height="50" class="me-2" /><strong>Trends.co</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../">Kembali Ke Toko</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="customer.php">Kelola Pelanggan</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <button type="button" class="btn btn-success2 me-2 mt-2"><a href="logout.php">Keluar</a></button>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <nav aria-label="breadcrumb" class="breadcrumb-2 mt-3">
        <ol class="breadcrumb p-3">
          <a href="kelola.php"><button type="button" class="btn btn-success2">Tambah Barang</button></a>
        </ol>
      </nav>
      <nav aria-label="breadcrumb" class="breadcrumb-2">
        <ol class="breadcrumb p-3">
          <?php if(isset($_SESSION['eksekusi'])) : ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong><?php echo $_SESSION['eksekusi']; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <?php
          session_destroy();
          endif; ?>
        </ol>
      </nav>
    </div>
    <div class="container">
      <div class="row row-product">
        <div class="col">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Produk</th>
                <th scope="col">Gambar</th>
                <th scope="col">Size</th>
                <th scope="col">Stock</th>
                <th scope="col">Harga</th>

                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody class="align-middle">
              <?php while($row = mysqli_fetch_assoc($result_product)):?>
              <tr>
                <td><?php echo ++$a; ?></td>
                <td><?= $row['namabarang'];?></td>
                <td><img src="../img/assets_produk/<?= $row['gambar'];?>" alt="" height="150px" width="150px" /></td>
                <td><?= $row['size'];?></td>
                <td><?= $row['stock'];?></td>
                <td><?= $row['harga'];?></td>

                <td>
                  <a href="kelola.php?ubah=<?php echo $row['id']; ?>"
                    ><button type="button" class="btn btn-success btn-sm" name="aksi"><i class="fas fa-pencil"></i></button
                  ></a>
                  <a href="proses.php?hapus=<?php echo $row['id']; ?>"
                    ><button type="button" class="btn btn-danger btn-sm" name="hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data tersebut?')"><i class="fas fa-trash"></i></button
                  ></a>
                </td>
              </tr>
              <?php endwhile;?>
            </tbody>
          </table>
        </div>
      </div>
      </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="https://use.fontawesome.com/0cf54b252c.js"></script>
  </body>
</html>

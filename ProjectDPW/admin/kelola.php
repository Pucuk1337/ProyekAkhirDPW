<!DOCTYPE html>
<?php
session_start();
include 'fungsi.php';
    $id = '';
    $namabarang = '';
    $size = '';
    $stock = '';
    $harga = '';
    $deskripsi = '';
  if(isset($_GET['ubah'])){
    $id = $_GET['ubah'];

    $query = "SELECT * FROM product WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($sql);
    $namabarang = $result['namabarang'];
    $size = $result['size'];
    $stock = $result['stock'];
    $harga = $result['harga'];
    $deskripsi = $result['deskripsi'];
  }
?>
<html lang="en">
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
      <form method="post" class="mt-4" action="proses.php" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $id;?>" name="id">
      <div class="mb-3 row">
        <label for="namaBarang" class="col-sm-2 col-form-label">Nama Barang</label>
        <div class="col-sm-10">
          <input  type="text" name="namabarang" class="form-control" id="namaBarang" placeholder="cth: Lorem Ipsum" value="<?= $namabarang; ?>" />
        </div>
      </div>
      <div class="mb-3 row">
        <label for="namaBarang" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
          <input <?php if(!isset($_GET['ubah'])) { echo "required";} ?> class="form-control" name="gambar" type="file" id="formFile" accept="image/*"/>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="namaBarang" class="col-sm-2 col-form-label">Ukuran</label>
        <div class="col-sm-10">
          <select  id="size" name="size" class="form-select" aria-label="Default select example" >
            <option <?php if($size == 'L'){echo "selected";}?> value="L">L</option>
            <option <?php if($size == 'M'){echo "selected";}?> value="M">M</option>
            <option <?php if($size == 'XL'){echo "selected";}?> value="XL">XL</option>
          </select>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="stock" class="col-sm-2 col-form-label">Stock</label>
        <div class="col-sm-10">
          <input value="<?= $stock; ?>"  type="number" name="stock" class="form-control" id="stock" placeholder="cth: 55" />
        </div>
      </div>
      <div class="mb-3 row">
        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
          <input value="<?= $harga; ?>"  type="number" name="harga" class="form-control" id="harga" placeholder="cth: 75000" />
        </div>
      </div>
      <div class="mb-3 row">
        <label for="harga" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"><?= $deskripsi; ?></textarea>
        </div>
      </div>
      <div class="mb-3 row mt-4">
        <div class="col">
          <?php 
          if(isset($_GET['ubah'])){
          ?>
          <button type="submit" name="aksi" value="edit" class="btn btn-success2"><i class="fas fa-floppy-o" aria-hidden="true"></i> Simpan Perubahan</button>
          <?php
          } else {
          ?>
          <button type="submit" name="aksi" value="add" class="btn btn-success2"><i class="fas fa-floppy-o" aria-hidden="true"></i> Tambahkan</button>
          <?php }
          ?>
          <a href="admin.php">
            <button type="button" class="btn btn-danger"><i class="fas fa-reply" aria-hidden="true"></i> Batal</button></a
          >
        </div>
      </div>
    </div>
    </form>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://use.fontawesome.com/0cf54b252c.js"></script>
  </body>
</html>

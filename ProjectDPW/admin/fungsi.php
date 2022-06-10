<?php
  include '../koneksi.php';

function tambah_data($data, $files){
    $id = $data['id'];
    $randomnumber = rand(1, 100);
    $namabarang = $data['namabarang'];
    $split = explode('.', $files['gambar']['name']);
    $ekstensi = $split[count($split)-1];
    $gambar = $id. '.'.$ekstensi;
    $size = $data['size'];
    $stock = $data['stock'];
    $harga = $data['harga'];
    $deskripsi = $data['deskripsi'];

    $dir = "img/assets_produk/";
    $tmpFile = $files['gambar']['tmp_name'];
    move_uploaded_file($tmpFile, $dir.$gambar);

    $query = "INSERT INTO product VALUES (NULL, '$namabarang', '$gambar', '$size', '$stock', '$harga', '$deskripsi')";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
  }

  function ubah_data($data, $files){
    $id = $data['id'];
    $randomnumber = rand(1, 100);
    $namabarang = $data['namabarang'];
    $size = $data['size'];
    $stock = $data['stock'];
    $harga = $data['harga'];
    $deskripsi = $data['deskripsi'];

    $queryShow = "SELECT * FROM product WHERE id = '$id';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    if($files['gambar']['name'] == ""){
      $gambar = $result['gambar'];
    } else {
      $randomnumber = rand(1, 100);
      $split = explode('.', $files['gambar']['name']);
      $ekstensi = $split[count($split)-1];
      $gambar = $result['id'].'.'.$ekstensi;
      unlink("img/assets_produk/".$result['gambar']);
      move_uploaded_file($files['gambar']['tmp_name'], 'img/assets_produk/'.$gambar);
    }
    

    $query = "UPDATE product SET namabarang='$namabarang', gambar='$gambar', size='$size', stock='$stock', harga='$harga', deskripsi='$deskripsi' WHERE  id = '$id';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
  }

  function hapus_data($data){
    $id = $data['hapus'];
    $queryShow = "SELECT * FROM product WHERE id = '$id';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    unlink("img/assets_produk/".$result['gambar']);
    $query = "DELETE FROM product WHERE id = '$id';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
  }
?>
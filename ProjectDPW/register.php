<?php
session_start();
if(!isset($_SESSION['log'])){
	
} else {
	header('location:index.php');
};
include 'koneksi.php';
$error = '';
$validate = '';
if(isset($_POST['adduser'])){
    global $conn;
    $nama = stripslashes($_POST['nama_lengkap']);
    $nama = mysqli_real_escape_string($conn, $nama);
    $telp= stripslashes($_POST['telp']);
    $telp = mysqli_real_escape_string($conn, $telp);
    $alamat= stripslashes($_POST['alamat']);
    $alamat = mysqli_real_escape_string($conn, $alamat);
    $username= stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $pass= stripslashes($_POST['password']);
    $pass = mysqli_real_escape_string($conn, $pass);
    $pass2= stripslashes($_POST['pass2']);
    $pass2 = mysqli_real_escape_string($conn, $pass2);
    $type= stripslashes($_POST['type_user']);
    $type = mysqli_real_escape_string($conn, $type);
    if(!empty(trim($nama)) && !empty(trim($username)) && !empty(trim($pass)) && !empty(trim($pass2)) && !empty(trim($type))){
      if (preg_match("/[A-Z][a-z]{2,}/", $_POST["nama_lengkap"])) {
        if($pass==$pass2){
          $pass=md5($pass);
               $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM login WHERE username ='$username'"));
                if($cek > 0) {
                $error = 'username telah terdaftar !';
                }else{
                $hasil = "INSERT INTO login (nama_lengkap, username, password, telp, alamat, type_user) VALUES ('$nama', '$username', '$pass', '$telp', '$alamat', '$type')";
                $result   = mysqli_query($conn, $hasil);
                if($result){
                  echo '<script> var conn=confirm("Berhasil Register User, Apa mau lanjut ke Menu Login"); 
                  if(conn==true){
                    window.location.assign("login.php");
                  }</script>';
                    }else{
                      $error =  'Register User Gagal !!';
                  } 
                }
          }else{
            $validate = 'Password tidak sama !!';
          }
        }else{
        $error = 'Nama tidak valid';
      }
    }else{
    $error =  'Data tidak boleh kosong !!';

  }
}

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
    <title>Masuk | Trends.Co</title>
  </head>
  <body>
    <div class="container">
      <form class="login-container top-50 start-50 translate-middle" action="" method="post">
        <div class="mb-3">
        <?php if($error != ''){ ?>
          <div class="alert alert-danger" role="alert"><?= $error; ?></div>
        <?php } ?>
          <h5 class="mt-3">Informasi Pribadi</h5>
          <label for="exampleInputName" class="form-label mt-3">Nama Lengkap</label>
          <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="nama_lengkap"/>
          <label for="exampleInputNumber" class="form-label mt-1">Nomor Telepon</label>
          <input type="number" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="telp" required maxlength="13"/>
          <label for="exampleInputNumber" class="form-label mt-1">Alamat</label>
          <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" name="alamat"/>
          <h5 class="mt-3">Informasi Login</h5>
          <label for="exampleInputUsername" class="form-label mt-3">Username</label>
          <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp" name="username" />
          
          <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label mt-3">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" />
            <?php if($validate != '') {?> 
              <p class="text-danger"><?= $validate; ?></p>
            <?php }?>
            <label for="exampleInputPassword2" class="form-label mt-3">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass2" />
            <?php if($validate != '') {?> 
              <p class="text-danger"><?= $validate; ?></p>
            <?php }?>
          
          <select class="mt-4"  id="size" name="type_user" class="form-select" aria-label="Default select example" >
            <option value="member">Member</option>
            <option value="admin">Admin</option>
          </select>
          </div>
          <a href="index.php"><button type="submit" class="btn btn-danger" name="">Batal</button></a>
          <button type="submit" class="btn btn-success2" name="adduser">Daftar</button>
          <div class="mt-3">Sudah punya akun? <a href="login.php" class="text-success">Masuk</a>.</div>
        </div>
      </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://use.fontawesome.com/0cf54b252c.js"></script>
  </body>
</html>

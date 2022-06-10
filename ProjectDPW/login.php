<?php
include "koneksi.php";
$error = '';
if(isset($_POST['log'])){

    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];
      
        // ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT username FROM login WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
      
        // cek cookie dan username
        if ($key === hash('sha256', $row['username'])) {
          $_SESSION['login'] = true;
        }
      }
      
     $user=$_POST['username'];
     $pass=md5($_POST['password']);

     if(!empty(trim($user)) && !empty(trim($pass))){

     $query = "SELECT * from login where username= '$user' and password='$pass'";
     $res=mysqli_query($conn, $query);
     $data=mysqli_fetch_array($res);

     if ($data != 0) {
     $nm=$data['nama_lengkap'];
     $name=$data['username'];
     $word=$data['password'];
     $type=$data['type_user'];
          if($user==$name && $pass==$word){
            $_SESSION["login"] = true;
            $id = $row["id"];
               if($type=="admin"){
                    session_start();
                    $_SESSION['nama_lengkap']=$nm;
                    $_SESSION['username']=$name;
                    $_SESSION['type_user']=$type;
                    header("Location: admin/index.php");;
               } else if($type=="editor"){
                    session_start();
                    $_SESSION['nama_lengkap']=$nm;
                    $_SESSION['username']=$name;
                    $_SESSION['type_user']=$type;
                    echo '<script>window.location.assign("index.php?id_user=")</script>';
               } else{
                    session_start();
                    $_SESSION['nama_lengkap']=$nm;
                    $_SESSION['username']=$name;
                    $_SESSION['type_user']=$type;
                    header("Location: index.php?id=$id");;
               }
          }
     //jika gagal maka akan menampilkan pesan error
     } else {
          $error =  'Login Gagal !!';
      }

     }else {
          $error =  'Data tidak boleh kosong !!';
      }   
}?>

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
          <h5 class="mt-3">Informasi Login</h5>
          <label for="exampleInputUsername" class="form-label mt-3">Username</label>
          <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp" name="username" />

          <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label mt-3">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" />
          </div>
          <a href="index.php"><button type="submit" class="btn btn-danger" name="">Batal</button></a>
          <button type="submit" class="btn btn-success2" name="log">Login</button>
          <div class="mt-3">Belum punya akun? <a href="register.php" class="text-success">Daftar</a>.</div>
        </div>
      </form>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://use.fontawesome.com/0cf54b252c.js"></script>
  </body>
</html>

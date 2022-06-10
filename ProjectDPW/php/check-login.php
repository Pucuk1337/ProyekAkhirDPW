<?php  
session_start();
include "../functions.php";

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['level'])) {

	function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$level = test_input($_POST['level']);

	if (empty($username)) {
		header("Location: ../login.php?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: ../login.php?error=Password is Required");
	}else {

		// Hashing the password
		$password = md5($password);
        
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] === $password && $row['level'] == $level) {
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['level'] = $row['level'];
        		$_SESSION['username'] = $row['username'];

						

        		header("Location: ../index.php");

        	}else {
        		header("Location: ../login.php?error=Incorect User name or password");
        	}
        }else {
        	header("Location: ../login.php?error=Incorect User name or password");
        }

	}
	
}else {
	header("Location: ../login.php");
}
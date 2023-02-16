<?php
session_start();  
require 'db/connect.php';
// var_dump($_POST);

if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query = "SELECT * from thanhvien where email='$email' and password='$password'";
    $r = mysqli_query($connect, $query);
    $result = mysqli_fetch_assoc($r);
  if ($result > 0 ) {
  
      $_SESSION['email'] = $email;
      $_SESSION['fullname'] = $fullName;
      $_SESSION['gender'] = $gender;
             $query = "SELECT * from thanhvien where email='$email' ";
    $getInforUser = mysqli_query ($connect, $query);
    $result = mysqli_fetch_assoc($getInforUser);
    $_SESSION['is_admin'] = $result["is_admin"];
        header("Location: profile.php");
  } else {
     header("Location: showFormLogin.php");
        echo "Email and password is not correct";
  }
}

?>
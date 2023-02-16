<?php
session_start();
require 'db/connect.php';

if(isset($_POST['register'])) {
 
    $fullName = $_POST['fullname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST["gender"];

    $folder_path = "uploads/";
    $file_path = $folder_path.$_FILES["avatar"]["name"];
    $avatar = $file_path;
    $flag_ok = true;
    $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    $ex_file_type = array('jpg', 'png');
    if(file_exists($file_path)) {
     $flag_ok = false;
    echo "file da ton tai";
  }
  if(in_array($file_type , $ex_file_type) ) {
    $flag_ok = true;
  }

  if($_FILES["avatar"]["size"] > 52428800) {
    $flag_ok = false;
  }

    $query = "SELECT * from thanhvien where email='$email'";
    $r = mysqli_query($connect, $query);
    $result = mysqli_fetch_assoc($r);

    
    if(!empty($email) && !empty($password) && $flag_ok === true) {
 
      if($result === null) {
        $sql = "INSERT INTO `thanhvien` (`fullname`,`email`, `password`, `gender`, `avatar`) 
        VALUE ('$fullName','$email', '$password', '$gender', '$avatar')";
      
          if($connect -> query($sql) === TRUE) {
          move_uploaded_file($_FILES["avatar"]["tmp_name"], $file_path);
          $_SESSION['email'] = $email;
          $_SESSION['avatar'] = $avatar;
          $query = "SELECT * from thanhvien where email='$email' ";
          $getInforUser = mysqli_query ($connect, $query);
          $result = mysqli_fetch_assoc($getInforUser);
          $_SESSION['is_admin'] = $result["is_admin"];
      
          header("Location: profile.php");
          } else {
              echo "Insert failed";
              die();
            }
      } else {
      $_SESSION['Email err'] = $email;
        header("Location: index.php");
        
    }
  }
}
?>
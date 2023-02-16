<?php
session_start();
require 'db/connect.php';
if(isset($_POST['edit'])) {
    $email = $_SESSION['email'];
   
    $fullName = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST["gender"];

    
    if($connect -> query($sql)) {
        header('Location: managerUser.php');
        
    }
}
?>
<?php
session_start();
require 'db/connect.php';
$id = $_GET['sid'];


    
    $sql = "DELETE FROM thanhvien WHERE id = '$id'";
    if($connect -> query($sql)) {
        echo "Xóa thành công";
        // header("Location: index.php");
    } else {
        echo "xoa that bai";
    }

?>
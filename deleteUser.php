<?php
require 'db/connect.php';
require 'db/connect.php';
$id = $_GET['sid'];

$sql = "DELETE FROM thanhvien WHERE id = $id";
    if($connect -> query($sql)) {
        
        header("Location: managerUser.php");
    } else {
        echo "xoa that bai";
    }
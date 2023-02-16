<?php
$host = 'localhost';
$username = "root";
$password = "";

$dbname = 'form';


$connect = new mysqli($host, $username,  $password, $dbname);
// if($connect -> connect_errno){
//     die('ket noi khong thanh cong');
// }
//  else {
//     echo 'ket noi thanh cong ';
// }
 <?php 
 require 'db/connect.php';
if(isset($_POST["update"])) {
    $id = $_POST['id'];
    $fullName = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST["gender"];
    $sql = "UPDATE `thanhvien` SET fullname = '$fullName' ,  email = '$email' , gender = '$gender' WHERE id = '$id' ";
    
    if($connect -> query($sql)) {
        header('Location: managerUser.php');
    }
}?>
<?php
session_start();
 
require 'db/connect.php';
// die;
if(!isset($_SESSION['email'])) {
    header("Location: index.php");
}
    $email = $_SESSION['email'];
    // $avatar = $_SESSION['avatar'];
    $query = "SELECT * from thanhvien where email='$email' ";
    $getInforUser = mysqli_query ($connect, $query);
    $result = mysqli_fetch_assoc($getInforUser);
    $fullName = $result["fullname"];
     $email = $result['email'];
    $gender = $result['gender'];
    $avatar = $result["avatar"];
    $id = $result["id"];

    
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div style="width: 800px; margin:auto; margin-top: 40px">
        <form method="post" action="edit.php">
            <div class="row">
                <div class="col-sm-3">
                    <!--left col-->
                    <div class="text-center">
                        <img src="<?php echo 'http://localhost/form/' .$avatar; ?>"
                            class="avatar img-circle img-thumbnail" alt="avatar">
                        <td> Full name:<input value="<?= $fullName?>" name="fullname" /> </td>
                        <td> Email: <input value="<?= $email?>" name="email" /> </td>
                        <td>Gender: <input value="<?= $gender?>" name="gender" /> </td>

                    </div>
                    <div><input type="submit" value="Edit" name="edit"></input></div>
                </div>
            </div>
        </form>

        <h5> Delete your account </h5>
        <a href="delete.php?sid=<?php echo $id;?>" class=" btn btn-danger"> Delete</a>



        <div><a href="managerUser.php"> Manager user</a></div>
        <a href="/form/logout.php" class=" btn btn-primary">Logout</a>
    </div>
</body>
<?php
require 'db/connect.php';
$results_per_page = 2; // number of results per page
$sql = "SELECT * FROM thanhvien"; // your query to fetch data



$result = mysqli_query($connect, $sql); // execute the query

$number_of_results = mysqli_num_rows($result); // number of results returned by the query
$number_of_pages = ceil($number_of_results/$results_per_page); // number of pages
$result = mysqli_query($connect, $sql); // execute the query

if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

$this_page_first_result = ($page-1)*$results_per_page; // first result of this page


$sql = "SELECT * FROM thanhvien LIMIT " . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($connect, $sql);




?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>

<body>
    <table class="table">
        <thead>

            <th scope="col">ID</th>
            <th scope="col">fullName</th>
            <th scope="col">Email</th>
            <th scope="col">Gender</th>
            <th scope="col">Action</th>

        </thead>
        <tbody>
            <?php 
//           while($row = mysqli_fetch_array($result)) {
 
//   // display results here
// }
          ?>
            <?php while ($row = mysqli_fetch_array($result)) { ?>
            echo 111;
            <tr>
                <td><?= $row["id"]?></td>
                <td><?= $row["fullname"]?></td>
                <td><?= $row["email"]?></td>>
                <td><?= $row["gender"]?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script>
    $(document).ready(function() {
        $('.btn-delete').click(function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            <?php 
            $id = 
            setcookie("id", $email, time() + 24*60*60, "/"); ?>
            location.href = 'delete.php'
        })
    })
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>
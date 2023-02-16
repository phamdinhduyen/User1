<?php 
// $phone  = '0961598337';
// $pattern = '/^0[0-9]{9}$/';
// $check = preg_match($pattern, $phone, $matches);
// if(!empty($check)){
//     echo ' this is phone number';
//     var_dump($matches);
// } else {
//     echo ' this is not is phone number ';
// }


// $email = 'phamdinhduyen@gmail.com';
// $pattern = '/.@gmail.com$/';
// $check = preg_match($pattern, $email, $matches);
// var_dump($check);

// string length min, max , = 
// check length = 5
$string = 'phsaaa';
$pattern = '/[a-z]{3,5}/';
$check = preg_match($pattern, $string );
var_dump($check);
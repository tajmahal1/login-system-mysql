<?php 

$server = "localhost";
$user = "id18649999_login_register_pure_coding1";
$pass = "Xonskixonski12#";
$database = "id18649999_login_register_pure_coding";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('კავშირის შეცდომა.')</script>");
}

?>
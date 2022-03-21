<?php 

$server = "localhost";
$user = "";
$pass = "";
$database = "";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('კავშირის შეცდომა.')</script>");
}

?>

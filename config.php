<?php
$server = "localhost";
$username = "root";
$pass = "";
$database = "user_record";

$conn = mysqli_connect($server, $username, $pass, $database);

if ($conn) {
} else {

    die("<script>alert('connection failed')</script>");
}

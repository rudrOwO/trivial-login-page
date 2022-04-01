<?php
include 'config.php';

$username = json_encode($_POST["uname"]);
$email = "test";
$password =  json_encode($_POST["passwd"]);

echo $username;

$query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
$result = mysqli_query($conn, $query);


if ($result) {
} else {
    echo "<script>console.log('suffer')</script>";
}

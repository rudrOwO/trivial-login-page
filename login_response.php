<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>

<body>
    <?php
    include 'config.php';

    $username = $_POST["uname"];
    $email = "test";
    $password =  $_POST["passwd"];

    echo $username;
    echo $password;

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($conn, $query);


    if ($result) {
    } else {
        echo "<script>console.log('suffer')</script>";
    }
    ?>
</body>

</html>
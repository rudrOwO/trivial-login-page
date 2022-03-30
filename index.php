<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <?php 
        $var = 5;

        if ($var == 5) {
            echo "Hello World ?<br/>";
        }
        
        foreach ($_GET as $key => $val) {
            echo "$key is $val <br/>";
        }
    ?>
</body>
</html>

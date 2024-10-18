<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies and Sessions</title>
    <style>
        body{
            width: 100vw;
            height: 100vh;
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <?php
    $cookie_name = "hello";
    $cookie_value = "world";
    setcookie($cookie_name,$cookie_value,time()+86400);
    echo $_COOKIE[$cookie_name];
    ?>
    <h1>Cookies and Sessions</h1>

</body>
</html>
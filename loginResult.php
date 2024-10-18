<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "RIST";

        $conn = new mysqli($server, $username, $password, $dbname);
        if($conn->connect_error)
        {
            die("Connection Failed");
        }

        if($_SERVER["REQUEST_METHOD"]=="GET")
        {
            $name = $_GET["name"];
            $email = $_GET["email"];
            $phone = $_GET["phone"];
        }


        $sql = "insert into login(`name`,`phone`, `email`) values ('$name','$phone','$email')";


        if(mysqli_query($conn, $sql))
        {
            echo "Data Added Succesfully";
        }
        else
        {
            echo "Data can't be added";
        }

        $conn->close();

        ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn DataBase Connection With SQL</title>
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

    $sql = "SELECT * FROM student";

    $result = $conn->query($sql);

    if($result->num_rows > 0)
    {
        while($rows = $result->fetch_assoc())
        {
            echo "ID: ".$rows["Id"]. "<br>";
            echo "Name: ".$rows["Name"]. "<br>";
            echo "Phone: ".$rows["Phone"]. "<br>";
            echo "Address: ".$rows["Address"]. "<br>";
            echo "<br>";
        }
    }
    else
    {
        echo "No data Found";
    }

    $conn->close();

    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border : 1px solid black;
        }
        tr{
            border : 1px solid black;
        }
        td{
            border : 1px solid black;
        }
        th{
            border : 1px solid black;
        }
    </style>
</head>

<body>

    <?php
    $id = $_POST["id"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];


    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "RIST";

    $conn = new mysqli($server, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection Failed");
    }

    $sql = "INSERT INTO student(`Id`,`Name`,`Phone`,`Address`) VALUES ($id, $name, $phone, $address)";

    $result = $conn->query($sql);

    $sql = "SELECT * FROM student";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $rows["Id"] . "</td>";
            echo "<td>" . $rows["Name"] . "</td>";
            echo "<td>" . $rows["Phone"] . "</td>";
            echo "<td>" . $rows["Address"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "No data Found";
    }

    $conn->close();

    ?>


</body>

</html>
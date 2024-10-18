<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            
        }
        table{
            width: 35%;
            border : 1px solid black;
            border-collapse: collapse;
        }
        tr{
            border : 1px solid black;
        }
        td{
            border : 1px solid black;
            color : white;
        }
        th{
            border : 1px solid black;
        }
        td:hover{
            color : black ;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
        </tr>
        
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
                echo "<tr>";
                echo "<td>".$rows["Id"]."</td>";
                echo "<td>".$rows["Name"]."</td>";
                echo "<td>".$rows["Phone"]."</td>";
                echo "<td>".$rows["Address"]."</td>";
                echo "</tr>";
            }
        }
        else
        {
            echo "No data Found";
        }

        $conn->close();

        ?>
        

    </table>
</body>
</html>
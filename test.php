<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Sl No.</th>
            <th>Country</th>
            <th>Famous</th>
        </tr>
        <?php
        $country = ["Spain", "India"];
        $fam = ["Football", "Cricket"];

        for($i = 0 ; $i < 2 ; $i=$i+1)
        {
            $j = $i+1;
            echo "<tr>";
            echo "<th>$j</th>";
            echo "<th>$country[$i]</th>";
            echo "<th>$fam[$i]</th>";
            echo "</tr>";
        }

        ?>

    </table>
</body>
</html>
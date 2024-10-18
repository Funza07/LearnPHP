<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <style>

        *{
            box-sizing: border-box;
            margin : 0;
            padding : 0;
        }
        form{
            width: 400px;
            height: 200px;
            background-color: dodgerblue;
            padding : 10px;
            margin: auto;
            margin-top: 50px;
        }
        h1{
            text-align: center;
            margin-top: 10px;
        }
        
        input{
            width: 100%;
            padding: 4px;
        }
    </style>



</head>
<body>
    <h1>My form</h1>
    <form action="loginResult.php" method="GET">
        <input type="text" name="name" placeholder="Enter Name"><br><br>
        <input type="email" name="email" placeholder="Enter Email"><br><br>
        <input type="number" name="phone" placeholder="Enter Phone Number"><br><br>
        <input type="submit" >
    </form>

    <?php
    ?>


</body>
</html>
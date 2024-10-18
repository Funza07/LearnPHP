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
            padding: 0;
            margin: 0;
        }
         body{
            width: 100vw;
            height: 100vh;
            background-image: url(https://images.hdqwalls.com/download/anime-scenery-field-4k-9j-1920x1080.jpg);
            text-align: center;
        }
        form{
            width: 300px;
            height: 250px;
            background-color: rgba(255,255,255,.4);
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0,0,0,.4);
            margin: auto;
            margin-top: 50px;
            padding: 20px;
        }
        input[type="email"],input[type="password"]{
            width: 100%;
            padding : 10px;
        }
        img{
            width: 100px;
            height: 100px;
            border-radius: 50%;
            position: absolute;
            transform: translateX(-50%);
            top: 0;
            left 45%;
        }
        button{
            width: 200px;
            padding: 10px;
            border: none;
            background-color: rgba(255,255,255,.4);
            border-radius: 0px 0px 20px 20px;
            box-shadow: 0px 0px 10px rgba(0,0,0,.4);
        }
    </style>
</head>
<body>
    <h1>Cookies and Sessions</h1>
    <img src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_640.png" alt="">
    <form action="">
        <input type="email"><br><br>
        <input type="password"><br><br>
        <div id="link"></div>
        <div>
            <input type="checkbox" name="" id="">
            <label for="">remember me</label>
        </div>
        
        <a href="">forgot password</a>
    </form>
    <button>Login</button>
</body>
</html>
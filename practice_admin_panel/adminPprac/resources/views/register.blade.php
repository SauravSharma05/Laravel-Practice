<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        a{
            color: black;
            font-family: sans-serif;
        }
        .box{
            width: 50%;
            border: 2px solid black;
            border-radius: 20px;
            padding: 20px;
            margin: 80px auto;
        }
        </style>
</head>
<body>

    <a href="home">Back to HOME</a> <br> <hr>
<div class="box">

    <form action="" method="post">
        @csrf
            <input type="text" name="name" id="" placeholder="enter your name"> <br>
            <input type="email" name="email" id="" placeholder="email@xyz.com"> <br>
            <input type="password" name="password" id="" placeholder="enter your password"> <br>
            <br> <hr>
            <button  name="register" type="submit">Register</button>
        </form>
    </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        a{
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
    <div class="box">

        <ul>

            @guest
            <li class="list-group-item"><a href="home">HOME PAGE</a></li>
            <li class="list-group-item"><a href="register">REGISTER </a></li>
            <li class="list-group-item"><a href="login">LOGIN </a></li>

            @else
            <li class="list-group-item"><a href="logout">LOGOUT  </a></li>
            <li class="list-group-item"><a href="reg_mortgage">Mortgage Register : for Client side</a></li>
            <li class="list-group-item"><a href="saledeed_reg">Sale Deed : for client side </a></li>
            @endguest
        </ul>

    </div>

</body>
</html>

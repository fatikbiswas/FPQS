
<?php 
include ("nav.php"); 
?><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            height: px;
            margin: 0;
            padding: 0;
            font-weight: Gothic;
            background: url(wheat.jpg)no-repeat;
            background-size: cover;
            background-position: center;
        }
        .container{
            height: 75vh;
            width: 29%;
            background: rgba(0, 0, 0, .6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 0 5px;
        }
        .img{
            height: 70px;
            width: 70px;
            background: url(my.jpg)no-repeat;
            background-size: cover;
            background-position: center;
            border-radius: 50px;
            position: absolute;
            top: 0%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .container h1{
            color: cornsilk;
            margin-top: 50px;
        }
        .container p{
            color: darkkhaki;
            margin-top: 60px;
            font-size: large;

        }
    </style>
</head>
<body>
    <div class="container">
<center>
    <h1><u>About Us</u></h1>
    <div class="img">

    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit iusto aliquid fugiat dolorem, esse aspernatur cupiditate ut ipsam repellendus minus nisi nesciunt nostrum hic quaerat sint voluptatum ipsum, consequatur nemo!</p>
    <button class="btn">Read more</button>
</center>
    </div>
</body>
</html>
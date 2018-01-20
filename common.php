<?php session_start();
include("mysql_connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>瑞奇教授的小天地</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: gray;
            padding: 25px;
        }
    </style>
</head>
<body background="bg/bg02.jpg">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://csie.asia.edu.tw/"><img src="http://csie.asia.edu.tw/images/logo/en.png" width="110"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首頁</a></li>
                <li><a href="introduce.php">簡歷</a></li>
                <li><a href="academic.php">學術</a></li>
                <li><a href="artist.php">著作</a></li>
                <li class="active"><a href="common.php">常用連結</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['id'])){
                    echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"> Logout</span></a></li>';
                }else{
                    echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid bg-3 text-center">
    <a href="http://csie.asia.edu.tw/"><img src="bg/bg03.jpg" alt="" style="margin-top: 270px; width: 550px"></a>
    <br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<footer class="container-fluid text-center">
    <p>E-mail：rikki@asia.edu.tw</p>
</footer>

</body>
</html>

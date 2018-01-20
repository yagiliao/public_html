    <!DOCTYPE html>
    <html>
    <head>
        <meta http-equiv="Connect-Type" content="text/html" ;charset="utf-8"/>
    </head>
    <body>
    <?php

    $link = mysqli_connect('localhost','105021039','#m7tHlebm','105021039');
    if (!$link) {
        die("無法連線資料庫");
    }
    mysqli_set_charset($link,' SET NAMES utf8');

    ?>
    </body>
    </html>
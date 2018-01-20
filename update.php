<?php session_start();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 上午 02:38
 */
include ("mysql_connect.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
</head>
<body>
    <h1 class="form-signin-heading text-muted">修改資料</h1>
    <?php
    $sql = "SELECT * FROM introduce";
    $result = $link->query($sql);
    while ($row = mysqli_fetch_row($result)) {
    //                echo "$row[1]";
        echo "<form  method=\"post\" action=\"update_finish.php\">";
        echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
        echo "<input type='text' name='info' value='$row[1]' size='50px' />";
        echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
        echo "</form>";
    }
    ?>
</body>
</html>

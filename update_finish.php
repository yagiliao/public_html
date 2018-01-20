<?php session_start();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 上午 02:38
 */
include ("mysql_connect.php");

$id = $_POST['id'];
$info = $_POST['info'];

$sql = "update introduce set info = '$info' where id = '$id'";
if($result = $link->query($sql))
{
    echo '<script >alert("修改成功!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=introduce.php>';
}
else
{
    echo '<script >alert("修改失敗!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=update.php>';
}
?>
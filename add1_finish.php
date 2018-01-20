<?php session_start();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 上午 02:13
 */
include ("mysql_connect.php");
$info = $_POST['info'];

$sql = "insert into artist (info) values ('$info')";
if(mysqli_query($link,$sql)){
    echo "新增成功";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=artist.php>';
}else{
    echo "新增失敗!";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=add1.php>';

}
?>


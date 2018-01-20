<?php session_start();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 上午 02:13
 */
include ("mysql_connect.php");
$info = $_POST['info'];

$sql = "insert into introduce (info) values ('$info')";
if(mysqli_query($link,$sql)){
    echo "新增成功";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=introduce.php>';
}else{
    echo "新增失敗!";
    echo '<meta http-equiv=REFRESH CONTENT=1;url=add.php>';

}
?>


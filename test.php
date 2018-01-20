<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 11:18
 */
$n=$_POST['n'];
$m=$_POST['m'];
?>
<body>
<table border="1">
    <?php
    for($i=1; $i<=$n; $i++){
        echo"<tr>";
        for($j=1; $j<=$m; $j++){
        echo "<td align='center'><span style='font-size: 2em;' >" . $i*$j ."</span></td>";
    }
        echo "<br/>";
    }
    ?>
</table>
</body>

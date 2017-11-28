<?php
include 'confige.php';
$username = $_POST['username'];
$mima = $_POST['mima'];
$sql = "insert into host(username,mima) values('{$username}','{$mima}')";
$mst=$pdo->prepare($sql);
if($mst->execute()){
    echo "<script>location='index.php'</script>";
}
/**
 * Created by PhpStorm.
 * User: 小宋
 * Date: 2017/11/27
 * Time: 14:01
 */
?>
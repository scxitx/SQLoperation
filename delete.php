<?php
include 'confige.php';
$id=$_GET['id'];

$sql="delete from host where id={$id}";

$smt=$pdo->prepare($sql);
if($smt->execute()){
    echo "<script>location='index.php'</script>";
}
?>
/**
 * Created by PhpStorm.
 * User: 小宋
 * Date: 2017/11/27
 * Time: 12:55
 */
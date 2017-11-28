<?php
include 'confige.php';
$id=$_GET['id'];
$username = $_POST['username'];
$mima = $_POST['mima'];
$sql = "replace into host values('{$id}','{$username}','{$mima}')";
$mst=$pdo->prepare($sql);
if($mst->execute()){
    echo "<script>location='index.php'</script>";
};
?>


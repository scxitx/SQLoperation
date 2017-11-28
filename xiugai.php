<?php
include 'confige.php';
$id=$_GET['id'];
$sql="select * from host where id={$id}";
$mst=$pdo->prepare($sql);
if($mst->execute()){
    $shuzu=$mst->fetch();
}else{
    echo '删除失败';
}

/**
 * Created by PhpStorm.
 * User: 小宋
 * Date: 2017/11/27
 * Time: 13:13
 */
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <script src="bs/js/jquery-3.1.1.min.js"></script>
    <style>
        * {
            font-family: 微软雅黑;
        }
    </style>
</head>
<body>
<div class="container">
    <h3 class="page-header">数据添加</h3>
    <h1 class="page-header">
        <a href="add.php" class="btn btn-primary">添加用户</a>
        <a href="index.php" class="btn btn-danger">查询用户</a>
    </h1>
    <form class="form" action="xiugai1.php?id=<?php echo $shuzu[id]?>" method="post">
        <div class="form-group has-feedback">
            <label for="">用户名：</label>
            <input type=text class="form-control" name="username" value="<?php echo $shuzu[username]?>">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <label for="">密码：</label>
            <input type=password class="form-control" name="mima" value="<?php echo $shuzu[mima]?>">
            <span class="glyphicon glyphicon-info-sign form-control-feedback"></span>
        </div>
        <p class="form-group">
            <input type="submit" class="btn">
            <input type="reset" class="btn ">
        </p>
    </form>
</div>
</body>
</html>


<?php
include 'confige.php';
$length=5;                          //页数的长度
$page=$_GET['p']?$_GET['p']:1;      //获取页数
$offset=($page-1)*$length;          //计算每一页从数据库中取出的值
$sqlTot="select count(*) from host";//查询数据的行数
$smtTot=$pdo->prepare($sqlTot);
$smtTot->execute();
$tot=$smtTot->fetchColumn();        //获取行数
$pages=ceil($tot/$length);    //进一取整
$right=$page-1;
$next=$page+1;
if($ringht<=1){
    $right=1;
}
if($next>=$pages){
    $next=$pages;
}
$sql = "select * from host limit {$offset},{$length};";
$smt = $pdo->prepare($sql);
$smt->execute();
$rows = $smt->fetchAll();


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
    <h1 class="page-header">用户模块开发</h1>
    <h1 class="page-header">
        <a href="add.php" class="btn btn-primary">添加用户</a>
        <a href="" class="btn btn-danger">查询用户</a>
    </h1>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>编号</th>
            <th>用户名</th>
            <th>密码</th>
            <th>删除</th>
            <th>修改</th>
        </tr>
        <?php
        foreach ($rows as $row){
            echo "<tr>";
            echo "<th>{$row['id']}</th>";
            echo "<th>{$row['username']}</th>";
            echo "<th>{$row['mima']}</th>";
            echo "<th><a href='delete.php?id={$row['id']}' class='text-info del'>删除</a></th>";
            echo "<th><a href='xiugai.php?id={$row['id']}' class='text-danger'>修改</a></th>";
            echo "</tr>";
        }
        ?>
    </table>
    <nav>
        <ul class="pager">
            <li class="previous"><a href="index.php?p=<?php echo $right?>" class="<?php echo $a?>">上一页</a></li>
            <li class="next"><a href="index.php?p=<?php echo $next?>">下一页</a></li>
        </ul>
    </nav>
</div>
</body>
<script>
    $('.del').click(function () {
        r=confirm('确定删除');
        if(!r){
            return false;
        }
    });
</script>
</html>

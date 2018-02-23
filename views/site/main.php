<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "yii2basic";

$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_errno) {
    die("Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error);
}
$conn->query("SET NAMES utf8");

$sql = "SELECT * FROM `country`";

$res = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>信息系统后台</title>

    <!-- Bootstrap -->
    <link href="../static/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../static/css/bootstrap-theme.css" rel="stylesheet" media="screen">
    <link href="../static/css/dashboard.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../static/js/jquery-1.8.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../static/js/bootstrap.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">招飞信息管理后台</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">设置</a></li>
                <li><a href="#">系统信息维护</a></li>
                <li><a href="#">使用说明</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">信息总览 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">报告</a></li>
                <li><a href="#">数据管理</a></li>
                <li><a href="./exportxlsx.php">导出</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h2 class="sub-header">招飞信息总览</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>编号</th>
                        <th>姓名</th>
                        <th>性别</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = $res->fetch_assoc()) {
                        echo "
                        <tr>
                        <td>" . $row['code'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['population'] . "</td>
                        <td>";

                        echo "</td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>

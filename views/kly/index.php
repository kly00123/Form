<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "abc";

$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_errno) {
    die("Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error);
}
$conn->query("SET NAMES utf8");

$sql = "SELECT * FROM `kly`";

$res = $conn->query($sql);
?>
<h1>信息结构</h1>
<body>
<ul>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="row">
            <h2 class="sub-header">招飞信息总览</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>编号</th>
                        <th>姓名</th>
                        <th>性别</th>
  <?php
        while ($row = $res->fetch_assoc()){
                        echo "
                        <tr>
                        <td>" . $row['id'] . "</td>
                        <td>" . $row['name'] . "</td>
                        <td>" . $row['gender'] . "</td>
                        <td>";
  
                        echo "</td></tr>";
                    }
                    ?>
</ul>
                    </tbody>
                </table>
            </div>
        </div>     
    </div>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
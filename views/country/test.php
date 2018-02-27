<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
    <h1>Countries</h1>
    <table class="table table-striped">
        <tr>
            <th>编号</th>
            <th>姓名</th>
            <th>性别</th>
            <?php foreach ($countries as $country): ?>
        <tr>
            <td><?= $country->id ?></td>
            <td><?= Html::encode("{$country->name}") ?></td>
            <td><?= $country->location ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
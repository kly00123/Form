<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];

use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>klies</h1>
<ul>
<?php foreach ($countries as $kly): ?>
    <li>
        <?= Html::encode("{$kly->name} ({$kly->id})") ?>:
        <?= $kly->gender ?>
    <>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>
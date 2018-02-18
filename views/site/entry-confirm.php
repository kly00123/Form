<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($res->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($res->email) ?></li>
</ul>
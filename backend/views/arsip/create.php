<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Arsip */

$this->title = Yii::t('app', 'Create Arsip');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Arsip'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arsip-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

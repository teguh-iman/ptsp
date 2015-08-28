<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Lokasi */

$this->title = Yii::t('app', 'Create Lokasi');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lokasi'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lokasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

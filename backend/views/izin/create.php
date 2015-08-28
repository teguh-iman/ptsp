<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Izin */

$this->title = Yii::t('app', 'Create Izin');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Izin'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

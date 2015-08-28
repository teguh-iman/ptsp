<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Bidang */

$this->title = Yii::t('app', 'Create Bidang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bidang'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bidang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

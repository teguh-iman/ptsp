<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MekanismePelayanan */

$this->title = Yii::t('app', 'Create Mekanisme Pelayanan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mekanisme Pelayanan'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mekanisme-pelayanan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

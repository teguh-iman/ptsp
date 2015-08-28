<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Wewenang */

$this->title = Yii::t('app', 'Create Wewenang');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Wewenang'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wewenang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

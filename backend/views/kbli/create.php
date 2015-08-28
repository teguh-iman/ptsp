<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Kbli */

$this->title = Yii::t('app', 'Create Kbli');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kbli'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kbli-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

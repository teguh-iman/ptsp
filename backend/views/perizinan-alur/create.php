<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PerizinanAlur */

$this->title = Yii::t('app', 'Create Perizinan Alur');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Perizinan Alur'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perizinan-alur-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

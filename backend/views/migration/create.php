<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Migration */

$this->title = Yii::t('app', 'Create Migration');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Migration'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="migration-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

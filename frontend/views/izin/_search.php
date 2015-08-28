<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izin-search">

    <?php
    $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
                'layout' => 'inline',
    ]);
    ?>

    <div style="text-align: center">
        Search keyword <?= $form->field($model, 'nama') ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use backend\models\Bidang;

/* @var $this yii\web\View */
/* @var $model frontend\models\BidangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bidang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'layout'=>'inline',
    ]); ?>
    
    <?php echo $form->field($model, 'parent_id')->dropDownList(ArrayHelper::map(Bidang::find()->where('parent_id is null')->asArray()->all(), 'id', 'nama'), ['prompt'=>'[Pilih Bidang..]', 'id'=>'parent-id']); ?>

    <?= $form->field($model, 'nama', ['inputOptions' => [
        'placeholder' => $model->getAttributeLabel('nama'),
    ],]) ?>

    <?php echo $form->field($model, 'kode_ijin', ['inputOptions' => [
        'placeholder' => $model->getAttributeLabel('kode_ijin'),
    ]]) ?>

    <?php echo $form->field($model, 'type')->dropDownList(['SIUP'=>'SIUP','IMTA'=>'IMTA','TDP'=>'TDP','RPTKA'=>'RPTKA'], ['prompt'=>'[Pilih Tipe..]']); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary', ]) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

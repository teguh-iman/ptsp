<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Kbli */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kbli'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kbli-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Kbli').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        'kode',
        'nama',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
    
    <div class="row">
<?php
    $gridColumnIzinSiupKbli = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
        [
            'attribute' => 'izinSiup.id',
            'label' => Yii::t('app', 'Izin Siup'),
        ],
        [
            'attribute' => 'kbli.id',
            'label' => Yii::t('app', 'Kbli'),
        ],
    ];
    echo Gridview::widget([
        'dataProvider' => $providerIzinSiupKbli,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>  ' . Html::encode(Yii::t('app', 'Izin Siup Kbli').' '. $this->title) . ' </h3>',
        ],
        'columns' => $gridColumnIzinSiupKbli
    ]);
?>
    </div>
</div>
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Wewenang */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Wewenang'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wewenang-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Wewenang').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        'nama',
        'aktif',
        [
            'attribute' => 'wewenangs.id',
            'label' => Yii::t('app', 'Wewenang'),
        ],
        'kode',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
    
    <div class="row">
<?php
    $gridColumnWewenang = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
        'nama',
        'aktif',
        [
            'attribute' => 'wewenangs.id',
            'label' => Yii::t('app', 'Wewenang'),
        ],
        'kode',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerWewenang,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>  ' . Html::encode(Yii::t('app', 'Wewenang').' '. $this->title) . ' </h3>',
        ],
        'columns' => $gridColumnWewenang
    ]);
?>
    </div>
</div>
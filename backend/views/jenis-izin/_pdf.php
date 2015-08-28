<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\JenisIzin */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jenis Izin'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-izin-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Jenis Izin').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        [
            'attribute' => 'bidang.id',
            'label' => Yii::t('app', 'Bidang'),
        ],
        'nama',
        'action',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
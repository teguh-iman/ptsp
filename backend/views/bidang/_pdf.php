<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Bidang */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bidang'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bidang-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Bidang').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
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
    $gridColumnIzin = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
        'jenis',
        [
            'attribute' => 'bidang.id',
            'label' => Yii::t('app', 'Bidang'),
        ],
        'nama',
        'kode',
        'fno_surat',
        'aktif',
        'wewenang_id',
        'cek_lapangan',
        'cek_sprtrw',
        'cek_obyek',
        'cek_perusahaan',
        'durasi',
        'durasi_satuan',
        'latar_belakang:ntext',
        'persyaratan:ntext',
        'mekanisme:ntext',
        'pengaduan:ntext',
        'dasar_hukum:ntext',
        'definisi:ntext',
        'biaya',
        'brosur:ntext',
        'arsip_id',
        'type',
        'action',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerIzin,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>  ' . Html::encode(Yii::t('app', 'Izin').' '. $this->title) . ' </h3>',
        ],
        'columns' => $gridColumnIzin
    ]);
?>
    </div>
</div>
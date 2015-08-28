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
        [
            'attribute' => 'bidangs.id',
            'label' => Yii::t('app', 'Bidang'),
        ],
        'jenis',
        'nama',
        'fno_surat',
        'link',
        'aktif',
        'level_wewenang',
        'cek_lapangan',
        'cek_sprtrw',
        'cek_obyek',
        'cek_perusahaan',
        'biaya',
        'durasi',
        'durasi_satuan',
        'isi_latarbelakang:ntext',
        'isi_syarat:ntext',
        'isi_dasarhukum:ntext',
        'definisi:ntext',
        'mekanisme:ntext',
        'pengaduan:ntext',
        'brosur:ntext',
        [
            'attribute' => 'arsip.arsip',
            'label' => Yii::t('app', 'Arsip'),
        ],
        'kode_ijin',
        'type',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
     
    <div class="row">
<?php
    $gridColumnDokumenPendukung = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
        'modul',
        'isi:ntext',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerDokumenPendukung,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>  ' . Html::encode(Yii::t('app', 'Dokumen Pendukung').' '. $this->title) . ' </h3>',
        ],
        'columns' => $gridColumnDokumenPendukung
    ]);
?>
    </div>

    
    
</div>
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\PerizinanAlur */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Perizinan Alur'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perizinan-alur-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Perizinan Alur').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        [
            'attribute' => 'perizinan.id',
            'label' => Yii::t('app', 'Perizinan'),
        ],
        [
            'attribute' => 'dokumenIzin.id',
            'label' => Yii::t('app', 'Dokumen Izin'),
        ],
        [
            'attribute' => 'dokumenPendukung.id',
            'label' => Yii::t('app', 'Dokumen Pendukung'),
        ],
        [
            'attribute' => 'pelaksana0.id',
            'label' => Yii::t('app', 'Pelaksana'),
        ],
        'isi_dok_pendukung:ntext',
        'tanggal_proses',
        'pelaksana',
        'dok_input:ntext',
        'dok_proses:ntext',
        'dok_output:ntext',
        'nama_modul',
        'nama_berkas',
        'berkas',
        'berkas_seo',
        'status',
        'tanggal',
        'valid',
        'keterangan:ntext',
        'mulai',
        'selesai',
        'jarak',
        'mekanisme_cek',
        'aktif',
        'duration',
        'registrasi_action',
        'jarak_sebelum',
        'jarak_sekarang',
        'type',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
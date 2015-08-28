<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\PerizinanProses */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Perizinan Proses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perizinan-proses-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Perizinan Proses').' '. Html::encode($this->title) ?></h2>
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
            'attribute' => 'mekanismePelayanan.id',
            'label' => Yii::t('app', 'Mekanisme Pelayanan'),
        ],
        [
            'attribute' => 'pelaksana0.id',
            'label' => Yii::t('app', 'Pelaksana'),
        ],
        'urutan',
        'jumlah_tahap',
        'active',
        'tanggal_proses',
        'isi_dokumen:ntext',
        'pelaksana',
        'dok_input:ntext',
        'dok_proses:ntext',
        'dok_output:ntext',
        'nama_berkas',
        'berkas',
        'berkas_seo',
        'status',
        'keterangan:ntext',
        'tanggal',
        'valid',
        'mulai',
        'selesai',
        'jarak',
        'mekanisme_cek',
        'aktif',
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
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\RegistrasiProses */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Registrasi Proses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registrasi-proses-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Registrasi Proses').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        [
            'attribute' => 'registrasi.id',
            'label' => Yii::t('app', 'Registrasi'),
        ],
        [
            'attribute' => 'dokumenPendukung.id',
            'label' => Yii::t('app', 'Dokumen Pendukung'),
        ],
        [
            'attribute' => 'pelaksana0.id',
            'label' => Yii::t('app', 'Pelaksana'),
        ],
        [
            'attribute' => 'user.id',
            'label' => Yii::t('app', 'User'),
        ],
        'modul',
        'aktif',
        'tanggal_proses',
        'status',
        'dokumen:ntext',
        'approval',
        'pelaksana',
        'nama_berkas',
        'berkas',
        'keterangan:ntext',
        'type',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
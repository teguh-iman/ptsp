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
        <div class="col-sm-3" style="margin-top: 15px">
            <?=             
             Html::a('<i class="fa glyphicon glyphicon-hand-up"></i> ' . Yii::t('app', 'PDF'), 
                ['pdf', 'id' => $model['id']], 
                [
                    'class' => 'btn btn-danger',
                    'target' => '_blank',
                    'data-toggle' => 'tooltip',
                    'title' => Yii::t('app', 'Will open the generated PDF file in a new window')
                ]
            )?>                        
            <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ])
            ?>
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
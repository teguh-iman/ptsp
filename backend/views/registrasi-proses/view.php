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
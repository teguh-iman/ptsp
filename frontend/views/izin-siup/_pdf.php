<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinSiup */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Izin Siup'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-siup-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Izin Siup').' '. Html::encode($this->title) ?></h2>
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
        [
            'attribute' => 'user.id',
            'label' => Yii::t('app', 'User'),
        ],
        'ktp',
        'nama',
        'alamat:ntext',
        'tempat_lahir',
        'tanggal_lahir',
        'telepon',
        'fax',
        'passport',
        'kewarganegaraan',
        'jabatan_perusahaan',
        'npwp_perusahaan',
        'nama_perusahaan',
        'alamat_perusahaan:ntext',
        'telpon_perusahaan',
        'fax_perusahaan',
        'kelurahan_id',
        'status_perusahaan',
        'kode_pos',
        'bentuk_perusahaan',
        'akta_pendirian_no',
        'akta_pendirian_tanggal',
        'akta_pengesahan_no',
        'akta_pengesahan_tanggal',
        'no_sk',
        'no_daftar',
        'tanggal_pengesahan',
        'modal',
        'nilai_saham_pma',
        'saham_nasional',
        'saham_asing',
        'barang_jasa_dagangan',
        'tanggal_neraca',
        'aktiva_lancar_kas',
        'aktiva_lancar_bank',
        'aktiva_lancar_piutang',
        'aktiva_lancar_barang',
        'aktiva_lancar_pekerjaan',
        'aktiva_tetap_peralatan',
        'aktiva_tetap_investasi',
        'aktiva_lainnya',
        'pasiva_hutang_dagang',
        'pasiva_hutang_pajak',
        'pasiva_hutang_lainnya',
        'hutang_jangka_panjang',
        'kekayaan_bersih',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
    
    <div class="row">
<?php
    $gridColumnIzinSiupAkta = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
        [
            'attribute' => 'izinSiup.id',
            'label' => Yii::t('app', 'Izin Siup'),
        ],
        'nomor_akta',
        'tanggal_akta',
        'nomor_pengesahan',
        'tanggal_pengesahan',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerIzinSiupAkta,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>  ' . Html::encode(Yii::t('app', 'Izin Siup Akta').' '. $this->title) . ' </h3>',
        ],
        'columns' => $gridColumnIzinSiupAkta
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
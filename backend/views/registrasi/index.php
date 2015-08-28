<?php

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\RegistrasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Registrasi');
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="registrasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
//        [
//            'attribute' => 'registrasis.id',
//            'label' => Yii::t('app', 'Registrasi'),
//        ],
        [
            'attribute' => 'user.profile.name',
            'label' => Yii::t('app', 'User'),
        ],
        [
            'attribute' => 'bidang.nama',
            'label' => Yii::t('app', 'Bidang'),
        ],
//        'no_identitas',
        'urutan',
        'tanggal_permohonan',
//        'no_izin',
//        'berkas_noizin',
        'tanggal_izin',
        'tanggal_expired',
//        'status',
//        'aktif',
//        'registrasi_urutan',
//        'nomor_sp_rt_rw',
//        'tanggal_sp_rt_rw',
//        'peruntukan',
//        'nama_perusahaan',
//        'tanggal_cek_lapangan',
        'status_daftar',
//        'petugas_daftar',
        [
            'attribute' => 'lokasi.nama',
            'label' => Yii::t('app', 'Lokasi'),
        ],
//        'keterangan:ntext',
//        'qr_code',
//        'tanggal_pertemuan',
//        'tanggal_pengambilan',
//        'jam_pengambilan',
        [
            'class' => 'yii\grid\ActionColumn',
        ],
    ]; 
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumn,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>  ' . Html::encode($this->title) . ' </h3>',
        ],
        // set a label for default menu
        'export' => [
            'label' => 'Page',
            'fontAwesome' => true,
        ],
        // your toolbar can include the additional full export menu
        'toolbar' => [
            '{export}',
            ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $gridColumn,
                'target' => ExportMenu::TARGET_BLANK,
                'fontAwesome' => true,
                'dropdownOptions' => [
                    'label' => 'Full',
                    'class' => 'btn btn-default',
                    'itemsBefore' => [
                        '<li class="dropdown-header">Export All Data</li>',
                    ],
                ],
            ]) ,
        ],
    ]); ?>

</div>

<?php

use kartik\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\IzinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Izin');
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="izin-index">

    <?= $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    $gridColumn = [
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
        [
            'class' => 'yii\grid\ActionColumn',
        ],
    ];
    ?>
    <?=
    \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_item',
    ]);
    ?>

</div>

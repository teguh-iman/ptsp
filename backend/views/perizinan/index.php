<?php

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
use yii\bootstrap\Progress;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PerizinanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Perizinan');
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="perizinan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);   ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Perizinan'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Advance Search'), '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?= $this->render('_search', ['model' => $searchModel]); ?>
    </div>

    <?php
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
//        [
//            'attribute' => 'perizinans.id',
//            'label' => Yii::t('app', 'Perizinan'),
//        ],
        [
            'attribute' => 'pemohon.id',
            'label' => Yii::t('app', 'Pemohon'),
            'format' => 'html',
            'value' => function ($model, $key, $index, $widget) {
                return "<strong>{$model->pemohon->profile->name}</strong><br>NIK: {$model->pemohon->username}";
            },
        ],
//        'id_groupizin',
        [
            'attribute' => 'izin.id',
            'label' => Yii::t('app', 'Perihal'),
            'format' => 'html',
            'value' => function ($model, $key, $index, $widget) {
                return "{$model->izin->nama}<br>Bidang: {$model->izin->bidang->nama}<br><em>Tanggal: {$model->tanggal_mohon}</em>";
            },
        ],
        'no_urut',
        [
            'attribute' => 'current',
            //'class' => 'yii\bootstrap\Progress',
            'label' => Yii::t('app', 'Progress'),
            'format' => 'html',
            'value' => function ($model, $key, $index, $widget) {
                $p = $model->current / $model->jumlah_tahap * 100;
//                return $widget([
//                'percent' => $p,
//                'label' => $model->current . ' / ' . $model->jumlah_tahap,
//                ]);
                return Progress::widget([
                            'percent' => $p,
                            'label' => $model->current . ' / ' . $model->jumlah_tahap,
                ]);
            },
                ],
//        'tanggal_mohon',
//        'no_izin',
//        'berkas_noizin',
//        'tanggal_izin',
//        'tanggal_expired',
                'status',
//        'aktif',
//        'registrasi_urutan',
//        'nomor_sp_rt_rw',
//        'tanggal_sp_rt_rw',
//        'peruntukan',
//        'nama_perusahaan',
//        'tanggal_cek_lapangan',
//        'petugas_cek',
//        'status_daftar',
//        [
//            'attribute' => 'petugasDaftar.id',
//            'label' => Yii::t('app', 'User'),
//        ],
//        'lokasi_id',
//        'keterangan:ntext',
//        'qr_code',
//        'tanggal_pertemuan',
//        'pengambilan_tanggal',
//        'pengambilan_jam',
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template'=>'{view}'
                ],
            ];
            ?>
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
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
                    ]),
                ],
            ]);
            ?>

</div>

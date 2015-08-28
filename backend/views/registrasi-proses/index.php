<?php

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RegistrasiProsesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Registrasi Proses');
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="registrasi-proses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Registrasi Proses'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Advance Search'), '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?= $this->render('_search', ['model' => $searchModel]); ?>
    </div>

    <?php
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
        [
            'attribute' => 'registrasi.user.username',
            'label' => Yii::t('app', 'Pemohon'),
        ],
//        [
//            'attribute' => 'dokumenPendukung.id',
//            'label' => Yii::t('app', 'Dokumen Pendukung'),
//        ],
//        [
//            'attribute' => 'pelaksana0.id',
//            'label' => Yii::t('app', 'Pelaksana'),
//        ],
//        [
//            'attribute' => 'user.id',
//            'label' => Yii::t('app', 'User'),
//        ],
//        'modul',
//        'aktif',
//        'tanggal_proses',
        'status',
//        'dokumen:ntext',
        'approval',
        'pelaksana',
        'nama_berkas',
        'berkas',
        'keterangan:ntext',
        'type',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{check} | {process}',
            'buttons' => [
                'check' => function ($url, $model) {
                    $url = Url::toRoute(['/izin-siup/check', 'rid' => $model->registrasi->id]);
                    return Html::a('Cek', $url, [
                                'title' => Yii::t('yii', 'Cek Persyaratan'),
                    ]);
                },
                        'process' => function ($url, $model) {
                    $url = Url::toRoute(['process', 'id' => $model->id]);
                    return Html::a('Proses', $url, [
                                'title' => Yii::t('yii', 'Proses Permohonan'),
                    ]);
                },
                    ]],
            ];
            ?>
            <?=
            GridView::widget([
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
                    ]),
                ],
            ]);
            ?>

</div>

<?php

use yii\helpers\Html;
use yii\helpers\Url;
use kartik\export\ExportMenu;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BidangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Bidang');
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="bidang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_search', ['model' => $searchModel]); ?>

    <?php
    $client = Yii::$app->siteApi;
    //$result = $client->getPendudukInfo(['nik' => '3208123110820004','nokk' => '3175070102121008']);
    $result = $client->GetWeather(['CityName' => 'Jakarta', 'CountryName' => 'Indonesia']);
//    print_r($result);
    ?>

    <br>

    <?php
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
        'jenis',
        'kode_ijin',
//        [
//            'attribute' => 'bidangs.id',
//            'label' => Yii::t('app', 'Bidang'),
//        ],
        'nama',
        'type',
//        'fno_surat',
//        'link',
//        'aktif',
//        'level_wewenang',
//        'cek_lapangan',
//        'cek_sprtrw',
//        'cek_obyek',
//        'cek_perusahaan',
        'biaya',
        'durasi',
//        'durasi_satuan',
//        'isi_latarbelakang:ntext',
//        'isi_syarat:ntext',
//        'isi_dasarhukum:ntext',
//        'definisi:ntext',
        'mekanisme:ntext',
//        'pengaduan:ntext',
//        'brosur:ntext',
//        [
//            'attribute' => 'arsip.arsip',
//            'label' => Yii::t('app', 'Arsip'),
//        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} | {daftar}',
            'buttons' => [
                'view' => function ($url, $model) {
                    $url = Url::toRoute(['view', 'id' => $model->id]);
                    return Html::a('Lihat', $url, [
                                'title' => Yii::t('yii', 'Lihat'),
                    ]);
                },
                        'daftar' => function ($url, $model) {
                    $url = Url::toRoute(['izin-siup/create', 'bid' => $model->id]);
                    return Html::a('Daftar', $url, [
                                'title' => Yii::t('yii', 'Daftar'),
                    ]);
                }
                    ]
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

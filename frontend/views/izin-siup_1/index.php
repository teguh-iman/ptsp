<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var common\models\IzinSiupSearch $searchModel
 */

$this->title = Yii::t('app', 'Izin Siups');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-siup-index">
    <div class="page-header">
            <h1><?= Html::encode($this->title) ?></h1>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php /* echo Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Izin Siup',
]), ['create'], ['class' => 'btn btn-success'])*/  ?>
    </p>

    <?php Pjax::begin(); echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jenis_permohonan',
            'kategori_permohonan',
            'nik',
            'ktp',
//            'nama', 
//            'alamat:ntext', 
//            'tempat_lahir', 
//            ['attribute'=>'tanggal_lahir','format'=>['date',(isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y']], 
//            'telepon', 
//            'fax', 
//            'passport', 
//            'kewarganegaraan', 
//            'jabatan_perusahaan', 
//            'nama_perusahaan', 
//            'alamat_perusahaan:ntext', 
//            'telpon_perusahaan', 
//            'fax_perusahaan', 
//            'kelurahan_id', 
//            'status_perusahaan', 
//            'kode_pos', 
//            'bentuk_perusahaan', 
//            'akta_pendirian_no', 
//            ['attribute'=>'akta_pendirian_tanggal','format'=>['date',(isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y']], 
//            'no_sk', 
//            'no_daftar', 
//            ['attribute'=>'tanggal_pengesahan','format'=>['date',(isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y']], 
//            'modal', 
//            'nilai_saham_pma', 
//            'saham_asing', 
//            'barang_jasa_dagangan', 
//            ['attribute'=>'tanggal_neraca','format'=>['date',(isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y']], 
//            'aktiva_lancar_kas', 
//            'aktiva_lancar_bank', 
//            'aktiva_lancar_piutang', 
//            'aktiva_lancar_barang', 
//            'aktiva_lancar_pekerjaan', 
//            'aktiva_tetap_peralatan', 
//            'aktiva_tetap_investasi', 
//            'pasiva_hutang_dagang', 
//            'pasiva_hutang_pajak', 
//            'pasiva_hutang_lainnya', 
//            'hutang_jangka_panjang', 
//            'kekayaan_bersih', 

            [
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                'update' => function ($url, $model) {
                                    return Html::a('<span class="glyphicon glyphicon-pencil"></span>', Yii::$app->urlManager->createUrl(['izin-siup/view','id' => $model->id,'edit'=>'t']), [
                                                    'title' => Yii::t('yii', 'Edit'),
                                                  ]);}

                ],
            ],
        ],
        'responsive'=>true,
        'hover'=>true,
        'condensed'=>true,
        'floatHeader'=>true,




        'panel' => [
            'heading'=>'<h3 class="panel-title"><i class="glyphicon glyphicon-th-list"></i> '.Html::encode($this->title).' </h3>',
            'type'=>'info',
            'before'=>Html::a('<i class="glyphicon glyphicon-plus"></i> Add', ['create'], ['class' => 'btn btn-success']),                                                                                                                                                          'after'=>Html::a('<i class="glyphicon glyphicon-repeat"></i> Reset List', ['index'], ['class' => 'btn btn-info']),
            'showFooter'=>false
        ],
    ]); Pjax::end(); ?>

</div>

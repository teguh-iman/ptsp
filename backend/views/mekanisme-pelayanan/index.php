<?php

use yii\helpers\Html;
use kartik\export\ExportMenu;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\MekanismePelayananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Mekanisme Pelayanan');
$this->params['breadcrumbs'][] = $this->title;
$search = "$('.search-button').click(function(){
	$('.search-form').toggle(1000);
	return false;
});";
$this->registerJs($search);
?>
<div class="mekanisme-pelayanan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Mekanisme Pelayanan'), ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Advance Search'), '#', ['class' => 'btn btn-info search-button']) ?>
    </p>
    <div class="search-form" style="display:none">
        <?=  $this->render('_search', ['model' => $searchModel]); ?>
    </div>

    <?php 
    $gridColumn = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
        [
            'attribute' => 'izin.id',
            'label' => Yii::t('app', 'Izin'),
        ],
        'isi:ntext',
        'berkas',
        [
            'attribute' => 'pelaksana.id',
            'label' => Yii::t('app', 'Pelaksana'),
        ],
        [
            'attribute' => 'dokInput.id',
            'label' => Yii::t('app', 'Dokumen Izin'),
        ],
        [
            'attribute' => 'dokProses.id',
            'label' => Yii::t('app', 'Dokumen Izin'),
        ],
        [
            'attribute' => 'dokOutput.id',
            'label' => Yii::t('app', 'Dokumen Izin'),
        ],
        'durasi',
        'dur_sat',
        'dur_sat1',
        'dur_sat2',
        'dur_sat3',
        'durasi_satuan',
        'urutan',
        'dokpendukung_tipe',
        'aktif',
        'petugas_cek',
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

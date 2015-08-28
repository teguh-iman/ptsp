<?php

use yii\helpers\Html;
use kartik\detail\DetailView;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var common\models\IzinSiup $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Izin Siups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-siup-view">
    <div class="page-header">
        <h1><?= Html::encode($this->title) ?></h1>
    </div>


    <?= DetailView::widget([
            'model' => $model,
            'condensed'=>false,
            'hover'=>true,
            'mode'=>Yii::$app->request->get('edit')=='t' ? DetailView::MODE_EDIT : DetailView::MODE_VIEW,
            'panel'=>[
            'heading'=>$this->title,
            'type'=>DetailView::TYPE_INFO,
        ],
        'attributes' => [
            'id',
            'jenis_permohonan',
            'kategori_permohonan',
            'nik',
            'ktp',
            'nama',
            'alamat:ntext',
            'tempat_lahir',
            [
                'attribute'=>'tanggal_lahir',
                'format'=>['date',(isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y'],
                'type'=>DetailView::INPUT_WIDGET,
                'widgetOptions'=> [
                    'class'=>DateControl::classname(),
                    'type'=>DateControl::FORMAT_DATE
                ]
            ],
            'telepon',
            'fax',
            'passport',
            'kewarganegaraan',
            'jabatan_perusahaan',
            'nama_perusahaan',
            'alamat_perusahaan:ntext',
            'telpon_perusahaan',
            'fax_perusahaan',
            'kelurahan_id',
            'status_perusahaan',
            'kode_pos',
            'bentuk_perusahaan',
            'akta_pendirian_no',
            [
                'attribute'=>'akta_pendirian_tanggal',
                'format'=>['date',(isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y'],
                'type'=>DetailView::INPUT_WIDGET,
                'widgetOptions'=> [
                    'class'=>DateControl::classname(),
                    'type'=>DateControl::FORMAT_DATE
                ]
            ],
            'no_sk',
            'no_daftar',
            [
                'attribute'=>'tanggal_pengesahan',
                'format'=>['date',(isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y'],
                'type'=>DetailView::INPUT_WIDGET,
                'widgetOptions'=> [
                    'class'=>DateControl::classname(),
                    'type'=>DateControl::FORMAT_DATE
                ]
            ],
            'modal',
            'nilai_saham_pma',
            'saham_asing',
            'barang_jasa_dagangan',
            [
                'attribute'=>'tanggal_neraca',
                'format'=>['date',(isset(Yii::$app->modules['datecontrol']['displaySettings']['date'])) ? Yii::$app->modules['datecontrol']['displaySettings']['date'] : 'd-m-Y'],
                'type'=>DetailView::INPUT_WIDGET,
                'widgetOptions'=> [
                    'class'=>DateControl::classname(),
                    'type'=>DateControl::FORMAT_DATE
                ]
            ],
            'aktiva_lancar_kas',
            'aktiva_lancar_bank',
            'aktiva_lancar_piutang',
            'aktiva_lancar_barang',
            'aktiva_lancar_pekerjaan',
            'aktiva_tetap_peralatan',
            'aktiva_tetap_investasi',
            'pasiva_hutang_dagang',
            'pasiva_hutang_pajak',
            'pasiva_hutang_lainnya',
            'hutang_jangka_panjang',
            'kekayaan_bersih',
        ],
        'deleteOptions'=>[
        'url'=>['delete', 'id' => $model->id],
        'data'=>[
        'confirm'=>Yii::t('app', 'Are you sure you want to delete this item?'),
        'method'=>'post',
        ],
        ],
        'enableEditMode'=>true,
    ]) ?>

</div>

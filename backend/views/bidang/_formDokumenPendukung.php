<?php
use kartik\grid\GridView;
use kartik\builder\TabularForm;
use yii\data\ArrayDataProvider;
use yii\helpers\Html;
use yii\widgets\Pjax;

Pjax::begin();
$dataProvider = new ArrayDataProvider([
    'allModels' => $row,
]);
echo TabularForm::widget([
    'dataProvider' => $dataProvider,
    'formName' => 'DokumenPendukung',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions'=>['hidden'=>true]],
        'bidang_id' => [
            'label' => 'Bidang',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Bidang::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Bidang')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'dokumen_izin_id' => [
            'label' => 'Dokumen izin',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\DokumenIzin::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Dokumen izin')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'modul' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Persyaratan Izin' => 'Persyaratan Izin', 'Mekanisme Pelayanan' => 'Mekanisme Pelayanan', 'Dasarhukum Izin' => 'Dasarhukum Izin', 'Mekanisme Pengaduan' => 'Mekanisme Pengaduan', 'Definisi' => 'Definisi', 'Download brosur' => 'Download brosur', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Modul')],
                    ]
        ],
        'isi' => ['type' => TabularForm::INPUT_TEXTAREA],
        'berkas' => ['type' => TabularForm::INPUT_TEXT],
        'pelaksana' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Tim Admin' => 'Tim Admin', 'Tim TU' => 'Tim TU', 'Tim Teknis' => 'Tim Teknis', 'Kepala' => 'Kepala', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Pelaksana')],
                    ]
        ],
        'pelaksana_id' => ['type' => TabularForm::INPUT_TEXT],
        'durasi' => ['type' => TabularForm::INPUT_TEXT],
        'durasi_satuan' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Hari' => 'Hari', 'Jam' => 'Jam', 'Menit' => 'Menit', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Durasi Satuan')],
                    ]
        ],
        'urutan' => ['type' => TabularForm::INPUT_TEXT],
        'aktif' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Y' => 'Y', 'N' => 'N', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Aktif')],
                    ]
        ],
        'petugas_cek' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'N' => 'N', 'Y' => 'Y', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Petugas Cek')],
                    ]
        ],
        'del' => [
            'type' => TabularForm::INPUT_STATIC,
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('app', 'Delete'), 'onClick' => 'delRowDokumenPendukung(' . $key . '); return false;', 'id' => 'dokumen-pendukung-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> ' . Yii::t('app', 'Dokumen Pendukung') . '  </h3>',
            'type' => GridView::TYPE_INFO,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('app', 'Add Row'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowDokumenPendukung()']),
        ]
    ]
]);
Pjax::end();
?>
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
    'formName' => 'PerizinanAlur',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions'=>['hidden'=>true]],
        'perizinan_id' => [
            'label' => 'Perizinan',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Perizinan::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Perizinan')],
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
        'dokumen_pendukung_id' => [
            'label' => 'Dokumen pendukung',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\DokumenPendukung::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Dokumen pendukung')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'pelaksana_id' => [
            'label' => 'Pelaksana',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Pelaksana::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Pelaksana')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'isi_dok_pendukung' => ['type' => TabularForm::INPUT_TEXTAREA],
        'tanggal_proses' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DateTimePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Proses')],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'hh:ii:ss dd-M-yyyy'
            ]
        ]
],
        'pelaksana' => ['type' => TabularForm::INPUT_TEXT],
        'dok_input' => ['type' => TabularForm::INPUT_TEXTAREA],
        'dok_proses' => ['type' => TabularForm::INPUT_TEXTAREA],
        'dok_output' => ['type' => TabularForm::INPUT_TEXTAREA],
        'nama_modul' => ['type' => TabularForm::INPUT_TEXT],
        'nama_berkas' => ['type' => TabularForm::INPUT_TEXT],
        'berkas' => ['type' => TabularForm::INPUT_TEXT],
        'berkas_seo' => ['type' => TabularForm::INPUT_TEXT],
        'status' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Daftar' => 'Daftar', 'Proses' => 'Proses', 'Tolak' => 'Tolak', 'Revisi' => 'Revisi', 'Lanjut' => 'Lanjut', 'Selesai' => 'Selesai', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Status')],
                    ]
        ],
        'tanggal' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DateTimePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal')],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'hh:ii:ss dd-M-yyyy'
            ]
        ]
],
        'valid' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ '' => '', 'Y' => 'Y', 'N' => 'N', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Valid')],
                    ]
        ],
        'keterangan' => ['type' => TabularForm::INPUT_TEXTAREA],
        'mulai' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DateTimePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Mulai')],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'hh:ii:ss dd-M-yyyy'
            ]
        ]
],
        'selesai' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DateTimePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Selesai')],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'hh:ii:ss dd-M-yyyy'
            ]
        ]
],
        'jarak' => ['type' => TabularForm::INPUT_TEXT],
        'mekanisme_cek' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Y' => 'Y', 'N' => 'N', '' => '', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Mekanisme Cek')],
                    ]
        ],
        'aktif' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Y' => 'Y', 'N' => 'N', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Aktif')],
                    ]
        ],
        'duration' => ['type' => TabularForm::INPUT_TEXT],
        'registrasi_action' => ['type' => TabularForm::INPUT_TEXT],
        'jarak_sebelum' => ['type' => TabularForm::INPUT_TEXT],
        'jarak_sekarang' => ['type' => TabularForm::INPUT_TEXT],
        'type' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'berkas' => 'Berkas', 'sop' => 'Sop', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Type')],
                    ]
        ],
        'del' => [
            'type' => TabularForm::INPUT_STATIC,
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('app', 'Delete'), 'onClick' => 'delRowPerizinanAlur(' . $key . '); return false;', 'id' => 'perizinan-alur-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> ' . Yii::t('app', 'Perizinan Alur') . '  </h3>',
            'type' => GridView::TYPE_INFO,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('app', 'Add Row'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowPerizinanAlur()']),
        ]
    ]
]);
Pjax::end();
?>
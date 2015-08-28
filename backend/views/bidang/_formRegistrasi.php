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
    'formName' => 'Registrasi',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions'=>['hidden'=>true]],
        'parent_id' => [
            'label' => 'Registrasi',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Registrasi::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Registrasi')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'user_id' => [
            'label' => 'User',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose User')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
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
        'no_identitas' => ['type' => TabularForm::INPUT_TEXT],
        'urutan' => ['type' => TabularForm::INPUT_TEXT],
        'tanggal_permohonan' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DateTimePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Permohonan')],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'hh:ii:ss dd-M-yyyy'
            ]
        ]
],
        'no_izin' => ['type' => TabularForm::INPUT_TEXT],
        'berkas_noizin' => ['type' => TabularForm::INPUT_TEXT],
        'tanggal_izin' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DatePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Izin')],
            'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]
],
        'tanggal_expired' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DatePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Expired')],
            'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]
],
        'status' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Daftar' => 'Daftar', 'Proses' => 'Proses', 'Tolak' => 'Tolak', 'Revisi' => 'Revisi', 'Lanjut' => 'Lanjut', 'Selesai' => 'Selesai', 'Tolak Izin' => 'Tolak Izin', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Status')],
                    ]
        ],
        'aktif' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Y' => 'Y', 'N' => 'N', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Aktif')],
                    ]
        ],
        'registrasi_urutan' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Closed' => 'Closed', 'Open' => 'Open', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Registrasi Urutan')],
                    ]
        ],
        'nomor_sp_rt_rw' => ['type' => TabularForm::INPUT_TEXT],
        'tanggal_sp_rt_rw' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DatePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Sp Rt Rw')],
            'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]
],
        'peruntukan' => ['type' => TabularForm::INPUT_TEXT],
        'nama_perusahaan' => ['type' => TabularForm::INPUT_TEXT],
        'tanggal_cek_lapangan' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DatePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Cek Lapangan')],
            'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]
],
        'status_daftar' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Sendiri' => 'Sendiri', 'Petugas' => 'Petugas', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Status Daftar')],
                    ]
        ],
        'petugas_daftar' => ['type' => TabularForm::INPUT_TEXT],
        'lokasi_id' => [
            'label' => 'Lokasi',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Lokasi::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Lokasi')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'keterangan' => ['type' => TabularForm::INPUT_TEXTAREA],
        'qr_code' => ['type' => TabularForm::INPUT_TEXT],
        'tanggal_pertemuan' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DatePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Pertemuan')],
            'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]
],
        'tanggal_pengambilan' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DatePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Pengambilan')],
            'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]
],
        'jam_pengambilan' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\TimePicker::classname()
],
        'del' => [
            'type' => TabularForm::INPUT_STATIC,
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('app', 'Delete'), 'onClick' => 'delRowRegistrasi(' . $key . '); return false;', 'id' => 'registrasi-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> ' . Yii::t('app', 'Registrasi') . '  </h3>',
            'type' => GridView::TYPE_INFO,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('app', 'Add Row'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowRegistrasi()']),
        ]
    ]
]);
Pjax::end();
?>
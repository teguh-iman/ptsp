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
    'formName' => 'Perizinan',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions'=>['hidden'=>true]],
        'parent_id' => [
            'label' => 'Perizinan',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Perizinan::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Perizinan')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'pemohon_id' => [
            'label' => 'User',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose User')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'id_groupizin' => ['type' => TabularForm::INPUT_TEXT],
        'izin_id' => [
            'label' => 'Izin',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Izin::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Izin')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'no_urut' => ['type' => TabularForm::INPUT_TEXT],
        'tanggal_mohon' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DateTimePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Mohon')],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'hh:ii:ss dd-M-yyyy'
            ]
        ]
],
        'no_izin' => ['type' => TabularForm::INPUT_TEXT],
        'berkas_noizin' => ['type' => TabularForm::INPUT_TEXT],
        'tanggal_izin' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DateTimePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Izin')],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'hh:ii:ss dd-M-yyyy'
            ]
        ]
],
        'tanggal_expired' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DateTimePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Expired')],
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'hh:ii:ss dd-M-yyyy'
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
        'petugas_cek' => ['type' => TabularForm::INPUT_TEXT],
        'status_daftar' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Sendiri' => 'Sendiri', 'Petugas' => 'Petugas', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Status Daftar')],
                    ]
        ],
        'petugas_daftar_id' => [
            'label' => 'User',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\User::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose User')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'lokasi_id' => ['type' => TabularForm::INPUT_TEXT],
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
        'pengambilan_tanggal' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DatePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Pengambilan Tanggal')],
            'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]
],
        'pengambilan_jam' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\TimePicker::classname()
],
        'del' => [
            'type' => TabularForm::INPUT_STATIC,
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('app', 'Delete'), 'onClick' => 'delRowPerizinan(' . $key . '); return false;', 'id' => 'perizinan-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> ' . Yii::t('app', 'Perizinan') . '  </h3>',
            'type' => GridView::TYPE_INFO,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('app', 'Add Row'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowPerizinan()']),
        ]
    ]
]);
Pjax::end();
?>
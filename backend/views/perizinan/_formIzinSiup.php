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
    'formName' => 'IzinSiup',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions'=>['hidden'=>true]],
        'registrasi_id' => [
            'label' => 'Perizinan',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Perizinan::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Perizinan')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
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
        'ktp' => ['type' => TabularForm::INPUT_TEXT],
        'nama' => ['type' => TabularForm::INPUT_TEXT],
        'alamat' => ['type' => TabularForm::INPUT_TEXTAREA],
        'tempat_lahir' => ['type' => TabularForm::INPUT_TEXT],
        'tanggal_lahir' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DatePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Lahir')],
            'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]
],
        'telepon' => ['type' => TabularForm::INPUT_TEXT],
        'fax' => ['type' => TabularForm::INPUT_TEXT],
        'passport' => ['type' => TabularForm::INPUT_TEXT],
        'kewarganegaraan' => ['type' => TabularForm::INPUT_TEXT],
        'jabatan_perusahaan' => ['type' => TabularForm::INPUT_TEXT],
        'npwp_perusahaan' => ['type' => TabularForm::INPUT_TEXT],
        'nama_perusahaan' => ['type' => TabularForm::INPUT_TEXT],
        'alamat_perusahaan' => ['type' => TabularForm::INPUT_TEXTAREA],
        'telpon_perusahaan' => ['type' => TabularForm::INPUT_TEXT],
        'fax_perusahaan' => ['type' => TabularForm::INPUT_TEXT],
        'kelurahan_id' => ['type' => TabularForm::INPUT_TEXT],
        'status_perusahaan' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'PMA' => 'PMA', 'PMDN' => 'PMDN', 'Lain-lain' => 'Lain-lain', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Status Perusahaan')],
                    ]
        ],
        'kode_pos' => ['type' => TabularForm::INPUT_TEXT],
        'bentuk_perusahaan' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'PT' => 'PT', 'Koperasi' => 'Koperasi', 'CV' => 'CV', 'FA' => 'FA', 'Bul' => 'Bul', 'PO' => 'PO', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Bentuk Perusahaan')],
                    ]
        ],
        'akta_pendirian_no' => ['type' => TabularForm::INPUT_TEXT],
        'akta_pendirian_tanggal' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DatePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Akta Pendirian Tanggal')],
            'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]
],
        'akta_pengesahan_no' => ['type' => TabularForm::INPUT_TEXT],
        'akta_pengesahan_tanggal' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DatePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Akta Pengesahan Tanggal')],
            'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]
],
        'no_sk' => ['type' => TabularForm::INPUT_TEXT],
        'no_daftar' => ['type' => TabularForm::INPUT_TEXT],
        'tanggal_pengesahan' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DatePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Pengesahan')],
            'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]
],
        'modal' => ['type' => TabularForm::INPUT_TEXT],
        'nilai_saham_pma' => ['type' => TabularForm::INPUT_TEXT],
        'saham_nasional' => ['type' => TabularForm::INPUT_TEXT],
        'saham_asing' => ['type' => TabularForm::INPUT_TEXT],
        'barang_jasa_dagangan' => ['type' => TabularForm::INPUT_TEXT],
        'tanggal_neraca' => ['type' => TabularForm::INPUT_WIDGET,
        'widgetClass' => \kartik\widgets\DatePicker::classname(),
        'options' => [
            'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Neraca')],
            'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-M-yyyy'
            ]
        ]
],
        'aktiva_lancar_kas' => ['type' => TabularForm::INPUT_TEXT],
        'aktiva_lancar_bank' => ['type' => TabularForm::INPUT_TEXT],
        'aktiva_lancar_piutang' => ['type' => TabularForm::INPUT_TEXT],
        'aktiva_lancar_barang' => ['type' => TabularForm::INPUT_TEXT],
        'aktiva_lancar_pekerjaan' => ['type' => TabularForm::INPUT_TEXT],
        'aktiva_tetap_peralatan' => ['type' => TabularForm::INPUT_TEXT],
        'aktiva_tetap_investasi' => ['type' => TabularForm::INPUT_TEXT],
        'aktiva_lainnya' => ['type' => TabularForm::INPUT_TEXT],
        'pasiva_hutang_dagang' => ['type' => TabularForm::INPUT_TEXT],
        'pasiva_hutang_pajak' => ['type' => TabularForm::INPUT_TEXT],
        'pasiva_hutang_lainnya' => ['type' => TabularForm::INPUT_TEXT],
        'hutang_jangka_panjang' => ['type' => TabularForm::INPUT_TEXT],
        'kekayaan_bersih' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => TabularForm::INPUT_STATIC,
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('app', 'Delete'), 'onClick' => 'delRowIzinSiup(' . $key . '); return false;', 'id' => 'izin-siup-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> ' . Yii::t('app', 'Izin Siup') . '  </h3>',
            'type' => GridView::TYPE_INFO,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('app', 'Add Row'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowIzinSiup()']),
        ]
    ]
]);
Pjax::end();
?>
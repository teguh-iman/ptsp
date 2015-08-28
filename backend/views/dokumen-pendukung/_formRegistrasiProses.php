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
    'formName' => 'RegistrasiProses',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions'=>['hidden'=>true]],
        'registrasi_id' => [
            'label' => 'Registrasi',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Registrasi::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Registrasi')],
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
        'modul' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Persyaratan Izin' => 'Persyaratan Izin', 'Mekanisme Pelayanan' => 'Mekanisme Pelayanan', 'Dasarhukum Izin' => 'Dasarhukum Izin', 'Mekanisme Pengaduan' => 'Mekanisme Pengaduan', 'Definisi' => 'Definisi', 'Download brosur' => 'Download brosur', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Modul')],
                    ]
        ],
        'aktif' => ['type' => TabularForm::INPUT_TEXT],
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
        'status' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Daftar' => 'Daftar', 'Proses' => 'Proses', 'Selesai' => 'Selesai', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Status')],
                    ]
        ],
        'dokumen' => ['type' => TabularForm::INPUT_TEXTAREA],
        'approval' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Y' => 'Y', 'N' => 'N', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Approval')],
                    ]
        ],
        'pelaksana' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Tim Admin' => 'Tim Admin', 'Tim TU' => 'Tim TU', 'Tim Teknis' => 'Tim Teknis', 'Kepala' => 'Kepala', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Pelaksana')],
                    ]
        ],
        'nama_berkas' => ['type' => TabularForm::INPUT_TEXT],
        'berkas' => ['type' => TabularForm::INPUT_TEXT],
        'keterangan' => ['type' => TabularForm::INPUT_TEXTAREA],
        'type' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Berkas' => 'Berkas', 'SOP' => 'SOP', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Type')],
                    ]
        ],
        'del' => [
            'type' => TabularForm::INPUT_STATIC,
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('app', 'Delete'), 'onClick' => 'delRowRegistrasiProses(' . $key . '); return false;', 'id' => 'registrasi-proses-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> ' . Yii::t('app', 'Registrasi Proses') . '  </h3>',
            'type' => GridView::TYPE_INFO,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('app', 'Add Row'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowRegistrasiProses()']),
        ]
    ]
]);
Pjax::end();
?>
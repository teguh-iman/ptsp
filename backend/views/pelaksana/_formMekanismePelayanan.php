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
    'formName' => 'MekanismePelayanan',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions'=>['hidden'=>true]],
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
        'isi' => ['type' => TabularForm::INPUT_TEXTAREA],
        'berkas' => ['type' => TabularForm::INPUT_TEXT],
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
        'dok_input' => [
            'label' => 'Dokumen izin',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\DokumenIzin::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Dokumen izin')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'dok_proses' => [
            'label' => 'Dokumen izin',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\DokumenIzin::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Dokumen izin')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'dok_output' => [
            'label' => 'Dokumen izin',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\DokumenIzin::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Dokumen izin')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'durasi' => ['type' => TabularForm::INPUT_TEXT],
        'dur_sat' => ['type' => TabularForm::INPUT_TEXT],
        'dur_sat1' => ['type' => TabularForm::INPUT_TEXT],
        'dur_sat2' => ['type' => TabularForm::INPUT_TEXT],
        'dur_sat3' => ['type' => TabularForm::INPUT_TEXT],
        'durasi_satuan' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Hari' => 'Hari', 'Jam' => 'Jam', 'Menit' => 'Menit', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Durasi Satuan')],
                    ]
        ],
        'urutan' => ['type' => TabularForm::INPUT_TEXT],
        'dokpendukung_tipe' => ['type' => TabularForm::INPUT_TEXT],
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
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('app', 'Delete'), 'onClick' => 'delRowMekanismePelayanan(' . $key . '); return false;', 'id' => 'mekanisme-pelayanan-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> ' . Yii::t('app', 'Mekanisme Pelayanan') . '  </h3>',
            'type' => GridView::TYPE_INFO,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('app', 'Add Row'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowMekanismePelayanan()']),
        ]
    ]
]);
Pjax::end();
?>
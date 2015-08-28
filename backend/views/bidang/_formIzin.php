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
    'formName' => 'Izin',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions'=>['hidden'=>true]],
        'jenis' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Perizinan' => 'Perizinan', 'Non Perizinan' => 'Non Perizinan', 'Lain-lain' => 'Lain-lain', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Jenis')],
                    ]
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
        'nama' => ['type' => TabularForm::INPUT_TEXT],
        'kode' => ['type' => TabularForm::INPUT_TEXT],
        'fno_surat' => ['type' => TabularForm::INPUT_TEXT],
        'aktif' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Y' => 'Y', 'N' => 'N', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Aktif')],
                    ]
        ],
        'wewenang_id' => ['type' => TabularForm::INPUT_TEXT],
        'cek_lapangan' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Y' => 'Y', 'N' => 'N', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Cek Lapangan')],
                    ]
        ],
        'cek_sprtrw' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Y' => 'Y', 'N' => 'N', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Cek Sprtrw')],
                    ]
        ],
        'cek_obyek' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Y' => 'Y', 'N' => 'N', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Cek Obyek')],
                    ]
        ],
        'cek_perusahaan' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Y' => 'Y', 'N' => 'N', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Cek Perusahaan')],
                    ]
        ],
        'durasi' => ['type' => TabularForm::INPUT_TEXT],
        'durasi_satuan' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Hari' => 'Hari', 'Jam' => 'Jam', 'Menit' => 'Menit', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Durasi Satuan')],
                    ]
        ],
        'latar_belakang' => ['type' => TabularForm::INPUT_TEXTAREA],
        'persyaratan' => ['type' => TabularForm::INPUT_TEXTAREA],
        'mekanisme' => ['type' => TabularForm::INPUT_TEXTAREA],
        'pengaduan' => ['type' => TabularForm::INPUT_TEXTAREA],
        'dasar_hukum' => ['type' => TabularForm::INPUT_TEXTAREA],
        'definisi' => ['type' => TabularForm::INPUT_TEXTAREA],
        'biaya' => ['type' => TabularForm::INPUT_TEXT],
        'brosur' => ['type' => TabularForm::INPUT_TEXTAREA],
        'arsip_id' => ['type' => TabularForm::INPUT_TEXT],
        'type' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'SIUP' => 'SIUP', 'IMTA' => 'IMTA', 'TDP' => 'TDP', 'RPTKA' => 'RPTKA', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Type')],
                    ]
        ],
        'action' => ['type' => TabularForm::INPUT_TEXT],
        'del' => [
            'type' => TabularForm::INPUT_STATIC,
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('app', 'Delete'), 'onClick' => 'delRowIzin(' . $key . '); return false;', 'id' => 'izin-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> ' . Yii::t('app', 'Izin') . '  </h3>',
            'type' => GridView::TYPE_INFO,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('app', 'Add Row'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowIzin()']),
        ]
    ]
]);
Pjax::end();
?>
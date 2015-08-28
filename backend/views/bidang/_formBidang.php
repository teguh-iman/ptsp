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
    'formName' => 'Bidang',
    'checkboxColumn' => false,
    'actionColumn' => false,
    'attributeDefaults' => [
        'type' => TabularForm::INPUT_TEXT,
    ],
    'attributes' => [
        "id" => ['type' => TabularForm::INPUT_HIDDEN, 'columnOptions'=>['hidden'=>true]],
        'parent_id' => [
            'label' => 'Bidang',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Bidang::find()->orderBy('id')->asArray()->all(), 'id', 'id'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Bidang')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'jenis' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Baru' => 'Baru', 'Perubahan' => 'Perubahan', 'Perpanjangan' => 'Perpanjangan', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Jenis')],
                    ]
        ],
        'nama' => ['type' => TabularForm::INPUT_TEXT],
        'fno_surat' => ['type' => TabularForm::INPUT_TEXT],
        'link' => ['type' => TabularForm::INPUT_TEXT],
        'aktif' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Y' => 'Y', 'N' => 'N', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Aktif')],
                    ]
        ],
        'level_wewenang' => ['type' => TabularForm::INPUT_TEXT],
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
        'biaya' => ['type' => TabularForm::INPUT_TEXT],
        'durasi' => ['type' => TabularForm::INPUT_TEXT],
        'durasi_satuan' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'Hari' => 'Hari', 'Jam' => 'Jam', 'Menit' => 'Menit', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Durasi Satuan')],
                    ]
        ],
        'isi_latarbelakang' => ['type' => TabularForm::INPUT_TEXTAREA],
        'isi_syarat' => ['type' => TabularForm::INPUT_TEXTAREA],
        'isi_dasarhukum' => ['type' => TabularForm::INPUT_TEXTAREA],
        'definisi' => ['type' => TabularForm::INPUT_TEXTAREA],
        'mekanisme' => ['type' => TabularForm::INPUT_TEXTAREA],
        'pengaduan' => ['type' => TabularForm::INPUT_TEXTAREA],
        'brosur' => ['type' => TabularForm::INPUT_TEXTAREA],
        'arsip_id' => [
            'label' => 'Arsip',
            'type' => TabularForm::INPUT_WIDGET,
            'widgetClass' => \kartik\widgets\Select2::className(),
            'options' => [
                'data' => \yii\helpers\ArrayHelper::map(\backend\models\Arsip::find()->orderBy('arsip')->asArray()->all(), 'id', 'arsip'),
                'options' => ['placeholder' => Yii::t('app', 'Choose Arsip')],
            ],
            'columnOptions' => ['width' => '200px']
        ],
        'kode_ijin' => ['type' => TabularForm::INPUT_TEXT],
        'type' => ['type' => TabularForm::INPUT_DROPDOWN_LIST,
                    'options' => [
                        'items' => [ 'SIUP' => 'SIUP', 'IMTA' => 'IMTA', 'TDP' => 'TDP', 'RPTKA' => 'RPTKA', ],
                        'columnOptions' => ['width' => '185px'],
                        'options' => ['placeholder' => Yii::t('app', 'Choose Type')],
                    ]
        ],
        'del' => [
            'type' => TabularForm::INPUT_STATIC,
            'label' => '',
            'value' => function($model, $key) {
                return Html::a('<i class="glyphicon glyphicon-trash"></i>', '#', ['title' =>  Yii::t('app', 'Delete'), 'onClick' => 'delRowBidang(' . $key . '); return false;', 'id' => 'bidang-del-btn']);
            },
        ],
    ],
    'gridSettings' => [
        'panel' => [
            'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i> ' . Yii::t('app', 'Bidang') . '  </h3>',
            'type' => GridView::TYPE_INFO,
            'before' => false,
            'footer' => false,
            'after' => Html::button('<i class="glyphicon glyphicon-plus"></i>' . Yii::t('app', 'Add Row'), ['type' => 'button', 'class' => 'btn btn-success kv-batch-create', 'onClick' => 'addRowBidang()']),
        ]
    ]
]);
Pjax::end();
?>
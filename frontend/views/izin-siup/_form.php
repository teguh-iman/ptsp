<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use dektrium\user\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinSiup */
/* @var $form yii\widgets\ActiveForm */

\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'IzinSiupAkta',
        'relID' => 'izin-siup-akta',
        'value' => \yii\helpers\Json::encode($model->izinSiupAktas),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
\mootensai\components\JsBlock::widget(['viewFile' => '_script', 'pos' => \yii\web\View::POS_END,
    'viewParams' => [
        'class' => 'IzinSiupKbli',
        'relID' => 'izin-siup-kbli',
        'value' => \yii\helpers\Json::encode($model->izinSiupKblis),
        'isNewRecord' => ($model->isNewRecord) ? 1 : 0
    ]
]);
?>

<?php $form = ActiveForm::begin(['layout' => 'horizontal']); ?>

<?= $form->errorSummary($model); ?>

<?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">IDENTITAS PEMILIK / PENGURUS</a></li>
                <li><a href="#tab_2" data-toggle="tab">IDENTITAS PERUSAHAAN</a></li>
                <li><a href="#tab_3" data-toggle="tab">LEGALITAS PERUSAHAAN</a></li>
                <li><a href="#tab_4" data-toggle="tab">MODAL DAN SAHAM</a></li>
                <li><a href="#tab_5" data-toggle="tab">KEGIATAN USAHA</a></li>
                <li><a href="#tab_6" data-toggle="tab">NERACA PERUSAHAAN</a></li>
                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">

                    <?= $form->field($model, 'ktp')->textInput(['maxlength' => true, 'placeholder' => 'Ktp']) ?>

                    <?= $form->field($model, 'nama')->textInput(['maxlength' => true, 'placeholder' => 'Nama']) ?>

                    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true, 'placeholder' => 'Tempat Lahir']) ?>

                    <?=
                    $form->field($model, 'tanggal_lahir')->widget(\kartik\widgets\DatePicker::classname(), [
                        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Lahir')],
                        'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'dd-M-yyyy'
                        ]
                    ]);
                    ?>

                    <?= $form->field($model, 'telepon')->textInput(['maxlength' => true, 'placeholder' => 'Telepon']) ?>

                    <?= $form->field($model, 'fax')->textInput(['maxlength' => true, 'placeholder' => 'Fax']) ?>

                    <?= $form->field($model, 'passport')->textInput(['maxlength' => true, 'placeholder' => 'Passport']) ?>

                    <?= $form->field($model, 'kewarganegaraan')->textInput(['maxlength' => true, 'placeholder' => 'Kewarganegaraan']) ?>

                    <?= $form->field($model, 'jabatan_perusahaan')->textInput(['maxlength' => true, 'placeholder' => 'Jabatan Perusahaan']) ?>

                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_2">

                    <?= $form->field($model, 'npwp_perusahaan')->textInput(['maxlength' => true, 'placeholder' => 'Npwp Perusahaan']) ?>

                    <?= $form->field($model, 'nama_perusahaan')->textInput(['maxlength' => true, 'placeholder' => 'Nama Perusahaan']) ?>

                    <?= $form->field($model, 'alamat_perusahaan')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'telpon_perusahaan')->textInput(['maxlength' => true, 'placeholder' => 'Telpon Perusahaan']) ?>

                    <?= $form->field($model, 'fax_perusahaan')->textInput(['maxlength' => true, 'placeholder' => 'Fax Perusahaan']) ?>

                    <?= $form->field($model, 'kabupaten_kota')->dropDownList(\backend\models\Lokasi::getKabKotaOptions(), ['id' => 'kabkota-id', 'class' => 'input-large form-control']); ?>

                    <?=
                    $form->field($model, 'kecamatan')->widget(\kartik\widgets\DepDrop::classname(), [
                        'options' => ['id' => 'kec-id'],
                        'pluginOptions' => [
                            'depends' => ['kabkota-id'],
                            'placeholder' => 'Select...',
                            'url' => Url::to(['/admin/lokasi/subcat'])
                        ]
                    ]);
                    ?>

                    <?=
                    $form->field($model, 'kelurahan_id')->widget(\kartik\widgets\DepDrop::classname(), [
                        'pluginOptions' => [
                            'depends' => ['kabkota-id', 'kec-id'],
                            'placeholder' => 'Select...',
                            'url' => Url::to(['/admin/lokasi/prod'])
                        ]
                    ]);
                    ?>

                    <?= $form->field($model, 'status_perusahaan')->dropDownList([ 'PMA' => 'PMA', 'PMDN' => 'PMDN', 'Lain-lain' => 'Lain-lain',], ['prompt' => '']) ?>

                    <?= $form->field($model, 'kode_pos')->textInput(['maxlength' => true, 'placeholder' => 'Kode Pos']) ?>

                    <?= $form->field($model, 'bentuk_perusahaan')->dropDownList([ 'PT' => 'PT', 'Koperasi' => 'Koperasi', 'CV' => 'CV', 'FA' => 'FA', 'Bul' => 'Bul', 'PO' => 'PO',], ['prompt' => '']) ?>


                </div><!-- /.tab-pane -->

                <div class="tab-pane" id="tab_3">
                    <?= $form->field($model, 'akta_pendirian_no')->textInput(['maxlength' => true, 'placeholder' => 'Akta Pendirian No']) ?>

                    <?=
                    $form->field($model, 'akta_pendirian_tanggal')->widget(\kartik\widgets\DatePicker::classname(), [
                        'options' => ['placeholder' => Yii::t('app', 'Choose Akta Pendirian Tanggal')],
                        'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'dd-M-yyyy'
                        ]
                    ]);
                    ?>

                    <?= $form->field($model, 'akta_pengesahan_no')->textInput(['maxlength' => true, 'placeholder' => 'Akta Pengesahan No']) ?>

                    <?=
                    $form->field($model, 'akta_pengesahan_tanggal')->widget(\kartik\widgets\DatePicker::classname(), [
                        'options' => ['placeholder' => Yii::t('app', 'Choose Akta Pengesahan Tanggal')],
                        'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'dd-M-yyyy'
                        ]
                    ]);
                    ?>

                    <?= $form->field($model, 'no_sk')->textInput(['maxlength' => true, 'placeholder' => 'No Sk']) ?>

                    <?= $form->field($model, 'no_daftar')->textInput(['maxlength' => true, 'placeholder' => 'No Daftar']) ?>

                    <?=
                    $form->field($model, 'tanggal_pengesahan')->widget(\kartik\widgets\DatePicker::classname(), [
                        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Pengesahan')],
                        'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'dd-M-yyyy'
                        ]
                    ]);
                    ?>
                    
                    <div class="form-group" id="add-izin-siup-akta"></div>

                    
                </div>  

                <div class="tab-pane" id="tab_4">
                    <?= $form->field($model, 'modal')->textInput(['placeholder' => 'Modal']) ?>

                    <?= $form->field($model, 'nilai_saham_pma')->textInput(['placeholder' => 'Nilai Saham Pma']) ?>

                    <?= $form->field($model, 'saham_nasional')->textInput(['placeholder' => 'Saham Nasional']) ?>

                    <?= $form->field($model, 'saham_asing')->textInput(['placeholder' => 'Saham Asing']) ?>
                </div>  

                <div class="tab-pane" id="tab_5">
                    
                    <div class="form-group" id="add-izin-siup-kbli"></div>

                    <?= $form->field($model, 'barang_jasa_dagangan')->textInput(['maxlength' => true, 'placeholder' => 'Barang Jasa Dagangan']) ?>
                    
                    
                </div>  

                <div class="tab-pane" id="tab_6">
                    <?=
                    $form->field($model, 'tanggal_neraca')->widget(\kartik\widgets\DatePicker::classname(), [
                        'options' => ['placeholder' => Yii::t('app', 'Choose Tanggal Neraca')],
                        'type' => \kartik\widgets\DatePicker::TYPE_COMPONENT_APPEND,
                        'pluginOptions' => [
                            'autoclose' => true,
                            'format' => 'dd-M-yyyy'
                        ]
                    ]);
                    ?>

                    <?= $form->field($model, 'aktiva_lancar_kas')->textInput(['placeholder' => 'Aktiva Lancar Kas']) ?>

                    <?= $form->field($model, 'aktiva_lancar_bank')->textInput(['placeholder' => 'Aktiva Lancar Bank']) ?>

                    <?= $form->field($model, 'aktiva_lancar_piutang')->textInput(['placeholder' => 'Aktiva Lancar Piutang']) ?>

                    <?= $form->field($model, 'aktiva_lancar_barang')->textInput(['placeholder' => 'Aktiva Lancar Barang']) ?>

                    <?= $form->field($model, 'aktiva_lancar_pekerjaan')->textInput(['placeholder' => 'Aktiva Lancar Pekerjaan']) ?>

                    <?= $form->field($model, 'aktiva_tetap_peralatan')->textInput(['placeholder' => 'Aktiva Tetap Peralatan']) ?>

                    <?= $form->field($model, 'aktiva_tetap_investasi')->textInput(['placeholder' => 'Aktiva Tetap Investasi']) ?>

                    <?= $form->field($model, 'aktiva_lainnya')->textInput(['placeholder' => 'Aktiva Lainnya']) ?>

                    <?= $form->field($model, 'pasiva_hutang_dagang')->textInput(['placeholder' => 'Pasiva Hutang Dagang']) ?>

                    <?= $form->field($model, 'pasiva_hutang_pajak')->textInput(['placeholder' => 'Pasiva Hutang Pajak']) ?>

                    <?= $form->field($model, 'pasiva_hutang_lainnya')->textInput(['placeholder' => 'Pasiva Hutang Lainnya']) ?>

                    <?= $form->field($model, 'hutang_jangka_panjang')->textInput(['placeholder' => 'Hutang Jangka Panjang']) ?>

                    <?= $form->field($model, 'kekayaan_bersih')->textInput(['placeholder' => 'Kekayaan Bersih']) ?>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
    </div><!-- /.col -->    
    

    

    <div class="box text-center">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<!-- END CUSTOM TABS -->





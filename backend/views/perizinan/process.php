<?php

use kartik\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\DetailView;
use yii\widgets\ListView;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model backend\models\PerizinanProses */

$this->title = $model->perizinan->izin->nama;
$this->params['breadcrumbs'][] = ['label' => $model->perizinan->izin->bidang->nama, 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['view', 'id' => $model->id]];
?>
<div class="perizinan-proses-update">

    <div class="perizinan-proses-form">

        <div class="row">
            <div class="col-sm-7">
                <h3>Data Permohonan Izin</h3>
                <div class="well"><i class="glyphicon glyphicon-info-sign"></i><?= $model->mekanismePelayanan->isi; ?></div>
                <?php
                $gridColumn = [
                    'urutan',
                    'tanggal_proses',
//                    'pelaksana',
                ];
                echo DetailView::widget([
                    'model' => $model,
                    'attributes' => $gridColumn
                ]);
                ?>

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->errorSummary($model); ?>

                <?= $form->field($model, 'id', ['template' => '{input}'])->textInput(['style' => 'display:none']); ?>

                <?=
                $form->field($model, 'isi_dokumen')->widget(TinyMce::className(), [
                    'options' => ['rows' => 12],
                    'language' => 'id',
                    'clientOptions' => [
                        'plugins' => [
                            "advlist autolink lists link charmap print preview anchor",
                            "searchreplace visualblocks code fullscreen",
                            "insertdatetime media table contextmenu paste"
                        ],
                        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
                    ]
                ]);
                ?>

                <?php // $form->field($model, 'dok_input')->textarea(['rows' => 6]) ?>

                <?php // $form->field($model, 'dok_proses')->textarea(['rows' => 6]) ?>

                <?php // $form->field($model, 'dok_output')->textarea(['rows' => 6]) ?>

                <?= $form->field($model, 'valid')->dropDownList(['Y' => 'Y', 'N' => 'N',], ['prompt' => '']) ?>

                <?= $form->field($model, 'mekanisme_cek')->dropDownList([ 'Y' => 'Y', 'N' => 'N'], ['prompt' => '']) ?>


                <?php
                if ($model->urutan == 1) {
                    $items = [ 'Tolak' => 'Tolak', 'Revisi' => 'Revisi', 'Lanjut' => 'Lanjut'];
                } else if ($model->urutan == $model->perizinan->jumlah_tahap) {
                    $items = [ 'Tolak' => 'Tolak', 'Revisi' => 'Revisi', 'Selesai' => 'Selesai'];
                } else {
                    $items = [ 'Tolak' => 'Tolak', 'Revisi' => 'Revisi', 'Lanjut' => 'Lanjut'];
                }
                echo $form->field($model, 'status')->dropDownList($items, ['prompt' => ''])
                ?>

                <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>


                <div class="form-group">
                    <?= Html::submitButton(Yii::t('app', 'Simpan'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
            <div class="col-sm-5">
                <h3>Data Pemohon</h3>
                <?php
                $user = \backend\models\User::findOne($model->perizinan->pemohon_id);
                echo Html::well(Html::address(
                                $user->profile->name, [$user->profile->alamat], ['Email' => $user->email, 'Phone' => $user->profile->telepon], ['No KTP' => $user->profile->no_ktp, 'NPWP' => $user->profile->npwp]
                        ), Html::SIZE_SMALL);
                ?>
                <h3>Dokumen Persyaratan</h3>
                <div class="well">

                    <?php
                    echo ListView::widget([
                        'dataProvider' => $providerDokumenPendukung,
                        'itemView' => '_document',
                        'summary' => '',
                    ]);
                    ?>
                </div>
            </div>
        </div>



    </div>


</div>

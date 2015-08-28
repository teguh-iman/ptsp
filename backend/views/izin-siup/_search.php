<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinSiupSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="izin-siup-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'registrasi_id') ?>

    <?= $form->field($model, 'izin_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'ktp') ?>

    <?php // echo $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'tempat_lahir') ?>

    <?php // echo $form->field($model, 'tanggal_lahir') ?>

    <?php // echo $form->field($model, 'telepon') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'passport') ?>

    <?php // echo $form->field($model, 'kewarganegaraan') ?>

    <?php // echo $form->field($model, 'jabatan_perusahaan') ?>

    <?php // echo $form->field($model, 'npwp_perusahaan') ?>

    <?php // echo $form->field($model, 'nama_perusahaan') ?>

    <?php // echo $form->field($model, 'alamat_perusahaan') ?>

    <?php // echo $form->field($model, 'telpon_perusahaan') ?>

    <?php // echo $form->field($model, 'fax_perusahaan') ?>

    <?php // echo $form->field($model, 'kelurahan_id') ?>

    <?php // echo $form->field($model, 'status_perusahaan') ?>

    <?php // echo $form->field($model, 'kode_pos') ?>

    <?php // echo $form->field($model, 'bentuk_perusahaan') ?>

    <?php // echo $form->field($model, 'akta_pendirian_no') ?>

    <?php // echo $form->field($model, 'akta_pendirian_tanggal') ?>

    <?php // echo $form->field($model, 'akta_pengesahan_no') ?>

    <?php // echo $form->field($model, 'akta_pengesahan_tanggal') ?>

    <?php // echo $form->field($model, 'no_sk') ?>

    <?php // echo $form->field($model, 'no_daftar') ?>

    <?php // echo $form->field($model, 'tanggal_pengesahan') ?>

    <?php // echo $form->field($model, 'modal') ?>

    <?php // echo $form->field($model, 'nilai_saham_pma') ?>

    <?php // echo $form->field($model, 'saham_nasional') ?>

    <?php // echo $form->field($model, 'saham_asing') ?>

    <?php // echo $form->field($model, 'barang_jasa_dagangan') ?>

    <?php // echo $form->field($model, 'tanggal_neraca') ?>

    <?php // echo $form->field($model, 'aktiva_lancar_kas') ?>

    <?php // echo $form->field($model, 'aktiva_lancar_bank') ?>

    <?php // echo $form->field($model, 'aktiva_lancar_piutang') ?>

    <?php // echo $form->field($model, 'aktiva_lancar_barang') ?>

    <?php // echo $form->field($model, 'aktiva_lancar_pekerjaan') ?>

    <?php // echo $form->field($model, 'aktiva_tetap_peralatan') ?>

    <?php // echo $form->field($model, 'aktiva_tetap_investasi') ?>

    <?php // echo $form->field($model, 'aktiva_lainnya') ?>

    <?php // echo $form->field($model, 'pasiva_hutang_dagang') ?>

    <?php // echo $form->field($model, 'pasiva_hutang_pajak') ?>

    <?php // echo $form->field($model, 'pasiva_hutang_lainnya') ?>

    <?php // echo $form->field($model, 'hutang_jangka_panjang') ?>

    <?php // echo $form->field($model, 'kekayaan_bersih') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

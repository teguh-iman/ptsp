<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Perizinan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Perizinan'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perizinan-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Perizinan').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        [
            'attribute' => 'perizinans.id',
            'label' => Yii::t('app', 'Perizinan'),
        ],
        [
            'attribute' => 'pemohon.id',
            'label' => Yii::t('app', 'User'),
        ],
        'id_groupizin',
        [
            'attribute' => 'izin.id',
            'label' => Yii::t('app', 'Izin'),
        ],
        'no_urut',
        'tanggal_mohon',
        'no_izin',
        'berkas_noizin',
        'tanggal_izin',
        'tanggal_expired',
        'status',
        'aktif',
        'registrasi_urutan',
        'nomor_sp_rt_rw',
        'tanggal_sp_rt_rw',
        'peruntukan',
        'nama_perusahaan',
        'tanggal_cek_lapangan',
        'petugas_cek',
        'status_daftar',
        [
            'attribute' => 'petugasDaftar.id',
            'label' => Yii::t('app', 'User'),
        ],
        'lokasi_id',
        'keterangan:ntext',
        'qr_code',
        'tanggal_pertemuan',
        'pengambilan_tanggal',
        'pengambilan_jam',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
    
    <div class="row">
<?php
    $gridColumnIzinSiup = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
        [
            'attribute' => 'registrasi.id',
            'label' => Yii::t('app', 'Perizinan'),
        ],
        [
            'attribute' => 'izin.id',
            'label' => Yii::t('app', 'Izin'),
        ],
        [
            'attribute' => 'user.id',
            'label' => Yii::t('app', 'User'),
        ],
        'ktp',
        'nama',
        'alamat:ntext',
        'tempat_lahir',
        'tanggal_lahir',
        'telepon',
        'fax',
        'passport',
        'kewarganegaraan',
        'jabatan_perusahaan',
        'npwp_perusahaan',
        'nama_perusahaan',
        'alamat_perusahaan:ntext',
        'telpon_perusahaan',
        'fax_perusahaan',
        'kelurahan_id',
        'status_perusahaan',
        'kode_pos',
        'bentuk_perusahaan',
        'akta_pendirian_no',
        'akta_pendirian_tanggal',
        'akta_pengesahan_no',
        'akta_pengesahan_tanggal',
        'no_sk',
        'no_daftar',
        'tanggal_pengesahan',
        'modal',
        'nilai_saham_pma',
        'saham_nasional',
        'saham_asing',
        'barang_jasa_dagangan',
        'tanggal_neraca',
        'aktiva_lancar_kas',
        'aktiva_lancar_bank',
        'aktiva_lancar_piutang',
        'aktiva_lancar_barang',
        'aktiva_lancar_pekerjaan',
        'aktiva_tetap_peralatan',
        'aktiva_tetap_investasi',
        'aktiva_lainnya',
        'pasiva_hutang_dagang',
        'pasiva_hutang_pajak',
        'pasiva_hutang_lainnya',
        'hutang_jangka_panjang',
        'kekayaan_bersih',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerIzinSiup,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>  ' . Html::encode(Yii::t('app', 'Izin Siup').' '. $this->title) . ' </h3>',
        ],
        'columns' => $gridColumnIzinSiup
    ]);
?>
    </div>
    
    <div class="row">
<?php
    $gridColumnPerizinan = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
        [
            'attribute' => 'perizinans.id',
            'label' => Yii::t('app', 'Perizinan'),
        ],
        [
            'attribute' => 'pemohon.id',
            'label' => Yii::t('app', 'User'),
        ],
        'id_groupizin',
        [
            'attribute' => 'izin.id',
            'label' => Yii::t('app', 'Izin'),
        ],
        'no_urut',
        'tanggal_mohon',
        'no_izin',
        'berkas_noizin',
        'tanggal_izin',
        'tanggal_expired',
        'status',
        'aktif',
        'registrasi_urutan',
        'nomor_sp_rt_rw',
        'tanggal_sp_rt_rw',
        'peruntukan',
        'nama_perusahaan',
        'tanggal_cek_lapangan',
        'petugas_cek',
        'status_daftar',
        [
            'attribute' => 'petugasDaftar.id',
            'label' => Yii::t('app', 'User'),
        ],
        'lokasi_id',
        'keterangan:ntext',
        'qr_code',
        'tanggal_pertemuan',
        'pengambilan_tanggal',
        'pengambilan_jam',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPerizinan,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>  ' . Html::encode(Yii::t('app', 'Perizinan').' '. $this->title) . ' </h3>',
        ],
        'columns' => $gridColumnPerizinan
    ]);
?>
    </div>
    
    <div class="row">
<?php
    $gridColumnPerizinanProses = [
        ['class' => 'yii\grid\SerialColumn'],
        ['attribute' => 'id', 'hidden' => true],
        [
            'attribute' => 'perizinan.id',
            'label' => Yii::t('app', 'Perizinan'),
        ],
        [
            'attribute' => 'mekanismePelayanan.id',
            'label' => Yii::t('app', 'Mekanisme Pelayanan'),
        ],
        [
            'attribute' => 'pelaksana0.id',
            'label' => Yii::t('app', 'Pelaksana'),
        ],
        'urutan',
        'jumlah_tahap',
        'active',
        'tanggal_proses',
        'isi_dokumen:ntext',
        'pelaksana',
        'dok_input:ntext',
        'dok_proses:ntext',
        'dok_output:ntext',
        'nama_berkas',
        'berkas',
        'berkas_seo',
        'status',
        'keterangan:ntext',
        'tanggal',
        'valid',
        'mulai',
        'selesai',
        'jarak',
        'mekanisme_cek',
        'aktif',
        'jarak_sebelum',
        'jarak_sekarang',
        'type',
    ];
    echo Gridview::widget([
        'dataProvider' => $providerPerizinanProses,
        'pjax' => true,
        'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
        'panel' => [
        'type' => GridView::TYPE_PRIMARY,
        'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>  ' . Html::encode(Yii::t('app', 'Perizinan Proses').' '. $this->title) . ' </h3>',
        ],
        'columns' => $gridColumnPerizinanProses
    ]);
?>
    </div>
</div>
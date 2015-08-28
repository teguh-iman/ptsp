<?php

//use yii\helpers\Html;
use kartik\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;
use kartik\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\Perizinan */

$this->title = $model->izin->nama;
$this->params['breadcrumbs'][] = ['label' => $model->izin->bidang->nama, 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['view', 'id' => $model->id]];
?>
<div class="perizinan-view">

    <div class="row">
        <div class="col-sm-7">
            <h3>Data Permohonan Izin</h3>
            <?php
            $gridColumn = [
//                ['attribute' => 'id', 'hidden' => true],
                'no_urut',
                'tanggal_mohon',
                'no_izin',
                'berkas_noizin',
                'tanggal_izin',
                'tanggal_expired',
                'status',
                'aktif',
//                'registrasi_urutan',
//                'nomor_sp_rt_rw',
//                'tanggal_sp_rt_rw',
//                'peruntukan',
//                'nama_perusahaan',
                'tanggal_cek_lapangan',
                'petugas_cek',
                'status_daftar',
//                [
//                    'attribute' => 'petugasDaftar.id',
//                    'label' => Yii::t('app', 'User'),
//                ],
//                'lokasi_id',
//                'keterangan:ntext',
//                'qr_code',
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
        <div class="col-sm-5">
            <h3>Data Pemohon</h3>
            <?php
            $user = \backend\models\User::findOne($model->pemohon_id);
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

    <div class="row">
        <?php
        $gridColumnIzinSiup = [
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
//        echo Gridview::widget([
//            'dataProvider' => $providerIzinSiup,
//            'pjax' => true,
//            'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
//            'panel' => [
//                'type' => GridView::TYPE_PRIMARY,
//                'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>  ' . Html::encode(Yii::t('app', 'Izin Siup') . ' ' . $this->title) . ' </h3>',
//            ],
//            'columns' => $gridColumnIzinSiup
//        ]);
//        echo DetailView::widget([
//                'model' => \backend\models\IzinSiup::findOne(['perizinan_id'=>$model->id]),
//                'attributes' => $gridColumnIzinSiup
//            ]);
        ?>
    </div>

    <div class="row">
        <?php
        $gridColumnPerizinanProses = [
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'hidden' => true],
            [
                'attribute' => 'active',
                'value' => function ($model, $key, $index, $widget) {
                    if ($model->active == 1)
                            return Html::badge(Html::icon('check'));
                        else
                            return '';
                },
//                'width' => '8%',
                'vAlign' => 'middle',
                'format' => 'raw',
//                'noWrap' => true
            ],
            'mekanismePelayanan.isi',
            [
                'attribute' => 'pelaksana0.nama',
                'label' => Yii::t('app', 'Pelaksana'),
            ],
//            'urutan',
            'tanggal_proses',
//            'isi_dokumen:ntext',
//            'pelaksana',
//            'dok_input:ntext',
//            'dok_proses:ntext',
//            'dok_output:ntext',
//            'nama_berkas',
//            'berkas',
//            'berkas_seo',
//            'status',
//            'keterangan:ntext',
//            'tanggal',
//            'valid',
//            'mulai',
//            'selesai',
//            'jarak',
//            'mekanisme_cek',
//            'aktif',
//            'jarak_sebelum',
//            'jarak_sekarang',
//            'type',
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{proses}',
                'buttons' => [
                    'proses' => function ($url, $model) {
                        $url = Url::toRoute(['process', 'id' => $model->id]);
                        if (Yii::$app->user->identity->pelaksana_id == $model->pelaksana_id && $model->active == 1)
                            return Html::a(Html::bsLabel('Proses', Html::TYPE_PRIMARY), $url, [
                                        'title' => Yii::t('yii', 'Proses'),
                            ]);
                        else
                            return '';
                    },
                        ]
                    ],
                ];
                echo Gridview::widget([
                    'dataProvider' => $providerPerizinanProses,
                    'pjax' => true,
                    'pjaxSettings' => ['options' => ['id' => 'kv-pjax-container']],
                    'panel' => [
                        'type' => GridView::TYPE_PRIMARY,
                        'heading' => '<h3 class="panel-title"><i class="glyphicon glyphicon-book"></i>Proses Perizinan</h3>',
                    ],
                    'export' => false,
                    'columns' => $gridColumnPerizinanProses
                ]);
                ?>
    </div>
</div>
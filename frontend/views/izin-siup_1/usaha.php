<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

	echo Form::widget([	

    'model' => $model,
    'form' => $form,
    'columns' => 1,
    'attributes' => [

'jenis_permohonan'=>['type'=> Form::INPUT_DROPDOWN_LIST, 'items'=> [ 'Mikro' => 'Mikro', 'Kecil' => 'Kecil', 'Menengah' => 'Menengah', 'Besar' => 'Besar', ], 'options'=>['placeholder'=>'Enter Jenis Permohonan...']], 

'kategori_permohonan'=>['type'=> Form::INPUT_DROPDOWN_LIST, 'items'=> [ 'Baru' => 'Baru', 'Perpanjangan' => 'Perpanjangan', 'Perubahan' => 'Perubahan', ], 'options'=>['placeholder'=>'Enter Kategori Permohonan...']], 

'alamat'=>['type'=> Form::INPUT_TEXTAREA, 'options'=>['placeholder'=>'Enter Alamat...','rows'=> 6]], 

'alamat_perusahaan'=>['type'=> Form::INPUT_TEXTAREA, 'options'=>['placeholder'=>'Enter Alamat Perusahaan...','rows'=> 6]], 

'status_perusahaan'=>['type'=> Form::INPUT_DROPDOWN_LIST, 'items'=> [ 'PMA' => 'PMA', 'PMDN' => 'PMDN', 'Lain-lain' => 'Lain-lain', ], 'options'=>['placeholder'=>'Enter Status Perusahaan...']], 

'bentuk_perusahaan'=>['type'=> Form::INPUT_DROPDOWN_LIST, 'items'=> [ 'PT' => 'PT', 'Koperasi' => 'Koperasi', 'CV' => 'CV', 'FA' => 'FA', 'Bul' => 'Bul', 'PO' => 'PO', ], 'options'=>['placeholder'=>'Enter Bentuk Perusahaan...']], 

'tanggal_lahir'=>['type'=> Form::INPUT_WIDGET, 'widgetClass'=>DateControl::classname(),'options'=>['type'=>DateControl::FORMAT_DATE]], 

'akta_pendirian_tanggal'=>['type'=> Form::INPUT_WIDGET, 'widgetClass'=>DateControl::classname(),'options'=>['type'=>DateControl::FORMAT_DATE]], 

'tanggal_pengesahan'=>['type'=> Form::INPUT_WIDGET, 'widgetClass'=>DateControl::classname(),'options'=>['type'=>DateControl::FORMAT_DATE]], 

'tanggal_neraca'=>['type'=> Form::INPUT_WIDGET, 'widgetClass'=>DateControl::classname(),'options'=>['type'=>DateControl::FORMAT_DATE]], 

'kelurahan_id'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Kelurahan ID...']], 

'modal'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Modal...']], 

'nilai_saham_pma'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Nilai Saham Pma...']], 

'saham_asing'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Saham Asing...']], 

'aktiva_lancar_kas'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Lancar Kas...']], 

'aktiva_lancar_bank'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Lancar Bank...']], 

'aktiva_lancar_piutang'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Lancar Piutang...']], 

'aktiva_lancar_barang'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Lancar Barang...']], 

'aktiva_lancar_pekerjaan'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Lancar Pekerjaan...']], 

'aktiva_tetap_peralatan'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Tetap Peralatan...']], 

'aktiva_tetap_investasi'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Tetap Investasi...']], 

'pasiva_hutang_dagang'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Pasiva Hutang Dagang...']], 

'pasiva_hutang_pajak'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Pasiva Hutang Pajak...']], 

'pasiva_hutang_lainnya'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Pasiva Hutang Lainnya...']], 

'hutang_jangka_panjang'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Hutang Jangka Panjang...']], 

'kekayaan_bersih'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Kekayaan Bersih...']], 

'nik'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Nik...', 'maxlength'=>16]], 

'ktp'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Ktp...', 'maxlength'=>16]], 

'passport'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Passport...', 'maxlength'=>16]], 

'nama'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Nama...', 'maxlength'=>100]], 

'nama_perusahaan'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Nama Perusahaan...', 'maxlength'=>100]], 

'barang_jasa_dagangan'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Barang Jasa Dagangan...', 'maxlength'=>100]], 

'tempat_lahir'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Tempat Lahir...', 'maxlength'=>50]], 

'kewarganegaraan'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Kewarganegaraan...', 'maxlength'=>50]], 

'jabatan_perusahaan'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Jabatan Perusahaan...', 'maxlength'=>50]], 

'akta_pendirian_no'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Akta Pendirian No...', 'maxlength'=>50]], 

'no_sk'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter No Sk...', 'maxlength'=>50]], 

'no_daftar'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter No Daftar...', 'maxlength'=>50]], 

'telepon'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Telepon...', 'maxlength'=>12]], 

'fax'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Fax...', 'maxlength'=>12]], 

'telpon_perusahaan'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Telpon Perusahaan...', 'maxlength'=>12]], 

'fax_perusahaan'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Fax Perusahaan...', 'maxlength'=>12]], 

'kode_pos'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Kode Pos...', 'maxlength'=>5]], 

    ]


    ]);


<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\builder\FormGrid;
use kartik\datecontrol\DateControl;
use kartik\tabs\TabsX;

/**
 * @var yii\web\View $this
 * @var common\models\IzinSiup $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="izin-siup-form">

    <?php $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_HORIZONTAL]); 
	
	echo Form::widget([

    'model' => $model,
    'form' => $form,
    'columns' => 1,
    'attributes' => [

'jenis_permohonan'=>['type'=> Form::INPUT_DROPDOWN_LIST, 'items'=> [ 'Mikro' => 'Mikro', 'Kecil' => 'Kecil', 'Menengah' => 'Menengah', 'Besar' => 'Besar', ], 'options'=>['placeholder'=>'Enter Jenis Permohonan...']], 

'kategori_permohonan'=>['type'=> Form::INPUT_DROPDOWN_LIST, 'items'=> [ 'Baru' => 'Baru', 'Perpanjangan' => 'Perpanjangan', 'Perubahan' => 'Perubahan', ], 'options'=>['placeholder'=>'Enter Kategori Permohonan...']], 



    ]
    ]);
	
		$content1 = Form::widget([

    'model' => $model,
    'form' => $form,
    'columns' => 1,
    'attributes' => [
	
	'nik'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Nik...', 'maxlength'=>16]], 
	
	'nama'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Nama...', 'maxlength'=>100]], 
	
	'alamat'=>['type'=> Form::INPUT_TEXTAREA, 'options'=>['placeholder'=>'Enter Alamat...','rows'=> 2]], 
	
	'tempat_tanggal_lahir' => [
		
		    'label'=>'Tempat dan Tanggal Lahir',
            'labelSpan'=>2,
            'columns'=>2,
            'attributes'=>[
				'tempat_lahir'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Tempat Lahir...', 'maxlength'=>50]], 
	
				'tanggal_lahir'=>['type'=> Form::INPUT_WIDGET, 'widgetClass'=>DateControl::classname(),'options'=>['type'=>DateControl::FORMAT_DATE]],
			]
	],
	
	
	'telepon_fax' => [
		
		    'label'=>'Telepon / Fax',
            'labelSpan'=>2,
            'columns'=>2,
            'attributes'=>[
				'telepon'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Telepon...', 'maxlength'=>12]], 
	
				'fax'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Fax...', 'maxlength'=>12]],
			]
	],
	
	'ktp_passport' => [
		
		    'label'=>'KTP / Passport',
            'labelSpan'=>2,
            'columns'=>2,
            'attributes'=>[
				'ktp'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Ktp...', 'maxlength'=>16]], 

				'passport'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Passport...', 'maxlength'=>16]], 
			]
	],
	
	
	'kewarganegaraan'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Kewarganegaraan...', 'maxlength'=>50]], 

	'jabatan_perusahaan'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Jabatan Perusahaan...', 'maxlength'=>50]], 

    ]


    ]);
	
		$content2 = Form::widget([

    'model' => $model,
    'form' => $form,
    'columns' => 1,
    'attributes' => [
	
		'nama_perusahaan'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Nama Perusahaan...', 'maxlength'=>100]], 

		'bentuk_perusahaan'=>['type'=> Form::INPUT_DROPDOWN_LIST, 'items'=> [ 'PT' => 'PT', 'Koperasi' => 'Koperasi', 'CV' => 'CV', 'FA' => 'FA', 'Bul' => 'Bul', 'PO' => 'PO', ], 'options'=>['placeholder'=>'Enter Bentuk Perusahaan...']], 

		'alamat_perusahaan'=>['type'=> Form::INPUT_TEXTAREA, 'options'=>['placeholder'=>'Enter Alamat Perusahaan...','rows'=> 2]], 

		'kelurahan_id'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Kelurahan ID...']], 

		'kode_pos'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Kode Pos...', 'maxlength'=>5]], 

		'telepon_fax' => [
		
		    'label'=>'Telepon / Fax',
            'labelSpan'=>2,
            'columns'=>2,
            'attributes'=>[

				'telpon_perusahaan'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Telpon Perusahaan...', 'maxlength'=>12]], 

				'fax_perusahaan'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Fax Perusahaan...', 'maxlength'=>12]], 

			]
		],
	
		'status_perusahaan'=>['type'=> Form::INPUT_DROPDOWN_LIST, 'items'=> [ 'PMA' => 'PMA', 'PMDN' => 'PMDN', 'Lain-lain' => 'Lain-lain', ], 'options'=>['placeholder'=>'Enter Status Perusahaan...']], 

    ]


    ]);
	
	$content3 = Form::widget([

    'model' => $model,
    'form' => $form,
    'columns' => 1,
    'attributes' => [
	
		'akta_pendirian' => [
		
		    'label'=>'Akta Pendirian',
            'labelSpan'=>2,
            'columns'=>2,
            'attributes'=>[
			
				'akta_pendirian_no'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Akta Pendirian No...', 'maxlength'=>50]], 

				'akta_pendirian_tanggal'=>['type'=> Form::INPUT_WIDGET, 'widgetClass'=>DateControl::classname(),'options'=>['type'=>DateControl::FORMAT_DATE]], 

			]
		],
	
		'akta_pengesahan' => [
		
		    'label'=>'Akta Pengesahan',
            'labelSpan'=>2,
            'columns'=>2,
            'attributes'=>[
			
				'akta_pengesahan_no'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter No Pengesahan...', 'maxlength'=>50]], 

				'akta_pengesahan_tanggal'=>['type'=> Form::INPUT_WIDGET, 'widgetClass'=>DateControl::classname(),'options'=>['type'=>DateControl::FORMAT_DATE]], 

			]
		],
		
		'humkam' => [
		
		    'label'=>'Pengesahan Badan Hukum Kemenkumham RI',
            'labelSpan'=>2,
            'columns'=>2,
            'attributes'=>[
		
				'no_sk'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter No Sk...', 'maxlength'=>50]], 

				'no_daftar'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter No Daftar...', 'maxlength'=>50]], 

			]
		],
		
		'tanggal_pengesahan'=>['type'=> Form::INPUT_WIDGET, 'widgetClass'=>DateControl::classname(),'options'=>['type'=>DateControl::FORMAT_DATE]], 

    ]


    ]);
	
	$content4 = Form::widget([

    'model' => $model,
    'form' => $form,
    'columns' => 1,
    'attributes' => [
	
		'modal'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Modal...']], 

		'nilai_saham_pma'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Nilai Saham Pma...']], 

	
		'saham' => [
		
		    'label'=>'Saham (Khusus untuk penanam modal asing)',
            'labelSpan'=>2,
            'columns'=>2,
            'attributes'=>[
			
				'saham_nasional'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Saham Nasional...']], 
			
				'saham_asing'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Saham Asing...']], 

			]
		],

    ]


    ]);
	
	$content5 = 'aman ganteng';
	
	$content6 = FormGrid::widget([
    'model'=>$model,
    'form'=>$form,
    'autoGenerateColumns'=>false,
	'columns'=>2,

    'rows'=>[

        [

            'columns'=>2,
            'autoGenerateColumns'=>false, // override columns setting
            'attributes'=>[ 
				// colspan example with nested attributes
                [
					'columns'=>1,
					//'label'=>true,
					'autoGenerateColumns'=>false, // override columns setting
						'attributes'=>[ 
						
						 'aktiva'=>['type'=> Form::INPUT_RAW, 'value'=> '<legend class="text-info">AKTIVA</legend>'],
						
						'aktiva_lancar' =>['type'=> Form::INPUT_RAW, 'value'=> '<legend class="text-info"><small>1. Aktiva Lancar</small></legend>'], 
						// colspan example with nested attributes
						'aktiva_lancar_kas'=>['label'=>'Kas',  'type'=> Form::INPUT_TEXT, 'options'=>['horizontal'=>true, 'placeholder'=>'Enter Aktiva Lancar Kas...']], 

						'aktiva_lancar_bank'=>['label'=>'Bank', 'type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Lancar Bank...']], 

						'aktiva_lancar_piutang'=>['label'=>'Piutang', 'type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Lancar Piutang...']], 

						'aktiva_lancar_barang'=>['label'=>'Persediaan Barang', 'type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Lancar Barang...']], 

						'aktiva_lancar_pekerjaan'=>['label'=>'Pekerjaan Dalam Proses', 'type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Lancar Pekerjaan...']],
						
						'aktiva_tetap' =>['type'=> Form::INPUT_RAW, 'value'=> '<legend class="text-info"><small>2. Aktiva Tetap</small></legend>'], 

						'aktiva_tetap_peralatan'=>['label'=>'Peralatan Dalam Mesin', 'type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Tetap Peralatan...']], 

						'aktiva_tetap_investasi'=>['label'=>'Investasi', 'type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Tetap Investasi...']], 
						
						'kekayaan' =>['type'=> Form::INPUT_RAW, 'value'=> '<legend class="text-info"><small>3. Aktiva Lainnya</small></legend>'], 
						
						'aktiva_lainnya'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Aktiva Lainnya...']], 

					],
				],
				
				 [
					'contentBefore'=>'<legend class="text-info"><small>4. Pasiva</small></legend>',
					'columns'=>1,
					'autoGenerateColumns'=>false, // override columns setting
						'attributes'=>[ 
						
						'pasiva'=>['type'=> Form::INPUT_RAW, 'value'=> '<legend class="text-info">PASIVA</legend>'],
						
						'hutang_pendek' =>['type'=> Form::INPUT_RAW, 'value'=> '<legend class="text-info"><small>4. Hutang Jangka Pendek</small></legend>'], 
						// colspan example with nested attributes
						'pasiva_hutang_dagang'=>['label'=>'Hutang Dagang', 'type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Pasiva Hutang Dagang...']], 

						'pasiva_hutang_pajak'=>['label'=>'Hutang Pajak', 'type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Pasiva Hutang Pajak...']], 

						'pasiva_hutang_lainnya'=>['label'=>'Hutang Lainnya', 'type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Pasiva Hutang Lainnya...']], 
						
						'hutang_panjang' =>['type'=> Form::INPUT_RAW, 'value'=> '<legend class="text-info"><small>5. Hutang Jangka Panjang</small></legend>'], 

						'hutang_jangka_panjang'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Hutang Jangka Panjang...']], 
						
						'kekayaan' =>['type'=> Form::INPUT_RAW, 'value'=> '<legend class="text-info"><small>6. Kekayaan Bersih</small></legend>'], 

						'kekayaan_bersih'=>['type'=> Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter Kekayaan Bersih...']], 

					],
				],

            ],
        ],
		
	]
    
]);
	
	    $items = [
        [
            'label'=>'Identitas Pemilik Perusahaan',
            'content'=>$content1,
            'active'=>true
        ],
        [
            'label'=>'Identitas Perusahaan',
            'content'=>$content2,
            'active'=>false
        ],
		[
            'label'=>'Legalitas Perusahaan',
            'content'=>$content3,
            'active'=>false
        ],
		[
            'label'=>'Modal dan Saham',
            'content'=>$content4,
            'active'=>false
        ],
		[
            'label'=>'Kegiatan Usaha',
			'content'=>$content5,
            'linkOptions'=>['data-url'=>\yii\helpers\Url::to(['/izin-siup/usaha'])]
        ],
		[
            'label'=>'Neraca Perusahaan',
			'content'=>$content6,
            'active'=>false
        ],
       
    ];
	
	echo TabsX::widget([
    'items'=>$items,
    'position'=>TabsX::POS_ABOVE,
    'align'=>TabsX::ALIGN_LEFT,
    'bordered'=>true,
    'encodeLabels'=>false
]);
	
	
    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']);
    ActiveForm::end(); ?>

</div>

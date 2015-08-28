<?php
use yii\helpers\Html;
use yii\helpers\Url;

?>  
	
<p>
Bidang: <?=$model->bidang->nama;?> <br>

Nama Izin: <?=$model->nama;?> <br>

<?php
	$action = Url::to(['/'.$model->action . '/create']);
?>

<?= Html::a('Buat Permohonan', [$action], ['class'=>'btn btn-primary']) ?>
</p>


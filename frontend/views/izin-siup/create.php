<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\IzinSiup */

$this->title = Yii::t('app', 'Buat Permohonan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Izin Siup'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-default box-info">

    <h3><?= Html::encode($this->title) ?></h3>
    
    <?php
//    $connection = \Yii::$app->db;
//            $query = $connection->createCommand("select p.id, p.urutan, p.isi as proses, i.judul, i.isi,  p.pelaksana_id, s.nama as pelaksana from dokumen_pendukung p
//                        left join dokumen_izin i on i.id = p.dokumen_izin_id
//                        left join pelaksana s on s.id = p.pelaksana_id
//                        where p.bidang_id = :bidang_id and modul = 'Mekanisme Pelayanan'
//                        order by urutan");
//            $query->bindValue(':bidang_id', 519);
//            $docs = $query->queryAll();
//            print_r($docs);
//            $a = backend\models\base\IzinSiup::find()->asArray()->all();
//            print_r($a);
    
    ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

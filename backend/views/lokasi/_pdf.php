<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Lokasi */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lokasi'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lokasi-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Lokasi').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        'kode',
        'nama',
        'keterangan:ntext',
        'latitude',
        'longtitude',
        'propinsi',
        'kabupaten_kota',
        'kecamatan',
        'kelurahan',
        'aktif',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
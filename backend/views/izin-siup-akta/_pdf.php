<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinSiupAkta */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Izin Siup Akta'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-siup-akta-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Izin Siup Akta').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        [
            'attribute' => 'izinSiup.id',
            'label' => Yii::t('app', 'Izin Siup'),
        ],
        'nomor_akta',
        'tanggal_akta',
        'nomor_pengesahan',
        'tanggal_pengesahan',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
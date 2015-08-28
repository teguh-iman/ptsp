<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\DokumenPendukung */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dokumen Pendukung'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dokumen-pendukung-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Dokumen Pendukung').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        'kategori',
        [
            'attribute' => 'izin.id',
            'label' => Yii::t('app', 'Izin'),
        ],
        'isi:ntext',
        'file',
        'urutan',
        'tipe',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
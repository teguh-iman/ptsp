<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\IzinSiupKbli */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Izin Siup Kbli'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="izin-siup-kbli-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Izin Siup Kbli').' '. Html::encode($this->title) ?></h2>
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
        [
            'attribute' => 'kbli.id',
            'label' => Yii::t('app', 'Kbli'),
        ],
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
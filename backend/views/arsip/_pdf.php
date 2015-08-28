<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Arsip */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Arsip'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="arsip-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Arsip').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        ['attribute' => 'id', 'hidden' => true],
        'nama',
        'kode',
        'aktif',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
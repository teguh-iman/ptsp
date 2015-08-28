<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\models\Migration */

$this->title = $model->version;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Migration'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="migration-view">

    <div class="row">
        <div class="col-sm-9">
            <h2><?= Yii::t('app', 'Migration').' '. Html::encode($this->title) ?></h2>
        </div>
    </div>

    <div class="row">
<?php 
    $gridColumn = [
        'version',
        'apply_time:datetime',
    ];
    echo DetailView::widget([
        'model' => $model,
        'attributes' => $gridColumn
    ]); 
?>
    </div>
</div>
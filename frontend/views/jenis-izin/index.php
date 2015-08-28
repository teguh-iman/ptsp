<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\JenisIzinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Jenis Izins');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-izin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => '_item',
    ]) ?>

</div>

<div class="info-box-content">
    <?=
    \kartik\helpers\Html::blockquote(
            $model->nama, 'Bidang '. $model->bidang->nama
    );
echo \kartik\helpers\Html::a('Daftar', \yii\helpers\Url::toRoute(['/izin-siup/create', 'id' => $model->id]), ['class' => 'btn btn-primary']);
    ?>
</div>  
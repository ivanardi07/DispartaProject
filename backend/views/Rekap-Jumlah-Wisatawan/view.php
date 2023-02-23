<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapJumlahWisatawan */

$this->title = $model->id_rekap_wisatawan;
$this->params['breadcrumbs'][] = ['label' => 'Rekap Jumlah Wisatawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rekap-jumlah-wisatawan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_rekap_wisatawan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_rekap_wisatawan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_rekap_wisatawan',
            'bulan',
            'jenis_wisatawan',
            'jenis_destinasi',
            'jumlah',
            'total',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\LaporanKunjungan */

$this->title = $model->id_laporan_kunjungan;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Kunjungan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="laporan-kunjungan-view">
    

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_laporan_kunjungan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_laporan_kunjungan], [
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
            'id_laporan_kunjungan',
            'id_user',
            'jenis_wisatawan',
            'negara',
            'provinsi',
            'pria',
            'wanita',
            'jumlah',
        ],
    ]) ?>

</div>

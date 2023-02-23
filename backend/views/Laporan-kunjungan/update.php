<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\LaporanKunjungan */

$this->title = 'Update Laporan Kunjungan: ' . $model->id_laporan_kunjungan;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Kunjungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_laporan_kunjungan, 'url' => ['view', 'id' => $model->id_laporan_kunjungan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="laporan-kunjungan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

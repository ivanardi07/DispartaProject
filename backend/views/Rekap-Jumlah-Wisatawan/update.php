<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapJumlahWisatawan */

$this->title = 'Update Rekap Jumlah Wisatawan: ' . $model->id_rekap_wisatawan;
$this->params['breadcrumbs'][] = ['label' => 'Rekap Jumlah Wisatawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_rekap_wisatawan, 'url' => ['view', 'id' => $model->id_rekap_wisatawan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekap-jumlah-wisatawan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

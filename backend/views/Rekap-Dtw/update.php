<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapDtw */

$this->title = 'Update Rekap Dtw: ' . $model->nama_destinasi;
$this->params['breadcrumbs'][] = ['label' => 'Rekap DTW', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_destinasi, 'url' => ['view', 'id' => $model->id_dtw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekap-dtw-update">
<br>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

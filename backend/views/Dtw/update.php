<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Dtw */

$this->title = 'Update Dtw: ' . $model->nama_dtw;
$this->params['breadcrumbs'][] = ['label' => 'Dtw', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_dtw, 'url' => ['view', 'id' => $model->id_dtw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dtw-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

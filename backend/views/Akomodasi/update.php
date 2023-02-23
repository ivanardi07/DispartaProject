<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Akomodasi */

$this->title = 'Update : ' . $model->nama_akomodasi;
$this->params['breadcrumbs'][] = ['label' => 'Akomodasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_akomodasi, 'url' => ['view', 'id' => $model->id_akomodasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akomodasi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

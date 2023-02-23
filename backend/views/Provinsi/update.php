<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Provinsi */

$this->title = 'Update : ' . $model->provinsi;
$this->params['breadcrumbs'][] = ['label' => 'Provinsi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->provinsi, 'url' => ['view', 'id' => $model->id_provinsi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="provinsi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

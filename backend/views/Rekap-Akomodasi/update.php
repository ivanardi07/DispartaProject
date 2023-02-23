<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapAkomodasi */

$this->title = 'Update Rekap Akomodasi: ' . $model->id_akomodasi;
$this->params['breadcrumbs'][] = ['label' => 'Rekap Akomodasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_akomodasi, 'url' => ['view', 'id' => $model->id_akomodasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekap-akomodasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

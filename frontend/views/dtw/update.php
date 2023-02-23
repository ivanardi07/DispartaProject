<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dtw */

$this->title = 'Update Dtw: ' . $model->id_dtw;
$this->params['breadcrumbs'][] = ['label' => 'Dtws', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_dtw, 'url' => ['view', 'id' => $model->id_dtw]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dtw-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

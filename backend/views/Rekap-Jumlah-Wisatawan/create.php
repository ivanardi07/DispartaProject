<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapJumlahWisatawan */

$this->title = 'Create Rekap Jumlah Wisatawan';
$this->params['breadcrumbs'][] = ['label' => 'Rekap Jumlah Wisatawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-jumlah-wisatawan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

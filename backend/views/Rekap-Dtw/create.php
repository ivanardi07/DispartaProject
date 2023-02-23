<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapDtw */

$this->title = 'Tambah Rekap DTW';
$this->params['breadcrumbs'][] = ['label' => 'Rekap Dtws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-dtw-create">

    <h2 class="box box-primary box-header with-border"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapAkomodasi */

$this->title = 'Tambah Rekap Akomodasi';
$this->params['breadcrumbs'][] = ['label' => 'Rekap Akomodasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-akomodasi-create">

    <h2 class="box box-primary box-header with-border"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

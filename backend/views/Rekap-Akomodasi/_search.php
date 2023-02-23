<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapAkomodasiCari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-akomodasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_akomodasi') ?>

    <?= $form->field($model, 'nama_akomodasi') ?>

    <?= $form->field($model, 'kecamatan') ?>

    <?= $form->field($model, 'bulan') ?>

    <?= $form->field($model, 'minggu') ?>

    <?php // echo $form->field($model, 'jenis_wisatawan') ?>

    <?php // echo $form->field($model, 'jumlah') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

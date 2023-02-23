<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapJumlahWisatawanCari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-jumlah-wisatawan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_rekap_wisatawan') ?>

    <?= $form->field($model, 'bulan') ?>

    <?= $form->field($model, 'jenis_wisatawan') ?>

    <?= $form->field($model, 'jenis_destinasi') ?>

    <?= $form->field($model, 'jumlah') ?>

    <?php // echo $form->field($model, 'total') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

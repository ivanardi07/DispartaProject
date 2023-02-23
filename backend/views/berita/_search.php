<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BeritaCari */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="berita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_berita') ?>

    <?= $form->field($model, 'judul_berita') ?>

    <?= $form->field($model, 'deskripsi_singkat') ?>

    <?= $form->field($model, 'deskripsi') ?>

    <?= $form->field($model, 'gambar') ?>

    <?php // echo $form->field($model, 'tanggal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

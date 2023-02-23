<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LaporanKunjungan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="laporan-kunjungan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'jenis_wisatawan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'negara')->textInput() ?>

    <?= $form->field($model, 'provinsi')->textInput() ?>

    <?= $form->field($model, 'pria')->textInput() ?>

    <?= $form->field($model, 'wanita')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

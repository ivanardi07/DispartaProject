<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use backend\models\Kecamatan;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Dtw */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dtw-form">
<div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-sm-12">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_dtw')->textInput() ?>

    <?= $form->field($model, 'kecamatan')->dropDownList(['Batu' => 'Batu', 'Junrejo' => 'Junrejo', 'Bumiaji' => 'Bumiaji'],['prompt'=>'Pilih Kecamatan']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

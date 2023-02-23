<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Kecamatan;

/* @var $this yii\web\View */
/* @var $model backend\models\Akomodasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akomodasi-form">
<div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-sm-12">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_akomodasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan')->dropDownList(['Batu' => 'Batu', 'Junrejo' => 'Junrejo', 'Bumiaji' => 'Bumiaji'],['prompt'=>'Pilih Kecamatan']) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

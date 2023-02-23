<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Negara */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="negara-form">
	<div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'negara')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kawasan')->dropDownList(['Asia' => 'Asia', 'Eropa' => 'Eropa', 'Amerika' => 'Amerika', 'Oceania' => 'Oceania', 'Afrika' => 'Afrika'],['prompt'=>'Pilih Kawasan']) ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

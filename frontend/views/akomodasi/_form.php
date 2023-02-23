<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Akomodasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="akomodasi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_akomodasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

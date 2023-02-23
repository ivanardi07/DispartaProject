<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use backend\models\Akomodasi;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapAkomodasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-akomodasi-form">
    <div class="row ">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">

                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'nama_akomodasi')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(Akomodasi::find()->all(),'id_akomodasi','nama_akomodasi'),
                        'language' => 'en',
                        'options' => ['placeholder' => 'Select Akomodasi','id'=>'namaAkomodasi'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); 
                    ?>

                    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'bulan')->dropDownList(['Januari' => 'Januari', 'Februari' => 'Februari', 'Maret' => 'Maret', 'April' => 'April', 'Mei' => 'Mei', 'Juni' => 'Juni', 'Juli' => 'Juli', 'Agustus' =>'Agustus'],['prompt'=>'Pilih Bulan']) ?>

                    <?= $form->field($model, 'minggu')->textInput(['type'=>'number']) ?>

                    <?= $form->field($model, 'jumlah_wisnus')->textInput(['type'=>'number']) ?>

                    <?= $form->field($model, 'jumlah_wisman')->textInput(['type'=>'number']) ?>

                    <?= $form->field($model, 'total')->textInput(['type'=>'number']) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
$script = <<< JS
$('#namaAkomodasi').change(function(){
    var namaAkomodasi = $(this).val();

    $.get('index.php?r=akomodasi/get-kecamatan',{ namaAkomodasi : namaAkomodasi },function(data){
        var data = $.parseJSON(data);
        $('#rekapakomodasi-kecamatan').attr('value',data.kecamatan);
    });
});

JS;
$this->registerJs($script);
?>
<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Dtw;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model backend\models\RekapDtw */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-dtw-form">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <?php $form = ActiveForm::begin(); ?>

                    <?= $form->field($model, 'nama_destinasi')->widget(Select2::classname(), [
                        'data' => ArrayHelper::map(Dtw::find()->all(),'id_dtw','nama_dtw'),
                        'language' => 'en',
                        'options' => ['placeholder' => 'Select Destinasi','id'=>'namaDtw'],
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]); 
                    ?>

                    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true, 'placeholder'=> 'Masukkan Kecamatan']) ?>

                    <?= $form->field($model, 'bulan')->dropDownList(['Januari' => 'Januari', 'Februari' => 'Februari', 'Maret' => 'Maret', 'April' => 'April', 'Mei' => 'Mei', 'Juni' => 'Junis', 'Juli' => 'Juli', 'Agustus' =>'Agustus'],['prompt'=>'Pilih Bulan']) ?>

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
$('#namaDtw').change(function(){
    var namaDtw = $(this).val();

    $.get('index.php?r=dtw/get-kecamatan',{ namaDtw : namaDtw },function(data){
        var data = $.parseJSON(data);
        $('#rekapdtw-kecamatan').attr('value',data.kecamatan);
    });
});

JS;
$this->registerJs($script);
?>












    <!-- <div class="container">
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" id="harga" class="form-control" placeholder="jumlah_wisman">
                        </div>
                        <div class="form-group">
                            <input type="text" id="jumlah" class="form-control" placeholder="jumlah_wisnus">
                        </div>
                        <div class="form-group mb-0">
                            <input type="text" id="total" class="form-control" placeholder="Total" readonly="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#jumlah, #harga").keyup(function() {
            var harga  = $("#harga").val();
            var jumlah = $("#jumlah").val();

            var total = parseInt(harga) + parseInt(jumlah);
            $("#total").val(total);
        });
    });
</script> -->
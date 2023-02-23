<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use yii\frontend\models\LaporanKunjungan;

/* @var $this yii\web\View */
/* @var $model frontend\models\LaporanKunjungan */

$this->title = 'Tambah Laporan Kunjungan';
$this->params['breadcrumbs'][] = ['label' => 'Laporan Kunjungan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-kunjungan-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->
    
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Tambah Laporan Kunjungan</h4>
                  <p class="card-category">Lengkapi Form di bawah ini</p>
                </div>
                <div class="card-body">
                  <form method="post">
                  <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                    <div class="row">
                    <div class="col-md-12">                        
                      <?php echo    
                        $this->render('_form', [
                            'model' => $model,
                        ])                       
                      ?>                      
                    </div>

                      <!-- <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Dtw/Akomodasi</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="box box-primary">                                                  
                          <?php $form = ActiveForm::begin(); ?>
                            <?= $form->field($model, 'jenis_wisatawan')->dropDownList(['Wisatawan Asing' => 'Wisatawan Asing', 
                            'Wisatawan Nusantara' => 'Wisatawan Lokal'], ['prompt' => 'Pilih Jenis Wisatawan']) ?>
                          <?php ActiveForm::end(); ?>                        
                        </div>
                      </div>
                     
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                          <?php $form = ActiveForm::begin(); ?>
                            <?= $form->field($model, 'negara')->dropDownList([ 1 => 'Malaysia', 
                            'Inggris' => 'Inggris'], ['prompt' => 'Pilih Negara']) ?>
                            <?= $form->field($model, 'negara')->dropDownList([ 
                              'attribute' => 'id_negara',
                              'value' => 'negara.negara',
                          ], ['prompt' => 'Pilih Negara']) ?>
                          <?php ActiveForm::end(); ?>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <?php $form = ActiveForm::begin(); ?>
                            <?= $form->field($model, 'provinsi')->dropDownList([ 
                              'attribute' => 'id_provinsi',
                              'value' => 'provinsi.provinsi',
                            ], ['prompt' => 'Pilih Provinsi']) ?>
                          <?php ActiveForm::end(); ?>
                        </div>
                      </div>                      
                    </div>                    
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Pria</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Wanita</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Total</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      -->
                  </form>
                </div>
              </div>
            </div>
            </div>
        </div>
    </div>
   
</div>

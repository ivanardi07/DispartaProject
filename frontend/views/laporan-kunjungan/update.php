<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\LaporanKunjungan */

$this->title = 'Update Laporan Kunjungan: ' . $model->id_laporan_kunjungan;
$this->params['breadcrumbs'][] = ['label' => 'Laporan Kunjungans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_laporan_kunjungan, 'url' => ['view', 'id' => $model->id_laporan_kunjungan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="laporan-kunjungan-update">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Laporan Kunjungan</h4>
                            <p class="card-category">Lengkapi Form di bawah ini</p>
                        </div>
                        <div class="card-body">
                            <form method="post">
                            <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                            <div class="row">
                            <div class="col-md-12">     
                                <?= $this->render('_form', [
                                    'model' => $model,
                                ]) ?>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use frontend\models\Negara;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AkomodasiCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Kunjungan';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="laporan-kunjungan-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
    <h2>Laporan Kunjungan</h2>

    <?php 
        if(!Yii::$app->user->identity->nama_dtw == null) { ?>
            <p class="card-category"><?= Yii::$app->user->identity->nama_dtw; ?> </p>
            <?php } else { ?>
            <p class="card-category"><?= Yii::$app->user->identity->nama_akomodasi; ?> </p>
        <?php } ?> 

    <p>
        <?= Html::a('Tambah Data', ['create'],['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'jenis_wisatawan',
            'negara',            
            'provinsi',
            'pria',
            'wanita',
            'jumlah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

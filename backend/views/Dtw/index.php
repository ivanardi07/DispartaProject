<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\Kecamatan;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DtwCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daya Tarik Wisata';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="dtw-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-sm-7"></div>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_dtw',
            'nama_dtw',
            'kecamatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

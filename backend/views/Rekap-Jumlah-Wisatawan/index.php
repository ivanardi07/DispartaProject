<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RekapJumlahWisatawanCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekap Jumlah Wisatawans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-jumlah-wisatawan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rekap Jumlah Wisatawan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_rekap_wisatawan',
            'bulan',
            'jenis_wisatawan',
            'jenis_destinasi',
            'jumlah',
            'total',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

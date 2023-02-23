<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\pjax;
use backend\models\Kecamatan;
use backend\models\Dtw;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RekapDtwCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekap Daya Tarik Wisata';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="rekap-dtw-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border table-responsive">
    <h2><?= Html::encode($this->title) ?></h2>

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>

    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
        $gridColumns = [

                [
                    'attribute' => 'nama_destinasi',
                    'enableSorting' => true,
                    'value' => function ($model) {
                        return Dtw::findOne($model->nama_destinasi)->nama_dtw;
                    },
                ],
                'kecamatan',
                'bulan',
                'minggu',
                'jumlah_wisnus',
                'jumlah_wisman',
                'total',
        ];

    // Renders a export dropdown menu
        echo ExportMenu::widget([
            'dataProvider' => $dataProvider,
            'columns' => $gridColumns,
            'filename' => 'Rekap-DTW-'.date('d-M-Y'),
            'dropdownOptions' => [
                'label' => 'Export',
                'class' => 'btn btn-outline-secondary'
            ]
        ]);
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                    'attribute' => 'nama_destinasi',
                    'enableSorting' => true,
                    'value' => function ($model) {
                        return Dtw::findOne($model->nama_destinasi)->nama_dtw;
                    },
                ],
                'kecamatan',
                'bulan',
                'minggu',
                'jumlah_wisnus',
                'jumlah_wisman',
                'total',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
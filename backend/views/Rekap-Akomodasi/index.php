<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\pjax;
use backend\models\Akomodasi;
use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RekapAkomodasiCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekap Akomodasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="rekap-akomodasi-index">
<div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
        $gridColumns = [

                [
                    'attribute' => 'nama_akomodasi',
                    'enableSorting' => true,
                    'value' => function ($model) {
                        return Akomodasi::findOne($model->nama_akomodasi)->nama_akomodasi;
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
            'filename' => 'Rekap-Akomodasi-'.date('d-M-Y'),
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

            'id_akomodasi',
            'nama_akomodasi',
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

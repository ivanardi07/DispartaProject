<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use backend\models\Kecamatan;
use backend\models\Dtw;
/* @var $this yii\web\View */
/* @var $model backend\models\RekapDtw */

$this->title = $model->nama_destinasi;
$this->params['breadcrumbs'][] = ['label' => 'Rekap DTW', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<br>
<div class="rekap-dtw-view">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-sm-12">
    <h4>
        <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'Update : ',
                'enableSorting' => true,
                'value' => function ($model) {
                    return Dtw::findOne($model->nama_destinasi)->nama_dtw;
                },
            ],
        ],
        ]) ?>
    </h4>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_dtw], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_dtw], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_dtw',
            [
                'attribute' => 'nama_destinasi',
                'enableSorting' => true,
                'value' => function ($model) {
                    return Dtw::findOne($model->nama_destinasi)->nama_dtw;
                },
                // 'filter'=>ArrayHelper::map(Kecamatan::find()->all(),'kecamatan', 'Kecamatan'),
            ],
            'kecamatan',
            'bulan',
            'minggu',
            'jumlah_wisnus',
            'jumlah_wisman',
            'total',
        ],
    ]) ?>

</div>

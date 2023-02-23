<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Akomodasi;

/* @var $this yii\web\View */
/* @var $model backend\models\RekapAkomodasi */

$this->title = $model->id_akomodasi;
$this->params['breadcrumbs'][] = ['label' => 'Rekap Akomodasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<br>
<div class="rekap-akomodasi-view">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4>
                    <?= DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        [
                            'attribute' => 'Update : ',
                            'enableSorting' => true,
                            'value' => function ($model) {
                                return Akomodasi::findOne($model->nama_akomodasi)->nama_akomodasi;
                            },
                        ],
                    ],
                    ]) ?>
                    </h4>

                    <p>
                        <?= Html::a('Update', ['update', 'id' => $model->id_akomodasi], ['class' => 'btn btn-primary']) ?>
                        <?= Html::a('Delete', ['delete', 'id' => $model->id_akomodasi], [
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
                            'id_akomodasi',
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
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>

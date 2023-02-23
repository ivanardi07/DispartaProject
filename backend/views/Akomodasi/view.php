<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use backend\models\Kecamatan;
/* @var $this yii\web\View */
/* @var $model backend\models\Akomodasi */

$this->title = $model->nama_akomodasi;
$this->params['breadcrumbs'][] = ['label' => 'Akomodasi', 'url' => ['index']];
\yii\web\YiiAsset::register($this);
?>
<br>
<div class="akomodasi-view">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="col-sm-12">
    <h1><?= Html::encode($this->title) ?></h1>

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
            'nama_akomodasi',
            'kecamatan'
        ],
    ]) ?>

</div>

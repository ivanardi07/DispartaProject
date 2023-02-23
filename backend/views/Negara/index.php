<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\NegaraCari */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Negara';
$this->params['breadcrumbs'][] = $this->title;
?>
<br>
<div class="negara-index">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Negara', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_negara',
            'negara',
            'kawasan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

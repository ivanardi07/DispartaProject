<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dtw */

$this->title = $model->nama_dtw;
$this->params['breadcrumbs'][] = ['label' => 'Dtws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dtw-view">

    <h1><?= Html::encode($this->title) ?></h1>
    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_dtw',
            'nama_dtw',
            'nama_kecamatan',
        ],
    ]) ?>

</div>

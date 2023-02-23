<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Akomodasi */

$this->title = $model->nama_akomodasi;
$this->params['breadcrumbs'][] = ['label' => 'Akomodasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="akomodasi-view">

    <h1><?= Html::encode($this->title) ?></h1>
    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_akomodasi',
            'nama_akomodasi',
            'nama_kecamatan',
        ],
    ]) ?>

</div>

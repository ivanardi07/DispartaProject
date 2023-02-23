<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Dtw */

$this->title = 'Create Dtw';
$this->params['breadcrumbs'][] = ['label' => 'Dtws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dtw-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Akomodasi */

$this->title = 'Create Akomodasi';
$this->params['breadcrumbs'][] = ['label' => 'Akomodasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akomodasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

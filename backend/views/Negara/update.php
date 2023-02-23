<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Negara */

$this->title = 'Update : ' . $model->negara;
$this->params['breadcrumbs'][] = ['label' => 'Negara', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->negara, 'url' => ['view', 'id' => $model->id_negara]];
$this->params['breadcrumbs'][] = 'Update';
?>
<br>
<div class="negara-update">
	
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

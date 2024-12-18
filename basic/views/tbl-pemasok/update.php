<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblPemasok */

$this->title = 'Update Tbl Pemasok: ' . $model->id_pemasok;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pemasoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pemasok, 'url' => ['view', 'id' => $model->id_pemasok]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-pemasok-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
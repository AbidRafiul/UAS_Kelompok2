<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblPembelian */

$this->title = 'Update Tbl Pembelian: ' . $model->id_pembelian;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembelians', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pembelian, 'url' => ['view', 'id' => $model->id_pembelian]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-pembelian-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

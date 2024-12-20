<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblPembelian */

$this->title = 'Create Tbl Pembelian';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pembelians', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-pembelian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

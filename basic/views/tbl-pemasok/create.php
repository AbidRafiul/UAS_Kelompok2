<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblPemasok */

$this->title = 'Create Tbl Pemasok';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Pemasoks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-pemasok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

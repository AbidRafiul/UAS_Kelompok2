<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblKaryawan */

$this->title = 'Update Tbl Karyawan: ' . $model->id_karyawan;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Karyawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_karyawan, 'url' => ['view', 'id' => $model->id_karyawan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-karyawan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

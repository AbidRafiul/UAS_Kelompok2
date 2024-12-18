<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblKaryawan */

$this->title = 'Create Tbl Karyawan';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Karyawans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-karyawan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

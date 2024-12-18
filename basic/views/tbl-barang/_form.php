<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblBarang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-barang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_barang')->textInput() ?>

    <?= $form->field($model, 'nama_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'merk_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stok_barang')->textInput() ?>

    <?= $form->field($model, 'harga_barang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tbl_pemasok_id_pemasok')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblPembelian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-pembelian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pembelian')->textInput() ?>

    <?= $form->field($model, 'tgl_pembelian')->textInput() ?>

    <?= $form->field($model, 'total_pembelian')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Pegawai;

/* @var $this yii\web\View */
/* @var $model app\models\Gaji */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gaji-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    // Get Array from Database
    $items_array = $model->getPegawai();
    // $items_array = Pegawai::find()->select(['id', 'nama'])->asArray()->all();
    // var_dump($items_array);
    // die;
    ?>
    <?= $form->field($model, 'id_pegawai')->dropDownList($items_array); ?>

    <?= $form->field($model, 'gaji_pokok')->textInput() ?>

    <?= $form->field($model, 'tunjangan_istri')->textInput() ?>

    <?= $form->field($model, 'tunjangan_anak')->textInput() ?>

    <?= $form->field($model, 'tunjangan_makan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
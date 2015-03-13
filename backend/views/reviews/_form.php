<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Companies

/* @var $this yii\web\View */
/* @var $model backend\models\Reviews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reviews-form">

    <?php $form = ActiveForm::begin(); ?>

    <?#= $form->field($model, 'review_id')->textInput() ?>

    <?= $form->field($model, 'company_id')->textInput() ?>
    <?= $form->field($model, 'company_id') ->dropDownList(
        ArrayHelper::map(Companies::find()->all(), 'company_id', 'company_name'), 
        ['prompt' => 'Select Company']

    ) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'review_title')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'review_contents')->textarea(['rows' => 6]) ?>

    <?#= $form->field($model, 'review_creation_date')->textInput() ?>

    <?= $form->field($model, 'review_star_rating')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5', ], ['prompt' => 'Rating']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

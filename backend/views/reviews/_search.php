<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ReviewsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reviews-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'review_id') ?>

    <?= $form->field($model, 'company_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'review_title') ?>

    <?= $form->field($model, 'review_contents') ?>

    <?php // echo $form->field($model, 'review_creation_date') ?>

    <?php // echo $form->field($model, 'review_star_rating') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

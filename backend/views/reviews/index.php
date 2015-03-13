<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReviewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reviews';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reviews', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'review_id',
            'company_id',
            [
            'attribute' => 'Companies Name',
            'value' => 'companies.company_name'
                
            ],

            //'companiesCompany.company_name',
            'user_id',
            'review_title',
            'review_contents:ntext',
            'review_creation_date',
            'review_star_rating',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

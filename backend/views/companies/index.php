<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CompaniesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Companies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="companies-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Companies', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'company_id',
            'company_name',
            'company_address',
            'company_created_date',
            'company_status',
            [
            'attribute' => 'Company Average',
            'value' => 'reviews.AVG(reviews.review_star_rating)',

            ],

            //['attribute' => 'Company Average 2',
            //'value' => Companies::find()->joinWith('reviews', true, 'RIGHT JOIN')->where(['companies.company_id'=>'reviews.company_id'])->count();],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

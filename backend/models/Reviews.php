<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property integer $review_id
 * @property integer $company_id
 * @property integer $user_id
 * @property string $review_title
 * @property string $review_contents
 * @property string $review_creation_date
 * @property string $review_star_rating
 *
 * @property User $user
 * @property Companies $company
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id', 'user_id', 'review_title', 'review_contents', 'review_creation_date', 'review_star_rating'], 'required'],
            [['company_id', 'user_id'], 'integer'],
            [['review_contents', 'review_star_rating'], 'string'],
            [['review_creation_date'], 'safe'],
            [['review_title'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'review_id' => 'Review ID',
            'company_id' => 'Company ID',
            'user_id' => 'User ID',
            'review_title' => 'Review Title',
            'review_contents' => 'Review Contents',
            'review_creation_date' => 'Review Creation Date',
            'review_star_rating' => 'Review Star Rating',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'users_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompaniesCompany()
    {
        return $this->hasOne(Companies::className(), ['company_id' => 'companies_company_id']);
    }
}

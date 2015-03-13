<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Reviews;

/**
 * ReviewsSearch represents the model behind the search form about `backend\models\Reviews`.
 */
class ReviewsSearch extends Reviews
{

    public $companies;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['review_id', 'company_id', 'user_id'], 'integer'],
            [['review_title', 'review_contents', 'review_creation_date', 'review_star_rating','companies'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Reviews::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'review_id' => $this->review_id,
            'company_id' => $this->company_id,
            'user_id' => $this->user_id,
            'review_creation_date' => $this->review_creation_date,
        ]);

        $query->andFilterWhere(['like', 'review_title', $this->review_title])
            ->andFilterWhere(['like', 'review_contents', $this->review_contents])
            ->andFilterWhere(['like', 'review_star_rating', $this->review_star_rating]);

        return $dataProvider;
    }
}

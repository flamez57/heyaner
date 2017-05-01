<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clothes;

/**
 * SearchClothes represents the model behind the search form about `app\models\Clothes`.
 */
class SearchClothes extends Clothes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'create_time', 'update_time'], 'integer'],
            [['cloth_name', 'model', 'material', 'fashion', 'belong', 'cloth_pic'], 'safe'],
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
        $query = Clothes::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'cloth_name', $this->cloth_name])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'material', $this->material])
            ->andFilterWhere(['like', 'fashion', $this->fashion])
            ->andFilterWhere(['like', 'belong', $this->belong])
            ->andFilterWhere(['like', 'cloth_pic', $this->cloth_pic]);

        return $dataProvider;
    }
}

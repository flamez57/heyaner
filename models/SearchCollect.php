<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Collect;

/**
 * SearchCollect represents the model behind the search form about `app\models\Collect`.
 */
class SearchCollect extends Collect
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'show_time', 'create_time', 'update_time'], 'integer'],
            [['name', 'pic', 'fashion', 'material', 'type', 'craft', 'show_address', 'intro'], 'safe'],
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
        $query = Collect::find();

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
            'show_time' => $this->show_time,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'pic', $this->pic])
            ->andFilterWhere(['like', 'fashion', $this->fashion])
            ->andFilterWhere(['like', 'material', $this->material])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'craft', $this->craft])
            ->andFilterWhere(['like', 'show_address', $this->show_address])
            ->andFilterWhere(['like', 'intro', $this->intro]);

        return $dataProvider;
    }
}

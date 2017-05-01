<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Skillart;

/**
 * SearchSkillart represents the model behind the search form about `app\models\Skillart`.
 */
class SearchSkillart extends Skillart
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'art_time', 'create_time', 'update_time'], 'integer'],
            [['title', 'art_address', 'art_intro'], 'safe'],
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
        $query = Skillart::find();

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
            'art_time' => $this->art_time,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'art_address', $this->art_address])
            ->andFilterWhere(['like', 'art_intro', $this->art_intro]);

        return $dataProvider;
    }
}

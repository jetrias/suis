<?php

namespace app\modules\sala\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sala\models\Hospambulancias;

/**
 * HospambulanciasSearch represents the model behind the search form of `app\modules\sala\models\Hospambulancias`.
 */
class HospambulanciasSearch extends Hospambulancias
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_establecimiento_salud', 'establecimiento_de_salud', 'total_ambulancias', 'ambulancias_de_apoyo_con', 'ambulancias_con_soporte_vital', 'observaciones', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'safe'],
            [['id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Hospambulancias::find();

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
        ]);

        $query->andFilterWhere(['ilike', 'cod_establecimiento_salud', $this->cod_establecimiento_salud])
            ->andFilterWhere(['ilike', 'establecimiento_de_salud', $this->establecimiento_de_salud])
            ->andFilterWhere(['ilike', 'total_ambulancias', $this->total_ambulancias])
            ->andFilterWhere(['ilike', 'ambulancias_de_apoyo_con', $this->ambulancias_de_apoyo_con])
            ->andFilterWhere(['ilike', 'ambulancias_con_soporte_vital', $this->ambulancias_con_soporte_vital])
            ->andFilterWhere(['ilike', 'observaciones', $this->observaciones])
            ->andFilterWhere(['ilike', 'id_usuario', $this->id_usuario])
            ->andFilterWhere(['ilike', 'fecha_inf', $this->fecha_inf])
            ->andFilterWhere(['ilike', 'fecha_sist', $this->fecha_sist])
            ->andFilterWhere(['ilike', 'hora_sist', $this->hora_sist]);

        return $dataProvider;
    }
}

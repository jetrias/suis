<?php

namespace app\modules\sala\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sala\models\Hospagua;

/**
 * HospaguaSearch represents the model behind the search form of `app\modules\sala\models\Hospagua`.
 */
class HospaguaSearch extends Hospagua
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_establecimiento_salud', 'establecimiento_de_salud', 'agua_capacidad_total_lts', 'agua_porcentaje_de_llenado', 'agua_gasto_diario', 'agua_reservas_lts', 'agua_tanques_para_consumo_1500_lts', 'agua_por_tuberia', 'observaciones', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'safe'],
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
        $query = Hospagua::find();

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
            ->andFilterWhere(['ilike', 'agua_capacidad_total_lts', $this->agua_capacidad_total_lts])
            ->andFilterWhere(['ilike', 'agua_porcentaje_de_llenado', $this->agua_porcentaje_de_llenado])
            ->andFilterWhere(['ilike', 'agua_gasto_diario', $this->agua_gasto_diario])
            ->andFilterWhere(['ilike', 'agua_reservas_lts', $this->agua_reservas_lts])
            ->andFilterWhere(['ilike', 'agua_tanques_para_consumo_1500_lts', $this->agua_tanques_para_consumo_1500_lts])
            ->andFilterWhere(['ilike', 'agua_por_tuberia', $this->agua_por_tuberia])
            ->andFilterWhere(['ilike', 'observaciones', $this->observaciones])
            ->andFilterWhere(['ilike', 'id_usuario', $this->id_usuario])
            ->andFilterWhere(['ilike', 'fecha_inf', $this->fecha_inf])
            ->andFilterWhere(['ilike', 'fecha_sist', $this->fecha_sist])
            ->andFilterWhere(['ilike', 'hora_sist', $this->hora_sist]);

        return $dataProvider;
    }
}

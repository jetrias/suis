<?php

namespace app\modules\sala\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sala\models\Novedades;

/**
 * NovedadesSearch represents the model behind the search form of `app\modules\sala\models\Novedades`.
 */
class NovedadesSearch extends Novedades
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cod_establecimiento_salud'], 'integer'],
            [['planta_electrica', 'observaciones_planta_electrica', 'agua', 'observaciones_agua', 'observaciones_generales', 'defunciones', 'causa_defuncion', 'estatus', 'fecha_sist', 'hora_sit'], 'safe'],
            [['id_usuario'], 'number'],
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
        $query = Novedades::find();

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
            'cod_establecimiento_salud' => $this->cod_establecimiento_salud,
            'id_usuario' => $this->id_usuario,
        ]);

        $query->andFilterWhere(['ilike', 'planta_electrica', $this->planta_electrica])
            ->andFilterWhere(['ilike', 'observaciones_planta_electrica', $this->observaciones_planta_electrica])
            ->andFilterWhere(['ilike', 'agua', $this->agua])
            ->andFilterWhere(['ilike', 'observaciones_agua', $this->observaciones_agua])
            ->andFilterWhere(['ilike', 'observaciones_generales', $this->observaciones_generales])
            ->andFilterWhere(['ilike', 'defunciones', $this->defunciones])
            ->andFilterWhere(['ilike', 'causa_defuncion', $this->causa_defuncion])
            ->andFilterWhere(['ilike', 'estatus', $this->estatus])
            ->andFilterWhere(['ilike', 'fecha_sist', $this->fecha_sist])
            ->andFilterWhere(['ilike', 'hora_sit', $this->hora_sit]);

        return $dataProvider;
    }
}

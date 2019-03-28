<?php

namespace app\modules\sala\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sala\models\Salareportenovedadesss;

/**
 * SalareportenovedadesssSearch represents the model behind the search form about `app\modules\sala\models\Salareportenovedadesss`.
 */
class SalareportenovedadesssSearch extends Salareportenovedadesss
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'estado', 'nombre', 'direccion', 'telefono', 'planta_electrica', 'observaciones_planta_electrica', 'agua', 'observaciones_agua', 'observaciones_generales', 'estatus'], 'safe'],
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
        $query = Salareportenovedadesss::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'codigo', $this->codigo])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'planta_electrica', $this->planta_electrica])
            ->andFilterWhere(['like', 'observaciones_planta_electrica', $this->observaciones_planta_electrica])
            ->andFilterWhere(['like', 'agua', $this->agua])
            ->andFilterWhere(['like', 'observaciones_agua', $this->observaciones_agua])
            ->andFilterWhere(['like', 'observaciones_generales', $this->observaciones_generales])
            ->andFilterWhere(['like', 'estatus', $this->estatus]);

        return $dataProvider;
    }
}

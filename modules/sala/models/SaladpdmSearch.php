<?php

namespace app\modules\sala\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sala\models\Saladpdm;

/**
 * SaladpdmSearch represents the model behind the search form of `app\modules\sala\models\Saladpdm`.
 */
class SaladpdmSearch extends Saladpdm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'edad', 'id_usuario'], 'integer'],
            [['nombre', 'apellidos', 'sexo', 'telefono1','telefono2', 'estado', 'municipio', 'parroquia', 'direccion', 'discapacidad', 'tipo_discapacidad', 'fecha_sist', 'horas_sist'], 'safe'],
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
        $query = Saladpdm::find();

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
            'edad' => $this->edad,
            'id_usuario' => $this->id_usuario,
        ]);

        $query->andFilterWhere(['ilike', 'nombre', $this->nombre])
            ->andFilterWhere(['ilike', 'apellidos', $this->apellidos])
            ->andFilterWhere(['ilike', 'sexo', $this->sexo])
            ->andFilterWhere(['ilike', 'telefono1', $this->telefono1])
            ->andFilterWhere(['ilike', 'telefono2', $this->telefono2])
            ->andFilterWhere(['ilike', 'estado', $this->estado])
            ->andFilterWhere(['ilike', 'municipio', $this->municipio])
            ->andFilterWhere(['ilike', 'parroquia', $this->parroquia])
            ->andFilterWhere(['ilike', 'direccion', $this->direccion])
            ->andFilterWhere(['ilike', 'discapacidad', $this->discapacidad])
            ->andFilterWhere(['ilike', 'tipo_discapacidad', $this->tipo_discapacidad])
            ->andFilterWhere(['ilike', 'fecha_sist', $this->fecha_sist])
            ->andFilterWhere(['ilike', 'horas_sist', $this->horas_sist]);

        return $dataProvider;
    }
}

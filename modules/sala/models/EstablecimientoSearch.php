<?php

namespace app\modules\sala\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Establecimiento;

/**
 * EstablecimientoSearch represents the model behind the search form of `app\models\Establecimiento`.
 */
class EstablecimientoSearch extends Establecimiento
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_padre', 'id_tipo_establecimiento', 'id_parroquia', 'id_comunidad', 'id_asic', 'id_dependencia_admin', 'id_anterior', 'estatus'], 'integer'],
            [['codigo', 'nombre', 'direccion', 'telefono', 'descripcion', 'rif', 'codigo_estado', 'codigo_municipio'], 'safe'],
            [['longitud', 'latitud'], 'number'],
            [['funciona', 'eliminado'], 'boolean'],
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
        $query = Establecimiento::find();

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
            'id_padre' => $this->id_padre,
            'longitud' => $this->longitud,
            'latitud' => $this->latitud,
            'funciona' => $this->funciona,
            'id_tipo_establecimiento' => $this->id_tipo_establecimiento,
            'id_parroquia' => $this->id_parroquia,
            'id_comunidad' => $this->id_comunidad,
            'id_asic' => $this->id_asic,
            'id_dependencia_admin' => $this->id_dependencia_admin,
            'eliminado' => $this->eliminado,
            'id_anterior' => $this->id_anterior,
            'estatus' => $this->estatus,
        ]);

        $query->andFilterWhere(['ilike', 'codigo', $this->codigo])
            ->andFilterWhere(['ilike', 'nombre', $this->nombre])
            ->andFilterWhere(['ilike', 'direccion', $this->direccion])
            ->andFilterWhere(['ilike', 'telefono', $this->telefono])
            ->andFilterWhere(['ilike', 'descripcion', $this->descripcion])
            ->andFilterWhere(['ilike', 'rif', $this->rif])
            ->andFilterWhere(['ilike', 'codigo_estado', $this->codigo_estado])
            ->andFilterWhere(['ilike', 'codigo_municipio', $this->codigo_municipio]);

        return $dataProvider;
    }
}

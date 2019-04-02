<?php

namespace app\modules\sala\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sala\models\Directorio;

/**
 * DirectorioSearch represents the model behind the search form of `app\modules\sala\models\Directorio`.
 */
class DirectorioSearch extends Directorio
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'cod_establecimiento', 'id_usuario'], 'integer'],
            [['nombre_director', 'telf_director', 'nombre_agua', 'telf_agua', 'nombre_planta', 'telf_planta', 'telf_hosp', 'fecha_sist', 'hora_sist'], 'safe'],
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
        $query = Directorio::find();

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
            'cod_establecimiento' => $this->cod_establecimiento,
            'id_usuario' => $this->id_usuario,
        ]);

        $query->andFilterWhere(['ilike', 'nombre_director', $this->nombre_director])
            ->andFilterWhere(['ilike', 'telf_director', $this->telf_director])
            ->andFilterWhere(['ilike', 'nombre_agua', $this->nombre_agua])
            ->andFilterWhere(['ilike', 'telf_agua', $this->telf_agua])
            ->andFilterWhere(['ilike', 'nombre_planta', $this->nombre_planta])
            ->andFilterWhere(['ilike', 'telf_planta', $this->telf_planta])
            ->andFilterWhere(['ilike', 'telf_hosp', $this->telf_hosp])
            ->andFilterWhere(['ilike', 'fecha_sist', $this->fecha_sist])
            ->andFilterWhere(['ilike', 'hora_sist', $this->hora_sist]);

        return $dataProvider;
    }
}

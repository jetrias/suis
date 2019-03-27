<?php

namespace app\modules\sala\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sala\models\Dialisis;

/**
 * DialisisSearch represents the model behind the search form of `app\modules\sala\models\Dialisis`.
 */
class DialisisSearch extends Dialisis
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_establecimiento_salud', 'establecimiento_de_salud', 'puede_dializar', 'posee_planta_electrica', 'esta_conectado_planta_electrica_del_hospital', 'planta_electrica_operativa', 'total_plantas_electricas_operativas', 'total_plantas_electricas_inoperativas', 'planta_electrica_aceite', 'planta_electrica_cantidad_aceite_requerido', 'planta_electrica_tipo_aceite_requerido', 'planta_electrica_dissel', 'planta_electrica_cantidad_dissel_requerido', 'planta_electrica_bateria', 'planta_electrica_cantidad_baterias_requeridas', 'planta_electrica_nivel_dissel_restante', 'planta_electrica_refrigerante_necesidad', 'planta_electrica_nivel_refrigerante_restante', 'planta_electrica_nivel_aceite_restante', 'planta_electrica_tecnico_de_guardia', 'planta_electrica_telefono_tecnico_guardia', 'agua_disponible', 'capacidad_tanque', 'maquinas_operativas', 'maquinas_inoperativas', 'total_maquinas', 'pacientes_que_atiende', 'planta_de_osmosis', 'persona_responsable', 'observaciones', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'safe'],
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
        $query = Dialisis::find();

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
            ->andFilterWhere(['ilike', 'puede_dializar', $this->puede_dializar])
            ->andFilterWhere(['ilike', 'posee_planta_electrica', $this->posee_planta_electrica])
            ->andFilterWhere(['ilike', 'esta_conectado_planta_electrica_del_hospital', $this->esta_conectado_planta_electrica_del_hospital])
            ->andFilterWhere(['ilike', 'planta_electrica_operativa', $this->planta_electrica_operativa])
            ->andFilterWhere(['ilike', 'total_plantas_electricas_operativas', $this->total_plantas_electricas_operativas])
            ->andFilterWhere(['ilike', 'total_plantas_electricas_inoperativas', $this->total_plantas_electricas_inoperativas])
            ->andFilterWhere(['ilike', 'planta_electrica_aceite', $this->planta_electrica_aceite])
            ->andFilterWhere(['ilike', 'planta_electrica_cantidad_aceite_requerido', $this->planta_electrica_cantidad_aceite_requerido])
            ->andFilterWhere(['ilike', 'planta_electrica_tipo_aceite_requerido', $this->planta_electrica_tipo_aceite_requerido])
            ->andFilterWhere(['ilike', 'planta_electrica_dissel', $this->planta_electrica_dissel])
            ->andFilterWhere(['ilike', 'planta_electrica_cantidad_dissel_requerido', $this->planta_electrica_cantidad_dissel_requerido])
            ->andFilterWhere(['ilike', 'planta_electrica_bateria', $this->planta_electrica_bateria])
            ->andFilterWhere(['ilike', 'planta_electrica_cantidad_baterias_requeridas', $this->planta_electrica_cantidad_baterias_requeridas])
            ->andFilterWhere(['ilike', 'planta_electrica_nivel_dissel_restante', $this->planta_electrica_nivel_dissel_restante])
            ->andFilterWhere(['ilike', 'planta_electrica_refrigerante_necesidad', $this->planta_electrica_refrigerante_necesidad])
            ->andFilterWhere(['ilike', 'planta_electrica_nivel_refrigerante_restante', $this->planta_electrica_nivel_refrigerante_restante])
            ->andFilterWhere(['ilike', 'planta_electrica_nivel_aceite_restante', $this->planta_electrica_nivel_aceite_restante])
            ->andFilterWhere(['ilike', 'planta_electrica_tecnico_de_guardia', $this->planta_electrica_tecnico_de_guardia])
            ->andFilterWhere(['ilike', 'planta_electrica_telefono_tecnico_guardia', $this->planta_electrica_telefono_tecnico_guardia])
            ->andFilterWhere(['ilike', 'agua_disponible', $this->agua_disponible])
            ->andFilterWhere(['ilike', 'capacidad_tanque', $this->capacidad_tanque])
            ->andFilterWhere(['ilike', 'maquinas_operativas', $this->maquinas_operativas])
            ->andFilterWhere(['ilike', 'maquinas_inoperativas', $this->maquinas_inoperativas])
            ->andFilterWhere(['ilike', 'total_maquinas', $this->total_maquinas])
            ->andFilterWhere(['ilike', 'pacientes_que_atiende', $this->pacientes_que_atiende])
            ->andFilterWhere(['ilike', 'planta_de_osmosis', $this->planta_de_osmosis])
            ->andFilterWhere(['ilike', 'persona_responsable', $this->persona_responsable])
            ->andFilterWhere(['ilike', 'observaciones', $this->observaciones])
            ->andFilterWhere(['ilike', 'id_usuario', $this->id_usuario])
            ->andFilterWhere(['ilike', 'fecha_inf', $this->fecha_inf])
            ->andFilterWhere(['ilike', 'fecha_sist', $this->fecha_sist])
            ->andFilterWhere(['ilike', 'hora_sist', $this->hora_sist]);

        return $dataProvider;
    }
}

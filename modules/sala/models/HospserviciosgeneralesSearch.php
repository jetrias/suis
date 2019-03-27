<?php

namespace app\modules\sala\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sala\models\Hospserviciosgenerales;

/**
 * HospserviciosgeneralesSearch represents the model behind the search form of `app\modules\sala\models\Hospserviciosgenerales`.
 */
class HospserviciosgeneralesSearch extends Hospserviciosgenerales
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_establecimiento_salud', 'establecimiento_de_salud', 'planta_electrica_operativa', 'total_plantas_electricas_operativas', 'total_plantas_electricas_inoperativas', 'planta_electrica_aceite', 'planta_electrica_cantidad_aceite_requerido', 'planta_electrica_tipo_aceite_requerido', 'planta_electrica_dissel', 'planta_electrica_cantidad_dissel_requerido', 'planta_electrica_bateria', 'planta_electrica_cantidad_baterias_requeridas', 'planta_electrica_nivel_dissel_restante', 'planta_electrica_refrigerante_necesidad', 'planta_electrica_nivel_refrigerante_restante', 'planta_electrica_nivel_aceite_restante', 'planta_electrica_tecnico_de_guardia', 'planta_electrica_telefono_tecnico_guardia', 'refrigeracion_de_alimentos', 'gases_medicinales_operativo', 'gases_medicinales_reservas', 'equipos_esterilizacion', 'desechos', 'observaciones_desechos', 'observaciones', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'safe'],
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
        $query = Hospserviciosgenerales::find();

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
            ->andFilterWhere(['ilike', 'refrigeracion_de_alimentos', $this->refrigeracion_de_alimentos])
            ->andFilterWhere(['ilike', 'gases_medicinales_operativo', $this->gases_medicinales_operativo])
            ->andFilterWhere(['ilike', 'gases_medicinales_reservas', $this->gases_medicinales_reservas])
            ->andFilterWhere(['ilike', 'equipos_esterilizacion', $this->equipos_esterilizacion])
            ->andFilterWhere(['ilike', 'desechos', $this->desechos])
            ->andFilterWhere(['ilike', 'observaciones_desechos', $this->observaciones_desechos])
            ->andFilterWhere(['ilike', 'observaciones', $this->observaciones])
            ->andFilterWhere(['ilike', 'id_usuario', $this->id_usuario])
            ->andFilterWhere(['ilike', 'fecha_inf', $this->fecha_inf])
            ->andFilterWhere(['ilike', 'fecha_sist', $this->fecha_sist])
            ->andFilterWhere(['ilike', 'hora_sist', $this->hora_sist]);

        return $dataProvider;
    }
}

<?php

namespace app\modules\sala\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sala\models\Hospmovimientohosp;

/**
 * HospmovimientohospSearch represents the model behind the search form of `app\modules\sala\models\Hospmovimientohosp`.
 */
class HospmovimientohospSearch extends Hospmovimientohosp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo', 'establecimiento_de_salud', 'cod_establecimiento_salud', 'camas_operativas', 'pacientes_criticos_adultos', 'pacientes_criticos_ninos', 'uti_neonatal_pacientes', 'utineonatal_cupos_disponibles', 'uti_camas_operativas', 'uti_camas_disponibles', 'quirofanos_emergencias_operativos', 'quirofanos_emergencias_inoperativos', 'equipo_de_guardia', 'total_muertes_maternas', 'detalle_muerte_materna', 'servicio_hemoderivados', 'servicio_hemoderivados_operativos', 'observaciones', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'safe'],
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
        $query = Hospmovimientohosp::find();

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

        $query->andFilterWhere(['ilike', 'codigo', $this->codigo])
            ->andFilterWhere(['ilike', 'establecimiento_de_salud', $this->establecimiento_de_salud])
            ->andFilterWhere(['ilike', 'cod_establecimiento_salud', $this->cod_establecimiento_salud])
            ->andFilterWhere(['ilike', 'camas_operativas', $this->camas_operativas])
            ->andFilterWhere(['ilike', 'pacientes_criticos_adultos', $this->pacientes_criticos_adultos])
            ->andFilterWhere(['ilike', 'pacientes_criticos_ninos', $this->pacientes_criticos_ninos])
            ->andFilterWhere(['ilike', 'uti_neonatal_pacientes', $this->uti_neonatal_pacientes])
            ->andFilterWhere(['ilike', 'utineonatal_cupos_disponibles', $this->utineonatal_cupos_disponibles])
            ->andFilterWhere(['ilike', 'uti_camas_operativas', $this->uti_camas_operativas])
            ->andFilterWhere(['ilike', 'uti_camas_disponibles', $this->uti_camas_disponibles])
            ->andFilterWhere(['ilike', 'quirofanos_emergencias_operativos', $this->quirofanos_emergencias_operativos])
            ->andFilterWhere(['ilike', 'quirofanos_emergencias_inoperativos', $this->quirofanos_emergencias_inoperativos])
            ->andFilterWhere(['ilike', 'equipo_de_guardia', $this->equipo_de_guardia])
            ->andFilterWhere(['ilike', 'total_muertes_maternas', $this->total_muertes_maternas])
            ->andFilterWhere(['ilike', 'detalle_muerte_materna', $this->detalle_muerte_materna])
            ->andFilterWhere(['ilike', 'servicio_hemoderivados', $this->servicio_hemoderivados])
            ->andFilterWhere(['ilike', 'servicio_hemoderivados_operativos', $this->servicio_hemoderivados_operativos])
            ->andFilterWhere(['ilike', 'observaciones', $this->observaciones])
            ->andFilterWhere(['ilike', 'id_usuario', $this->id_usuario])
            ->andFilterWhere(['ilike', 'fecha_inf', $this->fecha_inf])
            ->andFilterWhere(['ilike', 'fecha_sist', $this->fecha_sist])
            ->andFilterWhere(['ilike', 'hora_sist', $this->hora_sist]);

        return $dataProvider;
    }
}

<?php

namespace app\modules\sala\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sala\models\Salareportegeneralss;

/**
 * SalareportegeneralssSearch represents the model behind the search form about `app\modules\sala\models\Salareportegeneralss`.
 */
class SalareportegeneralssSearch extends Salareportegeneralss
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['codigo', 'nombre', 'direccion', 'telefono', 'puede_dializar', 'pe_d', 'esta_conectado_planta_electrica_del_hospital', 'pe_diesel', 'dia_tot_pe_ope', 'dia_tot_pe_ino', 'planta_electrica_aceite', 'planta_electrica_cantidad_aceite_requerido', 'planta_electrica_tipo_aceite_requerido', 'planta_electrica_dissel', 'planta_electrica_cantidad_dissel_requerido', 'planta_electrica_bateria', 'planta_electrica_cantidad_baterias_requeridas', 'planta_electrica_nivel_dissel_restante', 'planta_electrica_refrigerante_necesidad', 'planta_electrica_nivel_refrigerante_restante', 'planta_electrica_nivel_aceite_restante', 'planta_electrica_tecnico_de_guardia', 'planta_electrica_telefono_tecnico_guardia', 'agua_disponible', 'capacidad_tanque', 'maquinas_operativas', 'maquinas_inoperativas', 'total_maquinas', 'pacientes_que_atiende', 'planta_de_osmosis', 'persona_responsable', 'observaciones', 'cod_establecimiento_salud', 'establecimiento_de_salud', 'agua_capacidad_total_lts', 'agua_porcentaje_de_llenado', 'agua_gasto_diario', 'agua_reservas_lts', 'agua_tanques_para_consumo_1500_lts', 'agua_por_tuberia', 'observaciones_agua', 'total_ambulancias', 'ambulancias_de_apoyo_con', 'ambulancias_con_soporte_vital', 'observaciones_ambulancias', 'camas_operativas', 'pacientes_criticos_adultos', 'pacientes_criticos_ninos', 'uti_neonatal_pacientes', 'utineonatal_cupos_disponibles', 'uti_camas_operativas', 'uti_camas_disponibles', 'quirofanos_emergencias_operativos', 'quirofanos_emergencias_inoperativos', 'equipo_de_guardia', 'total_muertes_maternas', 'detalle_muerte_materna', 'servicio_hemoderivados', 'servicio_hemoderivados_operativos', 'observaciones_movimiento', 'pe_ser_gen', 'ser_gen_total_pe_op', 'ser_gen_tot_pe_ino', '_ser_gen_pe_ace', 'ser_gen_can_ace', 'ser_gen_pe_tip_ace', 'ser_gen_diesel_pe', 'ser_gen_diesel_re_pe', 'ser_pe_bat', 'ser_pe_bat_req', 'ser_pe_di_res', 'ser_pe_ref_nec', 'ser_gen_ref_res', 'ser_gen_race_res', 'ser_gen_tec_pe', 'ser_gen_tec_tlf', 'refrigeracion_de_alimentos', 'gases_medicinales_operativo', 'gases_medicinales_reservas', 'equipos_esterilizacion', 'desechos', 'observaciones_desechos', 'observaciones_serv_gen', 'estado'], 'safe'],
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
        $query = Salareportegeneralss::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'codigo', $this->codigo])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'direccion', $this->direccion])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'puede_dializar', $this->puede_dializar])
            ->andFilterWhere(['like', 'pe_d', $this->pe_d])
            ->andFilterWhere(['like', 'esta_conectado_planta_electrica_del_hospital', $this->esta_conectado_planta_electrica_del_hospital])
            ->andFilterWhere(['like', 'pe_diesel', $this->pe_diesel])
            ->andFilterWhere(['like', 'dia_tot_pe_ope', $this->dia_tot_pe_ope])
            ->andFilterWhere(['like', 'dia_tot_pe_ino', $this->dia_tot_pe_ino])
            ->andFilterWhere(['like', 'planta_electrica_aceite', $this->planta_electrica_aceite])
            ->andFilterWhere(['like', 'planta_electrica_cantidad_aceite_requerido', $this->planta_electrica_cantidad_aceite_requerido])
            ->andFilterWhere(['like', 'planta_electrica_tipo_aceite_requerido', $this->planta_electrica_tipo_aceite_requerido])
            ->andFilterWhere(['like', 'planta_electrica_dissel', $this->planta_electrica_dissel])
            ->andFilterWhere(['like', 'planta_electrica_cantidad_dissel_requerido', $this->planta_electrica_cantidad_dissel_requerido])
            ->andFilterWhere(['like', 'planta_electrica_bateria', $this->planta_electrica_bateria])
            ->andFilterWhere(['like', 'planta_electrica_cantidad_baterias_requeridas', $this->planta_electrica_cantidad_baterias_requeridas])
            ->andFilterWhere(['like', 'planta_electrica_nivel_dissel_restante', $this->planta_electrica_nivel_dissel_restante])
            ->andFilterWhere(['like', 'planta_electrica_refrigerante_necesidad', $this->planta_electrica_refrigerante_necesidad])
            ->andFilterWhere(['like', 'planta_electrica_nivel_refrigerante_restante', $this->planta_electrica_nivel_refrigerante_restante])
            ->andFilterWhere(['like', 'planta_electrica_nivel_aceite_restante', $this->planta_electrica_nivel_aceite_restante])
            ->andFilterWhere(['like', 'planta_electrica_tecnico_de_guardia', $this->planta_electrica_tecnico_de_guardia])
            ->andFilterWhere(['like', 'planta_electrica_telefono_tecnico_guardia', $this->planta_electrica_telefono_tecnico_guardia])
            ->andFilterWhere(['like', 'agua_disponible', $this->agua_disponible])
            ->andFilterWhere(['like', 'capacidad_tanque', $this->capacidad_tanque])
            ->andFilterWhere(['like', 'maquinas_operativas', $this->maquinas_operativas])
            ->andFilterWhere(['like', 'maquinas_inoperativas', $this->maquinas_inoperativas])
            ->andFilterWhere(['like', 'total_maquinas', $this->total_maquinas])
            ->andFilterWhere(['like', 'pacientes_que_atiende', $this->pacientes_que_atiende])
            ->andFilterWhere(['like', 'planta_de_osmosis', $this->planta_de_osmosis])
            ->andFilterWhere(['like', 'persona_responsable', $this->persona_responsable])
            ->andFilterWhere(['like', 'observaciones', $this->observaciones])
            ->andFilterWhere(['like', 'cod_establecimiento_salud', $this->cod_establecimiento_salud])
            ->andFilterWhere(['like', 'establecimiento_de_salud', $this->establecimiento_de_salud])
            ->andFilterWhere(['like', 'agua_capacidad_total_lts', $this->agua_capacidad_total_lts])
            ->andFilterWhere(['like', 'agua_porcentaje_de_llenado', $this->agua_porcentaje_de_llenado])
            ->andFilterWhere(['like', 'agua_gasto_diario', $this->agua_gasto_diario])
            ->andFilterWhere(['like', 'agua_reservas_lts', $this->agua_reservas_lts])
            ->andFilterWhere(['like', 'agua_tanques_para_consumo_1500_lts', $this->agua_tanques_para_consumo_1500_lts])
            ->andFilterWhere(['like', 'agua_por_tuberia', $this->agua_por_tuberia])
            ->andFilterWhere(['like', 'observaciones_agua', $this->observaciones_agua])
            ->andFilterWhere(['like', 'total_ambulancias', $this->total_ambulancias])
            ->andFilterWhere(['like', 'ambulancias_de_apoyo_con', $this->ambulancias_de_apoyo_con])
            ->andFilterWhere(['like', 'ambulancias_con_soporte_vital', $this->ambulancias_con_soporte_vital])
            ->andFilterWhere(['like', 'observaciones_ambulancias', $this->observaciones_ambulancias])
            ->andFilterWhere(['like', 'camas_operativas', $this->camas_operativas])
            ->andFilterWhere(['like', 'pacientes_criticos_adultos', $this->pacientes_criticos_adultos])
            ->andFilterWhere(['like', 'pacientes_criticos_ninos', $this->pacientes_criticos_ninos])
            ->andFilterWhere(['like', 'uti_neonatal_pacientes', $this->uti_neonatal_pacientes])
            ->andFilterWhere(['like', 'utineonatal_cupos_disponibles', $this->utineonatal_cupos_disponibles])
            ->andFilterWhere(['like', 'uti_camas_operativas', $this->uti_camas_operativas])
            ->andFilterWhere(['like', 'uti_camas_disponibles', $this->uti_camas_disponibles])
            ->andFilterWhere(['like', 'quirofanos_emergencias_operativos', $this->quirofanos_emergencias_operativos])
            ->andFilterWhere(['like', 'quirofanos_emergencias_inoperativos', $this->quirofanos_emergencias_inoperativos])
            ->andFilterWhere(['like', 'equipo_de_guardia', $this->equipo_de_guardia])
            ->andFilterWhere(['like', 'total_muertes_maternas', $this->total_muertes_maternas])
            ->andFilterWhere(['like', 'detalle_muerte_materna', $this->detalle_muerte_materna])
            ->andFilterWhere(['like', 'servicio_hemoderivados', $this->servicio_hemoderivados])
            ->andFilterWhere(['like', 'servicio_hemoderivados_operativos', $this->servicio_hemoderivados_operativos])
            ->andFilterWhere(['like', 'observaciones_movimiento', $this->observaciones_movimiento])
            ->andFilterWhere(['like', 'pe_ser_gen', $this->pe_ser_gen])
            ->andFilterWhere(['like', 'ser_gen_total_pe_op', $this->ser_gen_total_pe_op])
            ->andFilterWhere(['like', 'ser_gen_tot_pe_ino', $this->ser_gen_tot_pe_ino])
            ->andFilterWhere(['like', '_ser_gen_pe_ace', $this->_ser_gen_pe_ace])
            ->andFilterWhere(['like', 'ser_gen_can_ace', $this->ser_gen_can_ace])
            ->andFilterWhere(['like', 'ser_gen_pe_tip_ace', $this->ser_gen_pe_tip_ace])
            ->andFilterWhere(['like', 'ser_gen_diesel_pe', $this->ser_gen_diesel_pe])
            ->andFilterWhere(['like', 'ser_gen_diesel_re_pe', $this->ser_gen_diesel_re_pe])
            ->andFilterWhere(['like', 'ser_pe_bat', $this->ser_pe_bat])
            ->andFilterWhere(['like', 'ser_pe_bat_req', $this->ser_pe_bat_req])
            ->andFilterWhere(['like', 'ser_pe_di_res', $this->ser_pe_di_res])
            ->andFilterWhere(['like', 'ser_pe_ref_nec', $this->ser_pe_ref_nec])
            ->andFilterWhere(['like', 'ser_gen_ref_res', $this->ser_gen_ref_res])
            ->andFilterWhere(['like', 'ser_gen_race_res', $this->ser_gen_race_res])
            ->andFilterWhere(['like', 'ser_gen_tec_pe', $this->ser_gen_tec_pe])
            ->andFilterWhere(['like', 'ser_gen_tec_tlf', $this->ser_gen_tec_tlf])
            ->andFilterWhere(['like', 'refrigeracion_de_alimentos', $this->refrigeracion_de_alimentos])
            ->andFilterWhere(['like', 'gases_medicinales_operativo', $this->gases_medicinales_operativo])
            ->andFilterWhere(['like', 'gases_medicinales_reservas', $this->gases_medicinales_reservas])
            ->andFilterWhere(['like', 'equipos_esterilizacion', $this->equipos_esterilizacion])
            ->andFilterWhere(['like', 'desechos', $this->desechos])
            ->andFilterWhere(['like', 'observaciones_desechos', $this->observaciones_desechos])
            ->andFilterWhere(['like', 'observaciones_serv_gen', $this->observaciones_serv_gen])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}

<?php

namespace app\modules\sala\models;

use Yii;

/**
 * This is the model class for table "sala.reporte_general_ss".
 *
 * @property int $id
 * @property string $codigo
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $puede_dializar
 * @property string $pe_d
 * @property string $esta_conectado_planta_electrica_del_hospital
 * @property string $pe_diesel
 * @property string $dia_tot_pe_ope
 * @property string $dia_tot_pe_ino
 * @property string $planta_electrica_aceite
 * @property string $planta_electrica_cantidad_aceite_requerido
 * @property string $planta_electrica_tipo_aceite_requerido
 * @property string $planta_electrica_dissel
 * @property string $planta_electrica_cantidad_dissel_requerido
 * @property string $planta_electrica_bateria
 * @property string $planta_electrica_cantidad_baterias_requeridas
 * @property string $planta_electrica_nivel_dissel_restante
 * @property string $planta_electrica_refrigerante_necesidad
 * @property string $planta_electrica_nivel_refrigerante_restante
 * @property string $planta_electrica_nivel_aceite_restante
 * @property string $planta_electrica_tecnico_de_guardia
 * @property string $planta_electrica_telefono_tecnico_guardia
 * @property string $agua_disponible
 * @property string $capacidad_tanque
 * @property string $maquinas_operativas
 * @property string $maquinas_inoperativas
 * @property string $total_maquinas
 * @property string $pacientes_que_atiende
 * @property string $planta_de_osmosis
 * @property string $persona_responsable
 * @property string $observaciones
 * @property string $cod_establecimiento_salud
 * @property string $establecimiento_de_salud
 * @property string $agua_capacidad_total_lts
 * @property string $agua_porcentaje_de_llenado
 * @property string $agua_gasto_diario
 * @property string $agua_reservas_lts
 * @property string $agua_tanques_para_consumo_1500_lts
 * @property string $agua_por_tuberia
 * @property string $observaciones_agua
 * @property string $total_ambulancias
 * @property string $ambulancias_de_apoyo_con
 * @property string $ambulancias_con_soporte_vital
 * @property string $observaciones_ambulancias
 * @property string $camas_operativas
 * @property string $pacientes_criticos_adultos
 * @property string $pacientes_criticos_ninos
 * @property string $uti_neonatal_pacientes
 * @property string $utineonatal_cupos_disponibles
 * @property string $uti_camas_operativas
 * @property string $uti_camas_disponibles
 * @property string $quirofanos_emergencias_operativos
 * @property string $quirofanos_emergencias_inoperativos
 * @property string $equipo_de_guardia
 * @property string $total_muertes_maternas
 * @property string $detalle_muerte_materna
 * @property string $servicio_hemoderivados
 * @property string $servicio_hemoderivados_operativos
 * @property string $observaciones_movimiento
 * @property string $pe_ser_gen
 * @property string $ser_gen_total_pe_op
 * @property string $ser_gen_tot_pe_ino
 * @property string $_ser_gen_pe_ace
 * @property string $ser_gen_can_ace
 * @property string $ser_gen_pe_tip_ace
 * @property string $ser_gen_diesel_pe
 * @property string $ser_gen_diesel_re_pe
 * @property string $ser_pe_bat
 * @property string $ser_pe_bat_req
 * @property string $ser_pe_di_res
 * @property string $ser_pe_ref_nec
 * @property string $ser_gen_ref_res
 * @property string $ser_gen_race_res
 * @property string $ser_gen_tec_pe
 * @property string $ser_gen_tec_tlf
 * @property string $refrigeracion_de_alimentos
 * @property string $gases_medicinales_operativo
 * @property string $gases_medicinales_reservas
 * @property string $equipos_esterilizacion
 * @property string $desechos
 * @property string $observaciones_desechos
 * @property string $observaciones_serv_gen
 * @property string $estado
 */
class Salareportegeneralss extends \yii\db\ActiveRecord
{
    /**
     * Primary Key
     */
    public static function primaryKey()
    {
        return ['id'];
    }


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sala.reporte_general_ss';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'codigo', 'nombre', 'direccion', 'telefono', 'puede_dializar', 'pe_d', 'esta_conectado_planta_electrica_del_hospital', 'pe_diesel', 'dia_tot_pe_ope', 'dia_tot_pe_ino', 'planta_electrica_aceite', 'planta_electrica_cantidad_aceite_requerido', 'planta_electrica_tipo_aceite_requerido', 'planta_electrica_dissel', 'planta_electrica_cantidad_dissel_requerido', 'planta_electrica_bateria', 'planta_electrica_cantidad_baterias_requeridas', 'planta_electrica_nivel_dissel_restante', 'planta_electrica_refrigerante_necesidad', 'planta_electrica_nivel_refrigerante_restante', 'planta_electrica_nivel_aceite_restante', 'planta_electrica_tecnico_de_guardia', 'planta_electrica_telefono_tecnico_guardia', 'agua_disponible', 'capacidad_tanque', 'maquinas_operativas', 'maquinas_inoperativas', 'total_maquinas', 'pacientes_que_atiende', 'planta_de_osmosis', 'persona_responsable', 'observaciones', 'cod_establecimiento_salud', 'establecimiento_de_salud', 'agua_capacidad_total_lts', 'agua_porcentaje_de_llenado', 'agua_gasto_diario', 'agua_reservas_lts', 'agua_tanques_para_consumo_1500_lts', 'agua_por_tuberia', 'observaciones_agua', 'total_ambulancias', 'ambulancias_de_apoyo_con', 'ambulancias_con_soporte_vital', 'observaciones_ambulancias', 'camas_operativas', 'pacientes_criticos_adultos', 'pacientes_criticos_ninos', 'uti_neonatal_pacientes', 'utineonatal_cupos_disponibles', 'uti_camas_operativas', 'uti_camas_disponibles', 'quirofanos_emergencias_operativos', 'quirofanos_emergencias_inoperativos', 'equipo_de_guardia', 'total_muertes_maternas', 'detalle_muerte_materna', 'servicio_hemoderivados', 'servicio_hemoderivados_operativos', 'observaciones_movimiento', 'pe_ser_gen', 'ser_gen_total_pe_op', 'ser_gen_tot_pe_ino', '_ser_gen_pe_ace', 'ser_gen_can_ace', 'ser_gen_pe_tip_ace', 'ser_gen_diesel_pe', 'ser_gen_diesel_re_pe', 'ser_pe_bat', 'ser_pe_bat_req', 'ser_pe_di_res', 'ser_pe_ref_nec', 'ser_gen_ref_res', 'ser_gen_race_res', 'ser_gen_tec_pe', 'ser_gen_tec_tlf', 'refrigeracion_de_alimentos', 'gases_medicinales_operativo', 'gases_medicinales_reservas', 'equipos_esterilizacion', 'desechos', 'observaciones_desechos', 'observaciones_serv_gen', 'estado'], 'default', 'value' => null],
            [['id'], 'integer'],
            [['observaciones_agua', 'observaciones_ambulancias', 'observaciones_movimiento', 'observaciones_desechos', 'observaciones_serv_gen'], 'string'],
            [['codigo'], 'string', 'max' => 20],
            [['nombre'], 'string', 'max' => 150],
            [['direccion'], 'string', 'max' => 250],
            [['telefono'], 'string', 'max' => 11],
            [['puede_dializar', 'pe_d', 'esta_conectado_planta_electrica_del_hospital', 'pe_diesel', 'dia_tot_pe_ope', 'dia_tot_pe_ino', 'planta_electrica_aceite', 'planta_electrica_cantidad_aceite_requerido', 'planta_electrica_tipo_aceite_requerido', 'planta_electrica_dissel', 'planta_electrica_cantidad_dissel_requerido', 'planta_electrica_bateria', 'planta_electrica_cantidad_baterias_requeridas', 'planta_electrica_nivel_dissel_restante', 'planta_electrica_refrigerante_necesidad', 'planta_electrica_nivel_refrigerante_restante', 'planta_electrica_nivel_aceite_restante', 'planta_electrica_tecnico_de_guardia', 'planta_electrica_telefono_tecnico_guardia', 'agua_disponible', 'capacidad_tanque', 'maquinas_operativas', 'maquinas_inoperativas', 'total_maquinas', 'pacientes_que_atiende', 'planta_de_osmosis', 'persona_responsable', 'observaciones', 'cod_establecimiento_salud', 'establecimiento_de_salud', 'agua_capacidad_total_lts', 'agua_porcentaje_de_llenado', 'agua_gasto_diario', 'agua_reservas_lts', 'agua_tanques_para_consumo_1500_lts', 'agua_por_tuberia', 'total_ambulancias', 'ambulancias_de_apoyo_con', 'ambulancias_con_soporte_vital', 'camas_operativas', 'pacientes_criticos_adultos', 'pacientes_criticos_ninos', 'uti_neonatal_pacientes', 'utineonatal_cupos_disponibles', 'uti_camas_operativas', 'uti_camas_disponibles', 'quirofanos_emergencias_operativos', 'quirofanos_emergencias_inoperativos', 'equipo_de_guardia', 'total_muertes_maternas', 'detalle_muerte_materna', 'servicio_hemoderivados', 'servicio_hemoderivados_operativos', 'pe_ser_gen', 'ser_gen_total_pe_op', 'ser_gen_tot_pe_ino', '_ser_gen_pe_ace', 'ser_gen_can_ace', 'ser_gen_pe_tip_ace', 'ser_gen_diesel_pe', 'ser_gen_diesel_re_pe', 'ser_pe_bat', 'ser_pe_bat_req', 'ser_pe_di_res', 'ser_pe_ref_nec', 'ser_gen_ref_res', 'ser_gen_race_res', 'ser_gen_tec_pe', 'ser_gen_tec_tlf', 'refrigeracion_de_alimentos', 'gases_medicinales_operativo', 'gases_medicinales_reservas', 'equipos_esterilizacion', 'desechos'], 'string', 'max' => 255],
            [['estado'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'codigo' => Yii::t('app', 'Codigo'),
            'nombre' => Yii::t('app', 'Nombre'),
            'direccion' => Yii::t('app', 'Direccion'),
            'telefono' => Yii::t('app', 'Telefono'),
            'puede_dializar' => Yii::t('app', 'Puede Dializar'),
            'pe_d' => Yii::t('app', 'Pe D'),
            'esta_conectado_planta_electrica_del_hospital' => Yii::t('app', 'Esta Conectado Planta Electrica Del Hospital'),
            'pe_diesel' => Yii::t('app', 'Pe Diesel'),
            'dia_tot_pe_ope' => Yii::t('app', 'Dia Tot Pe Ope'),
            'dia_tot_pe_ino' => Yii::t('app', 'Dia Tot Pe Ino'),
            'planta_electrica_aceite' => Yii::t('app', 'Planta Electrica Aceite'),
            'planta_electrica_cantidad_aceite_requerido' => Yii::t('app', 'Planta Electrica Cantidad Aceite Requerido'),
            'planta_electrica_tipo_aceite_requerido' => Yii::t('app', 'Planta Electrica Tipo Aceite Requerido'),
            'planta_electrica_dissel' => Yii::t('app', 'Planta Electrica Dissel'),
            'planta_electrica_cantidad_dissel_requerido' => Yii::t('app', 'Planta Electrica Cantidad Dissel Requerido'),
            'planta_electrica_bateria' => Yii::t('app', 'Planta Electrica Bateria'),
            'planta_electrica_cantidad_baterias_requeridas' => Yii::t('app', 'Planta Electrica Cantidad Baterias Requeridas'),
            'planta_electrica_nivel_dissel_restante' => Yii::t('app', 'Planta Electrica Nivel Dissel Restante'),
            'planta_electrica_refrigerante_necesidad' => Yii::t('app', 'Planta Electrica Refrigerante Necesidad'),
            'planta_electrica_nivel_refrigerante_restante' => Yii::t('app', 'Planta Electrica Nivel Refrigerante Restante'),
            'planta_electrica_nivel_aceite_restante' => Yii::t('app', 'Planta Electrica Nivel Aceite Restante'),
            'planta_electrica_tecnico_de_guardia' => Yii::t('app', 'Planta Electrica Tecnico De Guardia'),
            'planta_electrica_telefono_tecnico_guardia' => Yii::t('app', 'Planta Electrica Telefono Tecnico Guardia'),
            'agua_disponible' => Yii::t('app', 'Agua Disponible'),
            'capacidad_tanque' => Yii::t('app', 'Capacidad Tanque'),
            'maquinas_operativas' => Yii::t('app', 'Maquinas Operativas'),
            'maquinas_inoperativas' => Yii::t('app', 'Maquinas Inoperativas'),
            'total_maquinas' => Yii::t('app', 'Total Maquinas'),
            'pacientes_que_atiende' => Yii::t('app', 'Pacientes Que Atiende'),
            'planta_de_osmosis' => Yii::t('app', 'Planta De Osmosis'),
            'persona_responsable' => Yii::t('app', 'Persona Responsable'),
            'observaciones' => Yii::t('app', 'Observaciones'),
            'cod_establecimiento_salud' => Yii::t('app', 'Cod Establecimiento Salud'),
            'establecimiento_de_salud' => Yii::t('app', 'Establecimiento De Salud'),
            'agua_capacidad_total_lts' => Yii::t('app', 'Agua Capacidad Total Lts'),
            'agua_porcentaje_de_llenado' => Yii::t('app', 'Agua Porcentaje De Llenado'),
            'agua_gasto_diario' => Yii::t('app', 'Agua Gasto Diario'),
            'agua_reservas_lts' => Yii::t('app', 'Agua Reservas Lts'),
            'agua_tanques_para_consumo_1500_lts' => Yii::t('app', 'Agua Tanques Para Consumo 1500 Lts'),
            'agua_por_tuberia' => Yii::t('app', 'Agua Por Tuberia'),
            'observaciones_agua' => Yii::t('app', 'Observaciones Agua'),
            'total_ambulancias' => Yii::t('app', 'Total Ambulancias'),
            'ambulancias_de_apoyo_con' => Yii::t('app', 'Ambulancias De Apoyo Con'),
            'ambulancias_con_soporte_vital' => Yii::t('app', 'Ambulancias Con Soporte Vital'),
            'observaciones_ambulancias' => Yii::t('app', 'Observaciones Ambulancias'),
            'camas_operativas' => Yii::t('app', 'Camas Operativas'),
            'pacientes_criticos_adultos' => Yii::t('app', 'Pacientes Criticos Adultos'),
            'pacientes_criticos_ninos' => Yii::t('app', 'Pacientes Criticos Ninos'),
            'uti_neonatal_pacientes' => Yii::t('app', 'Uti Neonatal Pacientes'),
            'utineonatal_cupos_disponibles' => Yii::t('app', 'Utineonatal Cupos Disponibles'),
            'uti_camas_operativas' => Yii::t('app', 'Uti Camas Operativas'),
            'uti_camas_disponibles' => Yii::t('app', 'Uti Camas Disponibles'),
            'quirofanos_emergencias_operativos' => Yii::t('app', 'Quirofanos Emergencias Operativos'),
            'quirofanos_emergencias_inoperativos' => Yii::t('app', 'Quirofanos Emergencias Inoperativos'),
            'equipo_de_guardia' => Yii::t('app', 'Equipo De Guardia'),
            'total_muertes_maternas' => Yii::t('app', 'Total Muertes Maternas'),
            'detalle_muerte_materna' => Yii::t('app', 'Detalle Muerte Materna'),
            'servicio_hemoderivados' => Yii::t('app', 'Servicio Hemoderivados'),
            'servicio_hemoderivados_operativos' => Yii::t('app', 'Servicio Hemoderivados Operativos'),
            'observaciones_movimiento' => Yii::t('app', 'Observaciones Movimiento'),
            'pe_ser_gen' => Yii::t('app', 'Pe Ser Gen'),
            'ser_gen_total_pe_op' => Yii::t('app', 'Ser Gen Total Pe Op'),
            'ser_gen_tot_pe_ino' => Yii::t('app', 'Ser Gen Tot Pe Ino'),
            '_ser_gen_pe_ace' => Yii::t('app', 'Ser Gen Pe Ace'),
            'ser_gen_can_ace' => Yii::t('app', 'Ser Gen Can Ace'),
            'ser_gen_pe_tip_ace' => Yii::t('app', 'Ser Gen Pe Tip Ace'),
            'ser_gen_diesel_pe' => Yii::t('app', 'Ser Gen Diesel Pe'),
            'ser_gen_diesel_re_pe' => Yii::t('app', 'Ser Gen Diesel Re Pe'),
            'ser_pe_bat' => Yii::t('app', 'Ser Pe Bat'),
            'ser_pe_bat_req' => Yii::t('app', 'Ser Pe Bat Req'),
            'ser_pe_di_res' => Yii::t('app', 'Ser Pe Di Res'),
            'ser_pe_ref_nec' => Yii::t('app', 'Ser Pe Ref Nec'),
            'ser_gen_ref_res' => Yii::t('app', 'Ser Gen Ref Res'),
            'ser_gen_race_res' => Yii::t('app', 'Ser Gen Race Res'),
            'ser_gen_tec_pe' => Yii::t('app', 'Ser Gen Tec Pe'),
            'ser_gen_tec_tlf' => Yii::t('app', 'Ser Gen Tec Tlf'),
            'refrigeracion_de_alimentos' => Yii::t('app', 'Refrigeracion De Alimentos'),
            'gases_medicinales_operativo' => Yii::t('app', 'Gases Medicinales Operativo'),
            'gases_medicinales_reservas' => Yii::t('app', 'Gases Medicinales Reservas'),
            'equipos_esterilizacion' => Yii::t('app', 'Equipos Esterilizacion'),
            'desechos' => Yii::t('app', 'Desechos'),
            'observaciones_desechos' => Yii::t('app', 'Observaciones Desechos'),
            'observaciones_serv_gen' => Yii::t('app', 'Observaciones Serv Gen'),
            'estado' => Yii::t('app', 'Estado'),
        ];
    }
}

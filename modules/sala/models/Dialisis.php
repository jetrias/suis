<?php

namespace app\modules\sala\models;

use Yii;

/**
 * This is the model class for table "sala.dialisis".
 *

 * @property string $cod_establecimiento_salud
 * @property string $establecimiento_de_salud
 * @property string $puede_dializar
 * @property string $posee_planta_electrica
 * @property string $esta_conectado_planta_electrica_del_hospital
 * @property string $planta_electrica_operativa
 * @property string $total_plantas_electricas_operativas
 * @property string $total_plantas_electricas_inoperativas
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
 * @property string $id_usuario
 * @property string $fecha_inf
 * @property string $fecha_sist
 * @property string $hora_sist
 * @property int $id
 */
class Dialisis extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sala.dialisis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_establecimiento_salud', 'establecimiento_de_salud', 'puede_dializar', 'posee_planta_electrica', 'esta_conectado_planta_electrica_del_hospital', 'planta_electrica_operativa', 'total_plantas_electricas_operativas', 'total_plantas_electricas_inoperativas', 'planta_electrica_aceite', 'planta_electrica_cantidad_aceite_requerido', 'planta_electrica_tipo_aceite_requerido', 'planta_electrica_dissel', 'planta_electrica_cantidad_dissel_requerido', 'planta_electrica_bateria', 'planta_electrica_cantidad_baterias_requeridas', 'planta_electrica_nivel_dissel_restante', 'planta_electrica_refrigerante_necesidad', 'planta_electrica_nivel_refrigerante_restante', 'planta_electrica_nivel_aceite_restante', 'planta_electrica_tecnico_de_guardia', 'planta_electrica_telefono_tecnico_guardia', 'agua_disponible', 'capacidad_tanque', 'maquinas_operativas', 'maquinas_inoperativas', 'total_maquinas', 'pacientes_que_atiende', 'planta_de_osmosis', 'persona_responsable', 'observaciones', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'default', 'value' => null],
            [['cod_establecimiento_salud', 'establecimiento_de_salud', 'puede_dializar', 'posee_planta_electrica', 'esta_conectado_planta_electrica_del_hospital', 'planta_electrica_operativa', 'total_plantas_electricas_operativas', 'total_plantas_electricas_inoperativas', 'planta_electrica_aceite', 'planta_electrica_cantidad_aceite_requerido', 'planta_electrica_tipo_aceite_requerido', 'planta_electrica_dissel', 'planta_electrica_cantidad_dissel_requerido', 'planta_electrica_bateria', 'planta_electrica_cantidad_baterias_requeridas', 'planta_electrica_nivel_dissel_restante', 'planta_electrica_refrigerante_necesidad', 'planta_electrica_nivel_refrigerante_restante', 'planta_electrica_nivel_aceite_restante', 'planta_electrica_tecnico_de_guardia', 'planta_electrica_telefono_tecnico_guardia', 'agua_disponible', 'capacidad_tanque', 'maquinas_operativas', 'maquinas_inoperativas', 'total_maquinas', 'pacientes_que_atiende', 'planta_de_osmosis', 'persona_responsable', 'observaciones', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'string', 'max' => 255]
                    ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [

            'establecimiento_de_salud' => Yii::t('app', 'Establecimiento De Salud'),
            'puede_dializar' => Yii::t('app', 'Puede Dializar'),
            'posee_planta_electrica' => Yii::t('app', 'Posee Planta Electrica'),
            'esta_conectado_planta_electrica_del_hospital' => Yii::t('app', 'Esta Conectado Planta Electrica Del Hospital'),
            'planta_electrica_operativa' => Yii::t('app', 'Planta Electrica Operativa'),
            'total_plantas_electricas_operativas' => Yii::t('app', 'Total Plantas Electricas Operativas'),
            'total_plantas_electricas_inoperativas' => Yii::t('app', 'Total Plantas Electricas Inoperativas'),
            'planta_electrica_aceite' => Yii::t('app', 'Planta Electrica Aceite'),
            'planta_electrica_cantidad_aceite_requerido' => Yii::t('app', 'Planta Electrica Cantidad Aceite Requerido'),
            'planta_electrica_tipo_aceite_requerido' => Yii::t('app', 'Planta Electrica Tipo Aceite Requerido'),
            'planta_electrica_dissel' => Yii::t('app', 'Planta Electrica Diesel'),
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
            'id_usuario' => Yii::t('app', 'Id Usuario'),
            'fecha_inf' => Yii::t('app', 'Fecha Inf'),
            'fecha_sist' => Yii::t('app', 'Fecha Sist'),
            'hora_sist' => Yii::t('app', 'Hora Sist'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}

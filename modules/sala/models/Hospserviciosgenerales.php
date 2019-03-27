<?php

namespace app\modules\sala\models;

use Yii;

/**
 * This is the model class for table "sala.hosp_servicios_generales".
 *
 * @property string $cod_establecimiento_salud
 * @property string $establecimiento_de_salud
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
 * @property string $refrigeracion_de_alimentos
 * @property string $gases_medicinales_operativo
 * @property string $gases_medicinales_reservas
 * @property string $equipos_esterilizacion
 * @property string $desechos
 * @property string $observaciones_desechos
 * @property string $observaciones
 * @property string $id_usuario
 * @property string $fecha_inf
 * @property string $fecha_sist
 * @property string $hora_sist
 * @property int $id
 */
class Hospserviciosgenerales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sala.hosp_servicios_generales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_establecimiento_salud', 'establecimiento_de_salud', 'planta_electrica_operativa', 'total_plantas_electricas_operativas', 'total_plantas_electricas_inoperativas', 'planta_electrica_aceite', 'planta_electrica_cantidad_aceite_requerido', 'planta_electrica_tipo_aceite_requerido', 'planta_electrica_dissel', 'planta_electrica_cantidad_dissel_requerido', 'planta_electrica_bateria', 'planta_electrica_cantidad_baterias_requeridas', 'planta_electrica_nivel_dissel_restante', 'planta_electrica_refrigerante_necesidad', 'planta_electrica_nivel_refrigerante_restante', 'planta_electrica_nivel_aceite_restante', 'planta_electrica_tecnico_de_guardia', 'planta_electrica_telefono_tecnico_guardia', 'refrigeracion_de_alimentos', 'gases_medicinales_operativo', 'gases_medicinales_reservas', 'equipos_esterilizacion', 'desechos', 'observaciones_desechos', 'observaciones', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'default', 'value' => null],
            [['observaciones_desechos', 'observaciones'], 'string'],
            [['cod_establecimiento_salud', 'establecimiento_de_salud', 'planta_electrica_operativa', 'total_plantas_electricas_operativas', 'total_plantas_electricas_inoperativas', 'planta_electrica_aceite', 'planta_electrica_cantidad_aceite_requerido', 'planta_electrica_tipo_aceite_requerido', 'planta_electrica_dissel', 'planta_electrica_cantidad_dissel_requerido', 'planta_electrica_bateria', 'planta_electrica_cantidad_baterias_requeridas', 'planta_electrica_nivel_dissel_restante', 'planta_electrica_refrigerante_necesidad', 'planta_electrica_nivel_refrigerante_restante', 'planta_electrica_nivel_aceite_restante', 'planta_electrica_tecnico_de_guardia', 'planta_electrica_telefono_tecnico_guardia', 'refrigeracion_de_alimentos', 'gases_medicinales_operativo', 'gases_medicinales_reservas', 'equipos_esterilizacion', 'desechos', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cod_establecimiento_salud' => Yii::t('app', 'Cod Establecimiento Salud'),
            'establecimiento_de_salud' => Yii::t('app', 'Establecimiento De Salud'),
            'planta_electrica_operativa' => Yii::t('app', 'Planta Electrica Operativa?'),
            'total_plantas_electricas_operativas' => Yii::t('app', 'Total Plantas Electricas Operativas'),
            'total_plantas_electricas_inoperativas' => Yii::t('app', 'Total Plantas Electricas Inoperativas'),
            'planta_electrica_aceite' => Yii::t('app', 'Necesita Aceite Planta Electrica?'),
            'planta_electrica_cantidad_aceite_requerido' => Yii::t('app', 'Cantidad Aceite Requerido Planta Electrica'),
            'planta_electrica_tipo_aceite_requerido' => Yii::t('app', 'Tipo Aceite Requerido Planta Electrica'),
            'planta_electrica_dissel' => Yii::t('app', 'Necesita Diesel ls Planta Electrica?'),
            'planta_electrica_cantidad_dissel_requerido' => Yii::t('app', 'Cantidad Diesel Requerido Planta Electrica'),
            'planta_electrica_bateria' => Yii::t('app', 'Requiere Bateria Planta Electrica'),
            'planta_electrica_cantidad_baterias_requeridas' => Yii::t('app', 'Cantidad Baterias Requeridas Planta Electrica'),
            'planta_electrica_nivel_dissel_restante' => Yii::t('app', 'Nivel Dissel Restante Planta Electrica'),
            'planta_electrica_refrigerante_necesidad' => Yii::t('app', 'Necesita Refrigerante Planta Electrica'),
            'planta_electrica_nivel_refrigerante_restante' => Yii::t('app', 'Nivel Refrigerante Restante Planta Electrica'),
            'planta_electrica_nivel_aceite_restante' => Yii::t('app', 'Nivel Aceite Restante Planta Electrica '),
            'planta_electrica_tecnico_de_guardia' => Yii::t('app', 'Tecnico De Guardia Planta Electrica'),
            'planta_electrica_telefono_tecnico_guardia' => Yii::t('app', 'Telefono Tecnico Guardia Planta Electrica'),
            'refrigeracion_de_alimentos' => Yii::t('app', 'Tiene Refrigeracion De Alimentos?'),
            'gases_medicinales_operativo' => Yii::t('app', 'Gases Medicinales Operativo'),
            'gases_medicinales_reservas' => Yii::t('app', 'Gases Medicinales Reservas'),
            'equipos_esterilizacion' => Yii::t('app', 'Equipos Esterilizacion'),
            'desechos' => Yii::t('app', 'Desechos Biologicos'),
            'observaciones_desechos' => Yii::t('app', 'Observaciones Desechos Biologicos'),
            'observaciones' => Yii::t('app', 'Observaciones'),
            'id_usuario' => Yii::t('app', 'Id Usuario'),
            'fecha_inf' => Yii::t('app', 'Fecha Inf'),
            'fecha_sist' => Yii::t('app', 'Fecha Sist'),
            'hora_sist' => Yii::t('app', 'Hora Sist'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}

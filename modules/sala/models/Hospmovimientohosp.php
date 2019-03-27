<?php

namespace app\modules\sala\models;

use Yii;

/**
 * This is the model class for table "sala.hosp_movimiento_hosp".
 *
 * @property string $codigo
 * @property string $establecimiento_de_salud
 * @property string $cod_establecimiento_salud
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
 * @property string $observaciones
 * @property string $id_usuario
 * @property string $fecha_inf
 * @property string $fecha_sist
 * @property string $hora_sist
 * @property int $id
 */
class Hospmovimientohosp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sala.hosp_movimiento_hosp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo', 'establecimiento_de_salud', 'cod_establecimiento_salud', 'camas_operativas', 'pacientes_criticos_adultos', 'pacientes_criticos_ninos', 'uti_neonatal_pacientes', 'utineonatal_cupos_disponibles', 'uti_camas_operativas', 'uti_camas_disponibles', 'quirofanos_emergencias_operativos', 'quirofanos_emergencias_inoperativos', 'equipo_de_guardia', 'total_muertes_maternas', 'detalle_muerte_materna', 'servicio_hemoderivados', 'servicio_hemoderivados_operativos', 'observaciones', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'default', 'value' => null],
            [['observaciones'], 'string'],
            [['codigo', 'establecimiento_de_salud', 'cod_establecimiento_salud', 'camas_operativas', 'pacientes_criticos_adultos', 'pacientes_criticos_ninos', 'uti_neonatal_pacientes', 'utineonatal_cupos_disponibles', 'uti_camas_operativas', 'uti_camas_disponibles', 'quirofanos_emergencias_operativos', 'quirofanos_emergencias_inoperativos', 'equipo_de_guardia', 'total_muertes_maternas', 'detalle_muerte_materna', 'servicio_hemoderivados', 'servicio_hemoderivados_operativos', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo' => Yii::t('app', 'Codigo'),
            'establecimiento_de_salud' => Yii::t('app', 'Establecimiento De Salud'),
            'cod_establecimiento_salud' => Yii::t('app', 'Cod Establecimiento Salud'),
            'camas_operativas' => Yii::t('app', 'Nro. de Camas Operativas'),
            'pacientes_criticos_adultos' => Yii::t('app', 'Tiene Pacientes Criticos Adultos?'),
            'pacientes_criticos_ninos' => Yii::t('app', 'Tiene Pacientes Criticos Ninos?'),
            'uti_neonatal_pacientes' => Yii::t('app', 'tiene Uti Neonatal'),
            'utineonatal_cupos_disponibles' => Yii::t('app', ' Cupos Disponibles Uti neonatal'),
            'uti_camas_operativas' => Yii::t('app', 'Uti Camas Operativas'),
            'uti_camas_disponibles' => Yii::t('app', 'Uti Camas Disponibles'),
            'quirofanos_emergencias_operativos' => Yii::t('app', 'Quirofanos Emergencias Operativos'),
            'quirofanos_emergencias_inoperativos' => Yii::t('app', 'Quirofanos Emergencias Inoperativos'),
            'equipo_de_guardia' => Yii::t('app', 'El Equipo De Guardia esta completo?'),
            'total_muertes_maternas' => Yii::t('app', 'Total Muertes Maternas'),
            'detalle_muerte_materna' => Yii::t('app', 'Detalle Muerte Materna'),
            'servicio_hemoderivados' => Yii::t('app', 'Tiene Servicio Hemoderivados'),
            'servicio_hemoderivados_operativos' => Yii::t('app', 'Servicio Hemoderivados Operativos'),
            'observaciones' => Yii::t('app', 'Observaciones'),
            'id_usuario' => Yii::t('app', 'Id Usuario'),
            'fecha_inf' => Yii::t('app', 'Fecha Inf'),
            'fecha_sist' => Yii::t('app', 'Fecha Sist'),
            'hora_sist' => Yii::t('app', 'Hora Sist'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}

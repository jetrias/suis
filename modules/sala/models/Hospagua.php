<?php

namespace app\modules\sala\models;

use Yii;

/**
 * This is the model class for table "sala.hosp_agua".
 *
 * @property string $cod_establecimiento_salud
 * @property string $establecimiento_de_salud
 * @property string $agua_capacidad_total_lts
 * @property string $agua_porcentaje_de_llenado
 * @property string $agua_gasto_diario
 * @property string $agua_reservas_lts
 * @property string $agua_tanques_para_consumo_1500_lts
 * @property string $agua_por_tuberia
 * @property string $observaciones
 * @property string $id_usuario
 * @property string $fecha_inf
 * @property string $fecha_sist
 * @property string $hora_sist
 * @property int $id
 */
class Hospagua extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sala.hosp_agua';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_establecimiento_salud', 'establecimiento_de_salud', 'agua_capacidad_total_lts', 'agua_porcentaje_de_llenado', 'agua_gasto_diario', 'agua_reservas_lts', 'agua_tanques_para_consumo_1500_lts', 'agua_por_tuberia', 'observaciones', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'default', 'value' => null],
            [['observaciones'], 'string'],
            [['cod_establecimiento_salud', 'establecimiento_de_salud', 'agua_capacidad_total_lts', 'agua_porcentaje_de_llenado', 'agua_gasto_diario', 'agua_reservas_lts', 'agua_tanques_para_consumo_1500_lts', 'agua_por_tuberia', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'string', 'max' => 255],
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
            'agua_capacidad_total_lts' => Yii::t('app', 'Agua Capacidad Total Lts'),
            'agua_porcentaje_de_llenado' => Yii::t('app', 'Agua Porcentaje De Llenado'),
            'agua_gasto_diario' => Yii::t('app', 'Agua Gasto Diario'),
            'agua_reservas_lts' => Yii::t('app', 'Agua Reservas Lts'),
            'agua_tanques_para_consumo_1500_lts' => Yii::t('app', 'Necesita Tanques Agua Para Consumo 1500 Lts (solo DTTO)'),
            'agua_por_tuberia' => Yii::t('app', 'Agua Por Tuberia'),
            'observaciones' => Yii::t('app', 'Observaciones'),
            'id_usuario' => Yii::t('app', 'Id Usuario'),
            'fecha_inf' => Yii::t('app', 'Fecha Inf'),
            'fecha_sist' => Yii::t('app', 'Fecha Sist'),
            'hora_sist' => Yii::t('app', 'Hora Sist'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}

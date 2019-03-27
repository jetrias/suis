<?php

namespace app\modules\sala\models;

use Yii;

/**
 * This is the model class for table "sala.hosp_ambulancias".
 *
 * @property string $cod_establecimiento_salud
 * @property string $establecimiento_de_salud
 * @property string $total_ambulancias
 * @property string $ambulancias_de_apoyo_con
 * @property string $ambulancias_con_soporte_vital
 * @property string $observaciones
 * @property string $id_usuario
 * @property string $fecha_inf
 * @property string $fecha_sist
 * @property string $hora_sist
 * @property int $id
 */
class Hospambulancias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sala.hosp_ambulancias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_establecimiento_salud', 'establecimiento_de_salud', 'total_ambulancias', 'ambulancias_de_apoyo_con', 'ambulancias_con_soporte_vital', 'observaciones', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'default', 'value' => null],
            [['observaciones'], 'string'],
            [['cod_establecimiento_salud', 'establecimiento_de_salud', 'total_ambulancias', 'ambulancias_de_apoyo_con', 'ambulancias_con_soporte_vital', 'id_usuario', 'fecha_inf', 'fecha_sist', 'hora_sist'], 'string', 'max' => 255],
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
            'total_ambulancias' => Yii::t('app', 'Total Ambulancias'),
            'ambulancias_de_apoyo_con' => Yii::t('app', 'Ambulancias De Apoyo Con'),
            'ambulancias_con_soporte_vital' => Yii::t('app', 'Ambulancias Con Soporte Vital'),
            'observaciones' => Yii::t('app', 'Observaciones'),
            'id_usuario' => Yii::t('app', 'Id Usuario'),
            'fecha_inf' => Yii::t('app', 'Fecha Inf'),
            'fecha_sist' => Yii::t('app', 'Fecha Sist'),
            'hora_sist' => Yii::t('app', 'Hora Sist'),
            'id' => Yii::t('app', 'ID'),
        ];
    }
}

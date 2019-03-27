<?php

namespace app\modules\sala\models;

use Yii;

/**
 * This is the model class for table "sala.novedades".
 *
 * @property int $id
 * @property int $cod_establecimiento_salud
 * @property string $planta_electrica
 * @property string $observaciones_planta_electrica
 * @property string $agua
 * @property string $observaciones_agua
 * @property string $observaciones_generales
 * @property string $defunciones
 * @property string $causa_defuncion
 * @property string $estatus
 * @property string $fecha_sist
 * @property string $hora_sit
 * @property double $id_usuario
 */
class Novedades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sala.novedades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_establecimiento_salud', 'planta_electrica', 'observaciones_planta_electrica', 'agua', 'observaciones_agua', 'observaciones_generales', 'defunciones', 'causa_defuncion', 'estatus', 'fecha_sist', 'hora_sit', 'id_usuario'], 'default', 'value' => null],
            [['cod_establecimiento_salud'], 'required'],
            [['cod_establecimiento_salud'], 'integer'],
            [['observaciones_planta_electrica', 'observaciones_agua', 'observaciones_generales'], 'string'],
            [['id_usuario'], 'number'],
            [['planta_electrica', 'agua', 'defunciones', 'causa_defuncion', 'estatus'], 'string', 'max' => 255],
            [['fecha_sist'], 'string', 'max' => 10],
            [['hora_sit'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'cod_establecimiento_salud' => Yii::t('app', 'Cod Establecimiento Salud'),
            'planta_electrica' => Yii::t('app', 'Planta Electrica'),
            'observaciones_planta_electrica' => Yii::t('app', 'Observaciones Planta Electrica'),
            'agua' => Yii::t('app', 'Agua'),
            'observaciones_agua' => Yii::t('app', 'Observaciones Agua'),
            'observaciones_generales' => Yii::t('app', 'Observaciones Generales'),
            'defunciones' => Yii::t('app', 'Defunciones'),
            'causa_defuncion' => Yii::t('app', 'Causa Defuncion'),
            'estatus' => Yii::t('app', 'Estatus'),
            'fecha_sist' => Yii::t('app', 'Fecha Sist'),
            'hora_sit' => Yii::t('app', 'Hora Sit'),
            'id_usuario' => Yii::t('app', 'Id Usuario'),
        ];
    }
}

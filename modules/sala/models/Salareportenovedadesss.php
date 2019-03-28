<?php

namespace app\modules\sala\models;

use Yii;

/**
 * This is the model class for table "sala.reporte_novedades_ss".
 *
 * @property string $codigo
 * @property string $estado
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 * @property string $planta_electrica
 * @property string $observaciones_planta_electrica
 * @property string $agua
 * @property string $observaciones_agua
 * @property string $observaciones_generales
 * @property string $estatus
 */
class Salareportenovedadesss extends \yii\db\ActiveRecord
{
    /**
     * Clave Primaria
     */
    public static function primaryKey()
    {
        return ['codigo'];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sala.reporte_novedades_ss';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo', 'estado', 'nombre', 'direccion', 'telefono', 'planta_electrica', 'observaciones_planta_electrica', 'agua', 'observaciones_agua', 'observaciones_generales', 'estatus'], 'default', 'value' => null],
            [['observaciones_planta_electrica', 'observaciones_agua', 'observaciones_generales'], 'string'],
            [['codigo'], 'string', 'max' => 20],
            [['estado'], 'string', 'max' => 50],
            [['nombre'], 'string', 'max' => 150],
            [['direccion'], 'string', 'max' => 250],
            [['telefono'], 'string', 'max' => 11],
            [['planta_electrica', 'agua', 'estatus'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'codigo' => Yii::t('app', 'Codigo'),
            'estado' => Yii::t('app', 'Estado'),
            'nombre' => Yii::t('app', 'Nombre'),
            'direccion' => Yii::t('app', 'Direccion'),
            'telefono' => Yii::t('app', 'Telefono'),
            'planta_electrica' => Yii::t('app', 'Planta Electrica'),
            'observaciones_planta_electrica' => Yii::t('app', 'Observaciones Planta Electrica'),
            'agua' => Yii::t('app', 'Agua'),
            'observaciones_agua' => Yii::t('app', 'Observaciones Agua'),
            'observaciones_generales' => Yii::t('app', 'Observaciones Generales'),
            'estatus' => Yii::t('app', 'Estatus'),
        ];
    }
}

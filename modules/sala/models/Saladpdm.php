<?php

namespace app\modules\sala\models;

use Yii;

/**
 * This is the model class for table "sala.d_pdm".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property int $edad
 * @property string $sexo
 * @property string $telefono
 * @property string $estado
 * @property string $municipio
 * @property string $parroquia
 * @property string $direccion
 * @property string $discapacidad
 * @property string $tipo_discapacidad
 * @property string $fecha_sist
 * @property string $horas_sist
 * @property int $id_usuario
 */
class Saladpdm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sala.d_pdm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'edad', 'sexo', 'telefono', 'estado', 'municipio', 'parroquia', 'direccion', 'discapacidad', 'tipo_discapacidad', 'fecha_sist', 'horas_sist', 'id_usuario'], 'default', 'value' => null],
            [['nombre', 'apellidos'], 'required'],
            [['edad', 'id_usuario'], 'integer'],
            [['nombre', 'apellidos', 'parroquia', 'discapacidad'], 'string', 'max' => 100],
            [['sexo', 'fecha_sist'], 'string', 'max' => 10],
            [['telefono1','telefono2'], 'string', 'max' => 14],
            [['estado', 'municipio', 'tipo_discapacidad'], 'string', 'max' => 50],
            [['direccion'], 'string', 'max' => 1000],
            [['horas_sist'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'apellidos' => Yii::t('app', 'Apellidos'),
            'edad' => Yii::t('app', 'Edad'),
            'sexo' => Yii::t('app', 'Sexo'),
            'telefono1' => Yii::t('app', 'Telefono'),
            'telefono2' => Yii::t('app', 'Telefono'),
            'estado' => Yii::t('app', 'Estado'),
            'municipio' => Yii::t('app', 'Municipio'),
            'parroquia' => Yii::t('app', 'Parroquia'),
            'direccion' => Yii::t('app', 'Direccion'),
            'discapacidad' => Yii::t('app', 'Discapacidad'),
            'tipo_discapacidad' => Yii::t('app', 'Tipo Discapacidad'),
            'fecha_sist' => Yii::t('app', 'Fecha Sist'),
            'horas_sist' => Yii::t('app', 'Horas Sist'),
            'id_usuario' => Yii::t('app', 'Id Usuario'),
        ];
    }
}

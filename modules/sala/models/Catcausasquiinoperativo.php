<?php

namespace app\modules\sala\models;

use Yii;

/**
 * This is the model class for table "sala.cat_causas_qui_inoperativo".
 *
 * @property int $id
 * @property string $descripcion
 * @property int $cod_usuario
 * @property string $fecha_sist
 * @property string $hora_sist
 */
class Catcausasquiinoperativo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sala.cat_causas_qui_inoperativo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion', 'cod_usuario', 'fecha_sist', 'hora_sist'], 'default', 'value' => null],
            [['descripcion', 'cod_usuario', 'fecha_sist', 'hora_sist'], 'required'],
            [['cod_usuario'], 'integer'],
            [['descripcion'], 'string', 'max' => 50],
            [['fecha_sist'], 'string', 'max' => 10],
            [['hora_sist'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'cod_usuario' => Yii::t('app', 'Cod Usuario'),
            'fecha_sist' => Yii::t('app', 'Fecha Sist'),
            'hora_sist' => Yii::t('app', 'Hora Sist'),
        ];
    }
}

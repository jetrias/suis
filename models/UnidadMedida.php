<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catalogo.unidad_medida".
 *
 * @property int $id
 * @property string $codigo
 * @property string $nombre
 * @property bool $eliminado
 *
 * @property Caracteristica[] $caracteristicas
 */
class UnidadMedida extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalogo.unidad_medida';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigo', 'nombre', 'eliminado'], 'default', 'value' => null],
            [['codigo', 'nombre'], 'required'],
            [['eliminado'], 'boolean'],
            [['codigo'], 'string', 'max' => 6],
            [['nombre'], 'string', 'max' => 60],
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
            'eliminado' => Yii::t('app', 'Eliminado'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCaracteristicas()
    {
        return $this->hasMany(Caracteristica::className(), ['id_unidad_medida' => 'id']);
    }
    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->nombre;
    }
}

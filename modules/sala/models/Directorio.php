<?php

namespace app\modules\sala\models;

use Yii;

/**
 * This is the model class for table "sala.directorio".
 *
 * @property int $id
 * @property int $cod_establecimiento
 * @property string $nombre_director
 * @property string $telf_director
 * @property string $nombre_agua
 * @property string $telf_agua
 * @property string $nombre_planta
 * @property string $telf_planta
 * @property string $telf_hosp
 * @property string $fecha_sist
 * @property string $hora_sist
 * @property int $id_usuario
 */
class Directorio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sala.directorio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_establecimiento', 'nombre_director', 'telf_director', 'nombre_agua', 'telf_agua', 'nombre_planta', 'telf_planta', 'telf_hosp', 'fecha_sist', 'hora_sist', 'id_usuario'], 'default', 'value' => null],
            [['cod_establecimiento', 'nombre_director', 'nombre_planta', 'fecha_sist', 'hora_sist', 'id_usuario'], 'required'],
            [['cod_establecimiento', 'id_usuario'], 'integer'],
            [['nombre_director', 'nombre_agua', 'nombre_planta'], 'string', 'max' => 20],
            [['telf_director', 'telf_agua', 'telf_planta', 'telf_hosp'], 'string', 'max' => 14],
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
            'cod_establecimiento' => Yii::t('app', 'Cod Establecimiento'),
            'nombre_director' => Yii::t('app', 'Nombre Director'),
            'telf_director' => Yii::t('app', 'Telf Director'),
            'nombre_agua' => Yii::t('app', 'Nombre Agua'),
            'telf_agua' => Yii::t('app', 'Telf Agua'),
            'nombre_planta' => Yii::t('app', 'Nombre Planta'),
            'telf_planta' => Yii::t('app', 'Telf Planta'),
            'telf_hosp' => Yii::t('app', 'Telf Hosp'),
            'fecha_sist' => Yii::t('app', 'Fecha Sist'),
            'hora_sist' => Yii::t('app', 'Hora Sist'),
            'id_usuario' => Yii::t('app', 'Id Usuario'),
        ];
    }
}

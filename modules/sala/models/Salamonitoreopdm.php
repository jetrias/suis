<?php

namespace app\modules\sala\models;

use Yii;

/**
 * This is the model class for table "sala.monitoreo_pdm".
 *
 * @property int $id
 * @property string $estatus_llamada
 * @property string $ulcera
 * @property int $grado_ulcera
 * @property int $cod_nacionalidad_brigadista
 * @property int $cedula_brigadista
 * @property string $pnombre_brigadista
 * @property string $snombre_brigadista
 * @property string $papellido_brigadista
 * @property string $sapellido_brigadista
 * @property string $telefono_brigadista
 * @property int $cod_nacionalidad_est_ucs
 * @property int $cedula_est_ucs
 * @property string $pnombre_est_ucs
 * @property string $snombre_est_ucs
 * @property string $papellido_est_ucs
 * @property string $sapellido_est_ucs
 * @property string $telefono_est_ucs
 * @property string $fecha_ultima_rehabilitacion
 * @property string $fecha_proxima_rehabilitacion
 * @property string $verificada_rehabilitacion
 * @property string $evolucion
 * @property string $fecha_inf
 * @property string $hora_inf
 * @property string $fecha_sist
 * @property string $horas_sist
 * @property int $id_usuario
 */
class Salamonitoreopdm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sala.monitoreo_pdm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['estatus_llamada', 'ulcera', 'grado_ulcera', 'cod_nacionalidad_brigadista', 'cedula_brigadista', 'pnombre_brigadista', 'snombre_brigadista', 'papellido_brigadista', 'sapellido_brigadista', 'telefono_brigadista', 'cod_nacionalidad_est_ucs', 'cedula_est_ucs', 'pnombre_est_ucs', 'snombre_est_ucs', 'papellido_est_ucs', 'sapellido_est_ucs', 'telefono_est_ucs', 'fecha_ultima_rehabilitacion', 'fecha_proxima_rehabilitacion', 'verificada_rehabilitacion', 'evolucion', 'fecha_inf', 'hora_inf', 'fecha_sist', 'horas_sist', 'id_usuario'], 'default', 'value' => null],
            [['grado_ulcera', 'cod_nacionalidad_brigadista', 'cedula_brigadista', 'cod_nacionalidad_est_ucs', 'cedula_est_ucs', 'id_usuario'], 'integer'],
            [['estatus_llamada'], 'string', 'max' => 20],
            [['ulcera'], 'string', 'max' => 1],
            [['pnombre_brigadista', 'snombre_brigadista', 'papellido_brigadista', 'sapellido_brigadista', 'pnombre_est_ucs', 'snombre_est_ucs', 'papellido_est_ucs', 'sapellido_est_ucs'], 'string', 'max' => 100],
            [['telefono_brigadista', 'telefono_est_ucs'], 'string', 'max' => 14],
            [['fecha_ultima_rehabilitacion', 'fecha_proxima_rehabilitacion', 'fecha_inf', 'fecha_sist'], 'string', 'max' => 10],
            [['verificada_rehabilitacion'], 'string', 'max' => 2],
            [['evolucion'], 'string', 'max' => 50],
            [['hora_inf', 'horas_sist'], 'string', 'max' => 8],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'estatus_llamada' => Yii::t('app', 'Estatus Llamada'),
            'ulcera' => Yii::t('app', 'Ulcera'),
            'grado_ulcera' => Yii::t('app', 'Grado Ulcera'),
            'cod_nacionalidad_brigadista' => Yii::t('app', 'Cod Nacionalidad Brigadista'),
            'cedula_brigadista' => Yii::t('app', 'Cedula Brigadista'),
            'pnombre_brigadista' => Yii::t('app', 'Pnombre Brigadista'),
            'snombre_brigadista' => Yii::t('app', 'Snombre Brigadista'),
            'papellido_brigadista' => Yii::t('app', 'Papellido Brigadista'),
            'sapellido_brigadista' => Yii::t('app', 'Sapellido Brigadista'),
            'telefono_brigadista' => Yii::t('app', 'Telefono Brigadista'),
            'cod_nacionalidad_est_ucs' => Yii::t('app', 'Cod Nacionalidad Est Ucs'),
            'cedula_est_ucs' => Yii::t('app', 'Cedula Est Ucs'),
            'pnombre_est_ucs' => Yii::t('app', 'Pnombre Est Ucs'),
            'snombre_est_ucs' => Yii::t('app', 'Snombre Est Ucs'),
            'papellido_est_ucs' => Yii::t('app', 'Papellido Est Ucs'),
            'sapellido_est_ucs' => Yii::t('app', 'Sapellido Est Ucs'),
            'telefono_est_ucs' => Yii::t('app', 'Telefono Est Ucs'),
            'fecha_ultima_rehabilitacion' => Yii::t('app', 'Fecha Ultima Rehabilitacion'),
            'fecha_proxima_rehabilitacion' => Yii::t('app', 'Fecha Proxima Rehabilitacion'),
            'verificada_rehabilitacion' => Yii::t('app', 'Verificada Rehabilitacion'),
            'evolucion' => Yii::t('app', 'Evolucion'),
            'fecha_inf' => Yii::t('app', 'Fecha Inf'),
            'hora_inf' => Yii::t('app', 'Hora Inf'),
            'fecha_sist' => Yii::t('app', 'Fecha Sist'),
            'horas_sist' => Yii::t('app', 'Horas Sist'),
            'id_usuario' => Yii::t('app', 'Id Usuario'),
        ];
    }
}

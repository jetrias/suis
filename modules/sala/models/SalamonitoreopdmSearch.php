<?php

namespace app\modules\sala\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sala\models\Salamonitoreopdm;

/**
 * SalamonitoreopdmSearch represents the model behind the search form of `app\modules\sala\models\Salamonitoreopdm`.
 */
class SalamonitoreopdmSearch extends Salamonitoreopdm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'grado_ulcera', 'cod_nacionalidad_brigadista', 'cedula_brigadista', 'cod_nacionalidad_est_ucs', 'cedula_est_ucs', 'id_usuario'], 'integer'],
            [['estatus_llamada', 'ulcera', 'pnombre_brigadista', 'snombre_brigadista', 'papellido_brigadista', 'sapellido_brigadista', 'telefono_brigadista', 'pnombre_est_ucs', 'snombre_est_ucs', 'papellido_est_ucs', 'sapellido_est_ucs', 'telefono_est_ucs', 'fecha_ultima_rehabilitacion', 'fecha_proxima_rehabilitacion', 'verificada_rehabilitacion', 'evolucion', 'fecha_inf', 'hora_inf', 'fecha_sist', 'horas_sist'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Salamonitoreopdm::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'grado_ulcera' => $this->grado_ulcera,
            'cod_nacionalidad_brigadista' => $this->cod_nacionalidad_brigadista,
            'cedula_brigadista' => $this->cedula_brigadista,
            'cod_nacionalidad_est_ucs' => $this->cod_nacionalidad_est_ucs,
            'cedula_est_ucs' => $this->cedula_est_ucs,
            'id_usuario' => $this->id_usuario,
        ]);

        $query->andFilterWhere(['ilike', 'estatus_llamada', $this->estatus_llamada])
            ->andFilterWhere(['ilike', 'ulcera', $this->ulcera])
            ->andFilterWhere(['ilike', 'pnombre_brigadista', $this->pnombre_brigadista])
            ->andFilterWhere(['ilike', 'snombre_brigadista', $this->snombre_brigadista])
            ->andFilterWhere(['ilike', 'papellido_brigadista', $this->papellido_brigadista])
            ->andFilterWhere(['ilike', 'sapellido_brigadista', $this->sapellido_brigadista])
            ->andFilterWhere(['ilike', 'telefono_brigadista', $this->telefono_brigadista])
            ->andFilterWhere(['ilike', 'pnombre_est_ucs', $this->pnombre_est_ucs])
            ->andFilterWhere(['ilike', 'snombre_est_ucs', $this->snombre_est_ucs])
            ->andFilterWhere(['ilike', 'papellido_est_ucs', $this->papellido_est_ucs])
            ->andFilterWhere(['ilike', 'sapellido_est_ucs', $this->sapellido_est_ucs])
            ->andFilterWhere(['ilike', 'telefono_est_ucs', $this->telefono_est_ucs])
            ->andFilterWhere(['ilike', 'fecha_ultima_rehabilitacion', $this->fecha_ultima_rehabilitacion])
            ->andFilterWhere(['ilike', 'fecha_proxima_rehabilitacion', $this->fecha_proxima_rehabilitacion])
            ->andFilterWhere(['ilike', 'verificada_rehabilitacion', $this->verificada_rehabilitacion])
            ->andFilterWhere(['ilike', 'evolucion', $this->evolucion])
            ->andFilterWhere(['ilike', 'fecha_inf', $this->fecha_inf])
            ->andFilterWhere(['ilike', 'hora_inf', $this->hora_inf])
            ->andFilterWhere(['ilike', 'fecha_sist', $this->fecha_sist])
            ->andFilterWhere(['ilike', 'horas_sist', $this->horas_sist]);

        return $dataProvider;
    }
}

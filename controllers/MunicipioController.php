<?php

namespace app\controllers;

use Yii;
use app\models\Municipio;
use yii\web\Controller;

class MunicipioController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => 'yii\filters\AjaxFilter',
                'only' => ['get-by-edo']
            ],
        ];
    }

    /**
     * Get options for Select2 dropdown
     */
    public function actionGetByEdo($edo)
    {
        $results = Municipio::find()
            ->where(['codigo_estado' => $edo])
            ->all();

        $response = [];

        if (!empty($results)) {
            foreach ($results as $row) {
                $response[] = [
                    'id' => $row->codigo_municipio,
                    'text' => $row->municipio,
                ];
            }
        }

        echo json_encode(['results' => $response]);
        exit;
    }
}

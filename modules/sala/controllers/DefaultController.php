<?php

namespace app\modules\sala\controllers;

use yii\web\Controller;

/**
 * Default controller for the `sala` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}

<?php

namespace app\modules\sala\controllers;

use Yii;
use app\modules\sala\models\Salamonitoreopdm;
use app\modules\sala\models\SalamonitoreopdmSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SalamonitoreopdmController implements the CRUD actions for Salamonitoreopdm model.
 */
class SalamonitoreopdmController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            [
                'class' => 'yii\filters\AjaxFilter',
                'only' => ['save', 'view']
            ],
        ];
    }

    /**
     * Lists all Salamonitoreopdm models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SalamonitoreopdmSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Salamonitoreopdm model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Salamonitoreopdm model or update an existing one.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionSave($id=null)
    {
        if ($id == null) {
            $model = new Salamonitoreopdm();
        } else {
            //$model = $this->findModel($id);
            $model = new Salamonitoreopdm();
        }
        $idUser=Yii::$app->user->id;
        $model->fecha_sist=date('Y-m-d');
        $model->horas_sist=date('H:i:s');
        $model->id_usuario=$idUser;
        if ($model->load(Yii::$app->request->post())){ 
            $model->save();
            if(!$model->save()){
            die(var_dump($model->getErrors()));
            }
            echo "close-modal";
            exit;
        }

        return $this->renderAjax('form', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Salamonitoreopdm model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Salamonitoreopdm model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Salamonitoreopdm the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Salamonitoreopdm::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

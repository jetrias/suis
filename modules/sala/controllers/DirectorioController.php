<?php

namespace app\modules\sala\controllers;

use Yii;
use app\modules\sala\models\Directorio;
use app\modules\sala\models\DirectorioSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DirectorioController implements the CRUD actions for Directorio model.
 */
class DirectorioController extends Controller
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
     * Lists all Directorio models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DirectorioSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Directorio model.
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
     * Creates a new Directorio model or update an existing one.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionSave($id=null)
    {
        $directorio=$this->findModelByEstablecimiento($id);
         
        if ($directorio['id'] == null) {
            $model = new Directorio();
        } else {
            $model = $this->findModel($directorio['id']);
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            echo "close-modal";
            exit;
        }

        return $this->renderAjax('form', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Directorio model.
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
     * Finds the Directorio model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Directorio the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Directorio::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
    protected function findModelByEstablecimiento($id)
    {
      if($id!=null){
        $model=Directorio::find()->where(['cod_establecimiento'=>$id])->one();
              return $model;
            }
        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

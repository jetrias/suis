<?php

namespace app\modules\sala\controllers;

use Yii;
use app\modules\sala\models\Hospambulancias;
use app\modules\sala\models\HospambulanciasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HospambulanciasController implements the CRUD actions for Hospambulancias model.
 */
class HospambulanciasController extends Controller
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
     * Lists all Hospambulancias models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HospambulanciasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Hospambulancias model.
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
     * Creates a new Hospambulancias model or update an existing one.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionSave($id=null)
    {
      $hospital=$this->findModelByEstablecimiento($id);
        if ($hospital['id'] == null) {
            $model = new Hospambulancias();
        } else {
            $model = $this->findModel($hospital['id']);
        }
        $model->cod_establecimiento_salud=$id;
        $model->id_usuario=Yii::$app->user->id;
        $model->fecha_sist=date('Y-m-d');
        $model->hora_sist=date('H:i:s');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            echo "close-modal";
            exit;
        }

        return $this->renderAjax('form', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Hospambulancias model.
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
     * Finds the Hospambulancias model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Hospambulancias the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Hospambulancias::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
    protected function findModelByEstablecimiento($id)
    {
      if($id!=null){
        $model=Hospambulancias::find()->where(['cod_establecimiento_salud'=>$id])->one();
              return $model;
            }
        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

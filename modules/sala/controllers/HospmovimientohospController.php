<?php

namespace app\modules\sala\controllers;

use Yii;
use app\modules\sala\models\Hospmovimientohosp;
use app\modules\sala\models\HospmovimientohospSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HospmovimientohospController implements the CRUD actions for Hospmovimientohosp model.
 */
class HospmovimientohospController extends Controller
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
     * Lists all Hospmovimientohosp models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HospmovimientohospSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Hospmovimientohosp model.
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
     * Creates a new Hospmovimientohosp model or update an existing one.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionSave($id=null)
    {
      //die(var_dump($id));
        $hospital=$this->findModelByEstablecimiento($id);
        //die(var_dump($hospital));
        if ($hospital['id'] == null) {
            $model = new Hospmovimientohosp();
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
     * Deletes an existing Hospmovimientohosp model.
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
     * Finds the Hospmovimientohosp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Hospmovimientohosp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Hospmovimientohosp::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
    protected function findModelByEstablecimiento($id)
    {
      if($id!=null){
        $model=Hospmovimientohosp::find()->where(['cod_establecimiento_salud'=>$id])->one();
              return $model;
            }
        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

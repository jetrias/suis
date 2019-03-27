<?php

namespace app\modules\sala\controllers;

use Yii;
use app\modules\sala\models\Dialisis;
use app\modules\sala\models\DialisisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DialisisController implements the CRUD actions for Dialisis model.
 */
class DialisisController extends Controller
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
     * Lists all Dialisis models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DialisisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single Dialisis model.
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
     * Creates a new Dialisis model or update an existing one.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionSave($id=null)
    {
      /*busuqeda del id para redireccionar a nuevo o editar */
      $estab=$this->findModelByEstablecimiento($id);
        if ($estab['id'] == null) {
            $model = new Dialisis();
        } else {
            $model = $this->findModel($estab['id']);
            
        }
        $model->cod_establecimiento_salud=$id;
        $model->fecha_sist=date('Y-m-d');
        $model->hora_sist=date('H:i:s');
        $model->id_usuario=(string)Yii::$app->user->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //die(var_dump($model));

          //  echo "close-modal";
            //exit();
        }
        /*if($model->load(Yii::$app->request->post())&& !$model->save()){
            die(var_dump($model->getErrors()));
        }*/

        return $this->renderAjax('form', [
            'model' => $model,
        ]);
    }
    /**
     * Deletes an existing Dialisis model.
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
     * Finds the Dialisis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Dialisis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Dialisis::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
    ///verificar si existe un id en la tabla
    protected function findModelByEstablecimiento($id)
    {
        if($id!=null){
        $model=Dialisis::find()->where(['cod_establecimiento_salud'=>$id])->one();
              return $model;
            }
        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

<?php

namespace app\modules\sala\controllers;

use Yii;
use app\modules\sala\models\Novedades;
use app\modules\sala\models\NovedadesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NovedadesController implements the CRUD actions for Novedades model.
 */
class NovedadesController extends Controller
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
     * Lists all Novedades models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NovedadesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Novedades model.
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
     * Creates a new Novedades model or update an existing one.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionSave($id=null)
    {
       $estab=$this->findModelByEstablecimiento($id);
        if ($estab['id'] == null) {
            $model = new Novedades();
        } else {
            $model = $this->findModel($estab['id']);
            
        }
        $model->cod_establecimiento_salud=$id;
        $model->fecha_sist=date('Y-m-d');
        $model->hora_sit=date('H:i:s');
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
     * Deletes an existing Novedades model.
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
     * Finds the Novedades model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Novedades the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Novedades::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
     protected function findModelByEstablecimiento($id)
    {
        if($id!=null){
        $model=Novedades::find()->where(['cod_establecimiento_salud'=>$id])->one();
              return $model;
            }
        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}

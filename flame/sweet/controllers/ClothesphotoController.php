<?php

namespace app\flame\sweet\controllers;

use Yii;
use app\models\Clothesphoto;
use app\models\SearchClothesphoto;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * ClothesphotoController implements the CRUD actions for Clothesphoto model.
 */
class ClothesphotoController extends Controller
{
    /**
     * @inheritdoc
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
        ];
    }

    /**
     * Lists all Clothesphoto models.
     * @return mixed
     */
    public function actionIndex()
    {
        $_GET['SearchClothesphoto'] = ['coat_id'=>$_GET['coat_id']];
        $searchModel = new SearchClothesphoto();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Clothesphoto model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Clothesphoto model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Clothesphoto();
        $model ->coat_id = $_GET['coat_id'];
        if ($model->load(Yii::$app->request->post())) {
        // var_dump(Yii::$app->request->post());die;
            $model->file = UploadedFile::getInstance($model,'photo');
            if($model->validate()){
                $dir = 'uploads/'.date('Ymd');
                if (!is_dir($dir))
                mkdir($dir);
                //文件名
                $fileName = date("HiiHsHis"). "." . $model->file->extension;
                $dir = $dir."/". $fileName;
                if($model->file->saveAs($dir)){
                    $model->photo = "/uploads/".date("Ymd")."/".$fileName;
                }  
            }
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Clothesphoto model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            
            $model->file = UploadedFile::getInstance($model,'photo');
            if($model->validate() && !empty($model->file)){
                $dir = 'uploads/'.date('Ymd');
                if (!is_dir($dir))
                mkdir($dir);
                //文件名
                $fileName = date("HiiHsHis"). "." . $model->file->extension;
                $dir = $dir."/". $fileName;
                if($model->file->saveAs($dir)){
                    $model->photo = "/uploads/".date("Ymd")."/".$fileName;
                }  
            }
                
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }
            
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Clothesphoto model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Clothesphoto model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Clothesphoto the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Clothesphoto::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

<?php

namespace app\flame\sweet\controllers;

use Yii;
use app\models\Skillart;
use app\models\SearchSkillart;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * SkillartController implements the CRUD actions for Skillart model.
 */
class SkillartController extends Controller
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
     * Lists all Skillart models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchSkillart();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Skillart model.
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
     * Creates a new Skillart model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Skillart();

        if ($model->load(Yii::$app->request->post())) {
            
            $model->file = UploadedFile::getInstance($model,'pic');
            if($model->validate()){
                $dir = 'uploads/'.date('Ymd');
                if (!is_dir($dir))
                mkdir($dir);
                //文件名
                $fileName = date("HiiHsHis"). "." . $model->file->extension;
                $dir = $dir."/". $fileName;
                if($model->file->saveAs($dir)){
                    $model->pic = "/uploads/".date("Ymd")."/".$fileName;
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
     * Updates an existing Skillart model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            
            $model->file = UploadedFile::getInstance($model,'pic');
            if($model->validate() && !empty($model->file)){
                $dir = 'uploads/'.date('Ymd');
                if (!is_dir($dir))
                mkdir($dir);
                //文件名
                $fileName = date("HiiHsHis"). "." . $model->file->extension;
                $dir = $dir."/". $fileName;
                if($model->file->saveAs($dir)){
                    $model->pic = "/uploads/".date("Ymd")."/".$fileName;
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
     * Deletes an existing Skillart model.
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
     * Finds the Skillart model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Skillart the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Skillart::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

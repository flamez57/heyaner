<?php

namespace app\flame\sweet\controllers;

use Yii;
use app\models\Shop;
use app\models\SearchShop;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\imagine\Image;
/**
 * ShopController implements the CRUD actions for Shop model.
 */
class ShopController extends Controller
{
    // 不要布局
    // public $layout = false;
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
     * Lists all Shop models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchShop();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Shop model.
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
     * Creates a new Shop model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    { 

        $model = new Shop();

        if ($model->load(Yii::$app->request->post())) {//var_dump($_POST['intro']);die;
       
            $model->file = UploadedFile::getInstance($model,'store_pic');
            
            if(!empty($model->file)){
                $dir = 'uploads/'.date('Ymd');
                if (!is_dir($dir))
                mkdir($dir);
                //文件名
                $fileName = date("HiiHsHis"). "." . $model->file->extension;
                $dir = $dir."/". $fileName;
                if($model->file->saveAs($dir)){
                    $model->store_pic = "/uploads/".date("Ymd")."/".$fileName;
                }  
            }   
            $model->intro = $_POST['intro'];
            if($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }
            echo 'ok5';die;
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Shop model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            
            $model->file = UploadedFile::getInstance($model,'store_pic');
            if($model->validate() && !empty($model->file)){
                $dir = 'uploads/'.date('Ymd');
                if (!is_dir($dir))
                mkdir($dir);
                //文件名
                $fileName = date("HiiHsHis"). "." . $model->file->extension;
                $dir = $dir."/". $fileName;

                if($model->file->saveAs($dir)){
                    $model->store_pic = "/uploads/".date("Ymd")."/".$fileName;
                }
            }
            $model->intro = $_POST['intro'];
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
     * Deletes an existing Shop model.
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
     * Finds the Shop model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Shop the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Shop::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /*public function resizejpg($imgsrc,$imgdst,$imgwidth,$imgheight)
    {
        //$imgsrc jpg格式图像路径 $imgdst jpg格式图像保存文件名 $imgwidth要改变的宽度 $imgheight要改变的高度
        //取得图片的宽度,高度值
        $arr = getimagesize($imgsrc);                    
        header("Content-type: image/jpg");        
        $imgWidth = $imgwidth;
        $imgHeight = $imgheight;
        // Create image and define colors
        $imgsrc = imagecreatefromjpeg($imgsrc);
        $image = imagecreatetruecolor($imgWidth, $imgHeight);  //创建一个彩色的底图
        imagecopyresampled($image, $imgsrc, 0, 0, 0, 0,$imgWidth,$imgHeight,$arr[0], $arr[1]);
        imagepng($image);
        imagedestroy($image);
    }*/

}

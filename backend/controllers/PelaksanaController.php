<?php

namespace backend\controllers;

use Yii;
use backend\models\Pelaksana;
use backend\models\PelaksanaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PelaksanaController implements the CRUD actions for Pelaksana model.
 */
class PelaksanaController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pelaksana models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PelaksanaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pelaksana model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $providerMekanismePelayanan = new \yii\data\ArrayDataProvider([
            'allModels' => $model->mekanismePelayanans,
        ]);
        $providerPerizinanProses = new \yii\data\ArrayDataProvider([
            'allModels' => $model->perizinanProses,
        ]);
        $providerUser = new \yii\data\ArrayDataProvider([
            'allModels' => $model->users,
        ]);
        return $this->render('view', [
            'model' => $this->findModel($id),
            'providerMekanismePelayanan' => $providerMekanismePelayanan,
            'providerPerizinanProses' => $providerPerizinanProses,
            'providerUser' => $providerUser,
        ]);
    }

    /**
     * Creates a new Pelaksana model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pelaksana();

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Pelaksana model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Pelaksana model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->deleteWithRelated();

        return $this->redirect(['index']);
    }
    
    /**
     * 
     * for export pdf at actionView
     *  
     * @param type $id
     * @return type
     */
    public function actionPdf($id) {
        $model = $this->findModel($id);
        $providerMekanismePelayanan = new \yii\data\ArrayDataProvider([
            'allModels' => $model->mekanismePelayanans,
        ]);
        $providerPerizinanProses = new \yii\data\ArrayDataProvider([
            'allModels' => $model->perizinanProses,
        ]);
        $providerUser = new \yii\data\ArrayDataProvider([
            'allModels' => $model->users,
        ]);

        $content = $this->renderAjax('_pdf', [
            'model' => $model,
            'providerMekanismePelayanan' => $providerMekanismePelayanan,
            'providerPerizinanProses' => $providerPerizinanProses,
            'providerUser' => $providerUser,
        ]);

        $pdf = new \kartik\mpdf\Pdf([
            'mode' => \kartik\mpdf\Pdf::MODE_CORE,
            'format' => \kartik\mpdf\Pdf::FORMAT_A4,
            'orientation' => \kartik\mpdf\Pdf::ORIENT_PORTRAIT,
            'destination' => \kartik\mpdf\Pdf::DEST_BROWSER,
            'content' => $content,
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            'cssInline' => '.kv-heading-1{font-size:18px}',
            'options' => ['title' => \Yii::$app->name],
            'methods' => [
                'SetHeader' => [\Yii::$app->name],
                'SetFooter' => ['{PAGENO}'],
            ]
        ]);

        return $pdf->render();
    }
    
    /**
     * Finds the Pelaksana model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pelaksana the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pelaksana::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for MekanismePelayanan
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddMekanismePelayanan()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('MekanismePelayanan');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('action') == 'load' && empty($row)) || Yii::$app->request->post('action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formMekanismePelayanan', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for PerizinanProses
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddPerizinanProses()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('PerizinanProses');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('action') == 'load' && empty($row)) || Yii::$app->request->post('action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formPerizinanProses', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }
    }
    
    /**
    * Action to load a tabular form grid
    * for User
    * @author Yohanes Candrajaya <moo.tensai@gmail.com>
    * @author Jiwantoro Ndaru <jiwanndaru@gmail.com>
    *
    * @return mixed
    */
    public function actionAddUser()
    {
        if (Yii::$app->request->isAjax) {
            $row = Yii::$app->request->post('User');
            if((Yii::$app->request->post('isNewRecord') && Yii::$app->request->post('action') == 'load' && empty($row)) || Yii::$app->request->post('action') == 'add')
                $row[] = [];
            return $this->renderAjax('_formUser', ['row' => $row]);
        } else {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }
    }
}

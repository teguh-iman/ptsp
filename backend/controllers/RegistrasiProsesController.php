<?php

namespace backend\controllers;

use Yii;
use backend\models\RegistrasiProses;
use backend\models\RegistrasiProsesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RegistrasiProsesController implements the CRUD actions for RegistrasiProses model.
 */
class RegistrasiProsesController extends Controller {

    public function behaviors() {
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
     * Lists all RegistrasiProses models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new RegistrasiProsesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RegistrasiProses model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        $model = $this->findModel($id);
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    public function actionProcess($id) {
        $model = $this->findModel($id);
        return $this->render('process', [
                    'model' => $this->findModel($id),
        ]);
    }

    public function actionApprove($id) {
        $model = $this->findModel($id);
        $model->aktif = 0;
        $model->approval = 'Y';
        if ($model->registrasi->jumlah_tahap == $model->urutan)
            $model->status = 'Selesai';
        else {
            $model->status = 'Proses';
            $next = $this->findModel($id + 1);
            $next->aktif = 1;
            $next->save(false);
        }
        $model->save(false);
        return $this->redirect(['index']);
    }
    
    public function actionDecline($id) {
        $model = $this->findModel($id);
        $model->aktif = 0;
        $model->approval = 'N';
        if ($model->urutan == 1)
            $model->status = 'Mulai';
        else {
            $model->status = 'Proses';
            $prev = $this->findModel($id - 1);
            $prev->aktif = 1;
            $prev->save(false);
        }
        $model->save(false);
        return $this->redirect(['index']);
    }

    /**
     * Creates a new RegistrasiProses model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new RegistrasiProses();

        if ($model->loadAll(Yii::$app->request->post()) && $model->saveAll()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing RegistrasiProses model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
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
     * Deletes an existing RegistrasiProses model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
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

        $content = $this->renderAjax('_pdf', [
            'model' => $model,
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
     * Finds the RegistrasiProses model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RegistrasiProses the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = RegistrasiProses::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
        }
    }

}

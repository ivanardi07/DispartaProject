<?php

namespace backend\controllers;

use Yii;
use backend\models\JumlahAkomodasi;
use backend\models\JumlahAkomodasiCari;
use backend\models\JumlahDtw;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * AkomodasiController implements the CRUD actions for Akomodasi model.
 */
class JumlahAkomodasiController extends Controller
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
        ];
    }

    /**
     * Lists all Akomodasi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JumlahAkomodasiCari();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $modelA = JumlahAkomodasi::find()->all();
        $modelB = JumlahDtw::find()->all();
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'modelA' => $modelA,
            'modelB' => $modelB,
        ]);
    }

   
}

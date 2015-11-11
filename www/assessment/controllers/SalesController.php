<?php

namespace app\controllers;

use Yii;
use app\models\Sales;
use app\models\Stores;
use app\models\Fruit;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SalesController implements the CRUD actions for Sales model.
 */
class SalesController extends Controller
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
     * Creates a new Sales model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($store)
    {
        $model = new Sales();
        $model->date = date('Y-m-d H:i:s');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['stores/view', 'id' => $model->fkstore_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'store' => Stores::findOne($store),
                'fruit' => Fruit::find()->asArray()->all(),
            ]);
        }
    }

    /**
     * Finds the Sales model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sales the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sales::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

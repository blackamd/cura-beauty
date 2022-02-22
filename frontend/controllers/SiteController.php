<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * Site controller
 */
class SiteController extends Controller
{
    public function beforeAction($action)
    {
        Yii::$app->controller->enableCsrfValidation = false;
        return true;
    }
    public function actionIndex()
    {
       return $this->render('test');
    }
}

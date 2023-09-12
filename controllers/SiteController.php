<?php

namespace app\controllers;

class SiteController extends \yii\web\Controller
{
    public function actionParse(): string
    {
        return $this->render('index');
    }
}
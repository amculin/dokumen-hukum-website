<?php
namespace frontend\controllers;

use common\models\Setting;
use common\models\Slider;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = Setting::get('title');

        $slider = Slider::getAll();

        return $this->render('index', [
            'slider' => $slider
        ]);
    }
}
<?php
namespace frontend\controllers;

use Yii;
use common\models\ContactForm;
use common\models\Setting;
use common\models\Slider;
use common\models\StaticPage;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $this->view->title = Setting::get('title');

        $sliders = Slider::getAll();
        $services = StaticPage::getServices();

        return $this->render('index', [
            'sliders' => $sliders,
            'services' => $services
        ]);
    }

    public function actionAbout()
    {
        $this->view->title = Setting::get('title');

        $data = StaticPage::findBySlug('about');

        return $this->render('about', ['data' => $data]);
    }

    public function actionContact()
    {
        $this->view->title = Setting::get('title');

        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Terima kasih sudah menghubungi kami. Kami akan memberikan tanggapan sesegera mungkin.');
            } else {
                Yii::$app->session->setFlash('error', 'Pesan gagal terkiri.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }

    }
}
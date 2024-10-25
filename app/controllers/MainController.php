<?php

namespace app\controllers;

use app\models\Main;
use RedBeanPHP\R;
use S_Sait\App;
// use S_Sait\Cache;

/** @property  Main  $model */

class MainController extends AppController
{
    public function indexAction()
    {
        $lang = App::$app->getPropety('language');
        $slides = R::findAll('slider');

        $products = $this->model->get_hits($lang, 3);

        $this->set(compact('slides', 'products'));
        $this->setMeta(get_Phrase1('main_index_meta_title'), get_Phrase1('main_index_meta_description'), get_Phrase1('main_index_meta_keywords'));

    }
}
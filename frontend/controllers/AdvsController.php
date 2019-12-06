<?php


namespace frontend\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\base\Component;
use yii\base\BaseObject;
use yii\base\Configurable;
use yii\base\ViewContextInterface;
use frontend\models\Advs;

class AdvsController extends ActiveController
{
    public $modelClass = 'frontend\models\Advs';
  //  public function actionAdvs()
   // {
   //     $advs = Advs::find()->all();
   // }
//        return $this->render('advs', [
//            'advs' => $advs
 //       ]);
  //  }
 //   public function actionAdv() {
 //       $adv = Advs::find()->all();
       // $adv = Advs::find()->where(['adid' => Yii::$app->request->get()['id']])->one();
  //      return $this->render('adv', [
  //         'adv' => $adv
  //      ]);
  //  }
}
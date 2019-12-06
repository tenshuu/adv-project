<?php


namespace frontend\controllers;

use frontend\models\Login;
use Yii;
use frontend\models\Signup;
use yii\web\Controller;


class ReguserController extends Controller
{
    public function actionIndex() {
        return $this->render('index');
    }

    public function actionLogout() {
        if(!Yii::$app->user->isGuest) {
            Yii::$app->user->logout();
            return $this->redirect(['login']);
        }
    }

    public function actionSignup() {
        $model = new Signup();
        if(isset($_POST['Signup'])) {
            $model->attributes = Yii::$app->request->post('Signup');
            if($model->validate()) {
                $model->signup();
                return $this->goHome();
            }
        }
        return $this->render('signup',['model'=>$model]);
    }

    public function actionLogin() {
        if(!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $login_model = new Login();

        if(Yii::$app->request->post('Login')) {
            $login_model->attributes = Yii::$app->request->post('Login');

            if($login_model->validate()) {
                Yii::$app->user->login($login_model->getUser());
                return $this->goHome();
            }
        }
        return $this->render('login',['login_model'=>$login_model]);

    }
}
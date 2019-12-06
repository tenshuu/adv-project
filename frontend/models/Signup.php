<?php


namespace frontend\models;

use yii\base\Model;

class Signup extends Model
{
    public $email;
    public $password;

    public function rules() {
        return [
            [['email','password'],'required']  ,
            ['email','email'],
            ['email','unique','targetClass'=>'frontend\models\Reguser'],
            ['password','string','min'=>6,'max'=>100]
        ];
    }

    public function signup() {
        $user = new Reguser();
        $user->email = $this->email;
        $user->setPassword($this->password);
        return $user->save();
    }
}

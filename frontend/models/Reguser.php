<?php


namespace frontend\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class Reguser extends ActiveRecord implements IdentityInterface
{
    public function setPassword($password) {
        $this->password = sha1($password);
    }

    public function validatePassword($password) {
        return $this->password === sha1($password);
    }

    //============================================
    public static function findIdentity($id) {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null) {

    }

    public function getId() {
        return $this->id;
    }

    public function getAuthKey() {

    }

    public function validateAuthKey($authKey) {

    }
}
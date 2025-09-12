<?php

namespace app\models;

use Yii;
use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $confirm_password;

    public function rules()
    {
        return [
            [['username', 'email', 'password','confirm_password'], 'required'],
            ['email', 'email'],
            ['username', 'unique', 'targetClass' => User::class, 'message' => 'This username has already been taken.'],
            ['email', 'unique', 'targetClass' => User::class, 'message' => 'This email address has already been taken.'],
            ['confirm_password', 'compare', 
                'compareAttribute' => 'password', 
                'message' => "Passwords don't match"],
        ];
    }

    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->created_at = time();
        $user->updated_at = time();
        return $user->save() ? $user : null;
    }
}

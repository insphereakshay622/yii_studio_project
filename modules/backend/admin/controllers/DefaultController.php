<?php

namespace app\modules\backend\admin\controllers;

use app\models\Contact;
use app\models\LoginForm;
use app\models\Project;
use app\models\Service;
use app\models\SignupForm;
use app\models\Team;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['index'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }


    public function actionSignup()
    {   
        $this->layout = false;
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $user = $model->signup()) {
            Yii::$app->user->login($user);
            return $this->redirect(['/admin']);
        }


        return $this->render('signup', ['model' => $model]);
    }

    public function actionLogin()
    {   
        $this->layout = false;
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['/admin']);
        }


        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['/admin']);
        }


        return $this->render('login', ['model' => $model]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['/admin']);
    }


    public function actionIndex()
    {   
        $data = [];
        $data['service'] = Service::find()->count();
        $data['team'] = Team::find()->count();
        $data['project'] = Project::find()->count();
        $data['contact'] = Contact::find()->count();

        // echo "<pre>";
        // print_r($data);

        
        return $this->render('index',
        [
            'data'=>$data,
        ]);
    }





}

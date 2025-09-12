<?php

namespace app\controllers;

use app\models\Contact;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Feedback;
use app\models\Project;
use app\models\Service;
use app\models\Team;

class SiteController extends Controller
{
   
   
    public function actionIndex()
    {
        return $this->render('index');
    }

   
    public function actionAbout()
    {   
        $teams = Team::find()->all();
        return $this->render('about',['teams'=>$teams]);
    }

    public function actionService()
    {   
        $service = Service::find()->all();
        $feedbacks = Feedback::find()->all();

        return $this->render('service',['services'=>$service,'feedbacks'=>$feedbacks]);
    }

    public function actionContact()
    {

        $model = new Contact();

        if($model->load(yii::$app->request->post()) && $model->save()){
            return $this->redirect(['index']);
        }

        return $this->render('contact',[
            'model' => $model,
        ]);

    }

    public function actionProject()
    {   
        $service = Service::find()->all();
        $feedbacks = Feedback::find()->all();
        $projects = Project::find()->limit(6)->all();
        return $this->render('project',
        [
            'projects'=>$projects,
            'feedbacks'=>$feedbacks
        ]);
    }

    public function actionTeam()
    {   
        $teams = Team::find()->all();
        return $this->render('team',['teams'=>$teams]);
    }

    public function actionFeature()
    {
        return $this->render('feature');
    }

    // public function actionError(){
    //     return $this->render('error');
    // }



    


   
}

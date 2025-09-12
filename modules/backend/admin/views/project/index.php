<?php

use app\models\Project;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ProjectCrud $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="app-content">
   
    <div class="container-fluid">
        <div class="project-index">

            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <?php
            ?>

            <!-- <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    'id',
                    'title',
                    'description:ntext',
                    'key_points:ntext',
                    'status',
                    [
                        'class' => ActionColumn::className(),
                        'urlCreator' => function ($action, Project $model, $key, $index, $column) {
                            return Url::toRoute([$action, 'id' => $model->id]);
                        }
                    ],
                ],
            ]); ?> -->


        </div>
    </div>
</div>
<div class="content-wrapper" style="min-height: 1604.44px;">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">
                          #
                      </th>
                      <th style="width: 20%">
                          Project Name
                      </th>
                      <!-- <th style="width: 30%">
                          Team Members
                      </th> -->
                      <!-- <th>
                          Project Progress
                      </th> -->
                       <th style="width: 45%">
                          Description
                      </th>
                      <th style="width: 10%" >
                          Status
                      </th>
                      <th style="width: 20%">
                        Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach($data as $key=>$project):  ?>

                    <tr>
                      <td>
                          <?= ($key+1)?>
                      </td>
                      <td>
                          <a>
                              <?=$project['title'] ?>
                          </a>
                          <br>
                          <!-- <small>
                              Created 01.01.2019
                          </small> -->
                      </td>
                     
                      <!-- <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                              </div>
                          </div>
                          <small>
                              57% Complete
                          </small>
                      </td> -->
                      <td class="project-state">
                          <span class=""> <?=$project['description'] ?></span>
                      </td>
                      <td class="project-state">
                          <span class="text-success"> <?=$project['status'] ?></span>
                      </td>
                      <td class="project-actions text-right">

                          <a class="btn btn-primary btn-sm" href="<?= Url::to(['project/view', 'id' => $project->id]) ?>">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="<?= Url::to(['project/update', 'id' => $project->id]) ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" 
                            href="<?= Url::to(['project/delete', 'id' => $project->id]) ?>" 
                            data-confirm="Are you sure you want to delete this item?" 
                            data-method="post">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>

                <?php endforeach;  ?>

                  <!-- <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                              AdminLTE v3
                          </a>
                          <br>
                          <small>
                              Created 01.01.2019
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                              </li>
                          </ul>
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                              </div>
                          </div>
                          <small>
                              57% Complete
                          </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr> -->
                  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
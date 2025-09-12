<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'projects';
?>

<!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Projects</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="<?= Url::to(['site/index']) ?>">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-primary" href="<?= Url::to(['site/project']) ?>">Pages</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Projects</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Project Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-0">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                        <h1 class="text-white mb-5">Our Latest <span
                                class="text-uppercase text-primary bg-light px-2">Projects</span></h1>
                        <h4 class="text-white mb-0"><span class="display-1">6</span> of our latest projects</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-0">
                        <?php $t = 0.2; $i = 1; ?>
                        <?php foreach($projects as $project): ?>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="<?=$t?>s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="<?= Yii::getAlias('@web/img/project-'.$i.'.jpg') ?>" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white"><?=$project->title ?></h4>
                                    <small class="text-white"><?= $r = rand(50, 70) ?> Projects</small>
                                </a>
                            </div>
                        </div>
                        <?php $t = $t + 0.1;
                                $i++;
                        ?>
                        <?php endforeach ?>
                        <!-- <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="<?= Yii::getAlias('@web/img/project-2.jpg') ?>" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Bathroom</h4>
                                    <small class="text-white">67 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="<?= Yii::getAlias('@web/img/project-3.jpg') ?>" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Bedroom</h4>
                                    <small class="text-white">53 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="<?= Yii::getAlias('@web/img/project-4.jpg') ?>" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Living Room</h4>
                                    <small class="text-white">33 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="<?= Yii::getAlias('@web/img/project-5.jpg') ?>" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Furniture</h4>
                                    <small class="text-white">87 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="<?= Yii::getAlias('@web/img/project-6.jpg') ?>" alt="">
                                <a class="project-overlay text-decoration-none" href="#!">
                                    <h4 class="text-white">Rennovation</h4>
                                    <small class="text-white">69 Projects</small>
                                </a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Testimonial Start -->
    <div class="container-xxl pb-5">
        <div class="container pb-5">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-9">
                    <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay="0.2s">
                       
                        <?php foreach($feedbacks as $key=>$feedback):  ?>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="<?= Yii::getAlias('@web/img/testimonial-'.($key+1).'.jpg') ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <h3><?=$feedback->subject ?></h3>
                                        <p><?=$feedback->review ?></p>
                                       
                                        <h5 class="mb-0"><?=$feedback->name ?></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                        <!-- <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="<?= Yii::getAlias('@web/img/testimonial-2.jpg') ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <h3>Customer Satisfaction</h3>
                                        <p>Clita erat ipsum et lorem et sit, sed
                                            stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna
                                            dolore erat
                                            amet</p>
                                        <h5 class="mb-0">Alexander Bell</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <div class="row g-5 align-items-center">
                                <div class="col-md-6">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="<?= Yii::getAlias('@web/img/testimonial-3.jpg') ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="testimonial-text pb-5 pb-md-0">
                                        <h3>Budget Friendly</h3>
                                        <p>Diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed
                                            stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna
                                            dolore erat
                                            amet</p>
                                        <h5 class="mb-0">Bradley Gordon</h5>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
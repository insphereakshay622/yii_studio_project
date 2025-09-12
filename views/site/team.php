<?php

use yii\helpers\Url;

$this->title = 'Team';
?>


<!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Our Team</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="<?= Url::to(['site/index']) ?>">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-primary" href="<?= Url::to(['site/team']) ?>">Pages</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Our Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="mb-5">Our Professional <span class="text-uppercase text-primary bg-light px-2">Designers</span>
            </h1>
            <div class="row g-4">
                <?php $t=0.1; ?>
                <?php foreach($teams as $key=>$team): ?>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="<?=$t?>s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?= Yii::getAlias('@web/img/team-'.($key+1).'.jpg') ?>" alt="">
                        <div class="team-overlay">
                            <small class="mb-2"><?=$team->position ?></small>
                            <h4 class="lh-base text-light"><?=$team->name ?></h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
                <!-- <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?= Yii::getAlias('@web/img/team-2.jpg') ?>" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">Architect</small>
                            <h4 class="lh-base text-light">Donald Pakura</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?= Yii::getAlias('@web/img/team-3.jpg') ?>" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">Architect</small>
                            <h4 class="lh-base text-light">Bradley Gordon</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="team-item position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?= Yii::getAlias('@web/img/team-4.jpg') ?>" alt="">
                        <div class="team-overlay">
                            <small class="mb-2">Architect</small>
                            <h4 class="lh-base text-light">Alexander Bell</h4>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="btn btn-outline-primary btn-sm-square border-2 me-2" href="#!">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Team End -->
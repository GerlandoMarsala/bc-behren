<!-- Présentation des compétiteur -->

<?php
// session_start();

require '../modele/connexionBdd.php';
require '../modele/fonctions.php';




?>


<div class="containerPresentationClub">
    <h1 class="titlePage"><span class="colorTitleB">C</span>OMPÉTITEURS</h1>
    <div class="borderTitlePage"></div>



    <h2 class="text-center py-5 titleStyle">AMATEURS</h2>
    <div class="containerPresentationCompetiteur container">
        <div class="row alignRow policeCompetiteur">
            <div data-aos="fade-down-right" data-aos-duration="1500" class="cardTeam col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="containerCardImg">
                <div class="cardImg">
                    <img src="assets/img/galerie-bcb1.jpg" class="card-img-top" style="width: 100%;" alt="Sunset Over the Sea" />
                    <div class="text">
                        <h2 class="name border-bottom">Youssef Joui</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Palmares</p>
                            </div>
                            <div class="col-lg-6">
                                <p>10 v/ 1 n/ 4 d</p>
                            </div>
                        </div>
                        <div class="row bg-white text-black border-bottom">
                            <div class="col-lg-6">
                                <p>Poids lourd</p>
                            </div>
                            <div class="col-lg-6">
                                <p>+ 91kg</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!-- <div data-aos="fade-down-right" data-aos-duration="1500" class="cardTeam col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="cardImg">
                    <img src="assets/img/galerie-bcb1.jpg" class="card-img-top" style="width: 100%;" alt="Sunset Over the Sea" />
                    <div class="text">
                        <h2 class="name border-bottom">Christian PIGA</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Palmares</p>
                            </div>
                            <div class="col-lg-6">
                                <p>10 v/ 1 n/ 4 d</p>
                            </div>
                        </div>
                        <div class="row bg-white text-black border-bottom">
                            <div class="col-lg-6">
                                <p>Poids lourd</p>
                            </div>
                            <div class="col-lg-6">
                                <p>+ 91kg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-down-right" data-aos-duration="1500" class="cardTeam col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="cardImg">
                    <img src="assets/img/galerie-bcb1.jpg" class="card-img-top" style="width: 100%;" alt="Sunset Over the Sea" />
                    <div class="text">
                        <h2 class="name border-bottom">Christian PIGA</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Palmares</p>
                            </div>
                            <div class="col-lg-6">
                                <p>10 v/ 1 n/ 4 d</p>
                            </div>
                        </div>
                        <div class="row bg-white text-black border-bottom">
                            <div class="col-lg-6">
                                <p>Poids lourd</p>
                            </div>
                            <div class="col-lg-6">
                                <p>+ 91kg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- 
            <div data-aos="fade-down-right" data-aos-duration="1500" class="cardTeam col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="cardImg">
                    <img src="assets/img/president.jpg" class="card-img-top" style="width: 100%;" alt="Sunset Over the Sea" />
                    <div class="text">
                        <h2 class="name border-bottom">Christian PIGA</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Palmares</p>
                            </div>
                            <div class="col-lg-6">
                                <p>10 v/ 1 n/ 4 d</p>
                            </div>
                        </div>
                        <div class="row bg-white text-black border-bottom">
                            <div class="col-lg-6">
                                <p>Poids lourd</p>
                            </div>
                            <div class="col-lg-6">
                                <p>+ 91kg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
<!-- 
        <div class="row alignRow policeCompetiteur">
            <div data-aos="fade-down-right" data-aos-duration="1500" class="cardTeam col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="cardImg">
                    <img src="assets/img/president.jpg" class="card-img-top" style="width: 100%;" alt="Sunset Over the Sea" />
                    <div class="text">
                        <h2 class="name border-bottom">Christian PIGA</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Palmares</p>
                            </div>
                            <div class="col-lg-6">
                                <p>10 v/ 1 n/ 4 d</p>
                            </div>
                        </div>
                        <div class="row bg-white text-black border-bottom">
                            <div class="col-lg-6">
                                <p>Poids lourd</p>
                            </div>
                            <div class="col-lg-6">
                                <p>+ 91kg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-down-right" data-aos-duration="1500" class="cardTeam col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="cardImg">
                    <img src="assets/img/president.jpg" class="card-img-top" style="width: 100%;" alt="Sunset Over the Sea" />
                    <div class="text">
                        <h2 class="name border-bottom">Christian PIGA</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Palmares</p>
                            </div>
                            <div class="col-lg-6">
                                <p>10 v/ 1 n/ 4 d</p>
                            </div>
                        </div>
                        <div class="row bg-white text-black border-bottom">
                            <div class="col-lg-6">
                                <p>Poids lourd</p>
                            </div>
                            <div class="col-lg-6">
                                <p>+ 91kg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-down-right" data-aos-duration="1500" class="cardTeam col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="cardImg">
                    <img src="assets/img/president.jpg" class="card-img-top" style="width: 100%;" alt="Sunset Over the Sea" />
                    <div class="text">
                        <h2 class="name border-bottom">Christian PIGA</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Palmares</p>
                            </div>
                            <div class="col-lg-6">
                                <p>10 v/ 1 n/ 4 d</p>
                            </div>
                        </div>
                        <div class="row bg-white text-black border-bottom">
                            <div class="col-lg-6">
                                <p>Poids lourd</p>
                            </div>
                            <div class="col-lg-6">
                                <p>+ 91kg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="fade-down-right" data-aos-duration="1500" class="cardTeam col-lg-6 col-md-6 col-sm-12 p-0">
                <div class="cardImg">
                    <img src="assets/img/president.jpg" class="card-img-top" style="width: 100%;" alt="Sunset Over the Sea" />
                    <div class="text">
                        <h2 class="name border-bottom">Christian PIGA</h2>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Palmares</p>
                            </div>
                            <div class="col-lg-6">
                                <p>10 v/ 1 n/ 4 d</p>
                            </div>
                        </div>
                        <div class="row bg-white text-black border-bottom">
                            <div class="col-lg-6">
                                <p>Poids lourd</p>
                            </div>
                            <div class="col-lg-6">
                                <p>+ 91kg</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    </div>
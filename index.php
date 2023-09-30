<?php 
  include 'complements/cabecera.php';
  include 'Globals/conexion.php';
  
?>



        <!-- Start Slider Section -->
        <section class="bg-slider-option">
            <div class="slider-option slider-two">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <div class="slider-item">
                                <img src="assets/img/slider1.jpg" alt="bg-slider-2">
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="slider-content">
                                                    <!--<h3>welcome to green forest</h3>-->
                                                    <h2>BAJA COAST</h2>
                                                    <!--<p>By Planting Tree Tomorrow!</p>-->
                                                    <div class="slider-btn">
                                                        <a href="nosotros.php" class="btn btn-default">NOSOTROS</a>
                                                        <a href="registro.php" class="btn btn-default">RESGISTRATE</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <div class="slider-item">
                                <img src="assets/img/slider2.jpg" alt="bg-slider-2">
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="slider-content">
                                                    <!--<h3>welcome to green forest</h3>-->
                                                    <h2>BAJA COAST</h2>
                                                    <!--<p>By Planting Tree Tomorrow!</p>-->
                                                    <div class="slider-btn">
                                                        <a href="nosotros.php" class="btn btn-default">NOSOTROS</a>
                                                        <a href="registro.php" class="btn btn-default">RESGISTRATE</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="left carousel-control carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="right carousel-control carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- End Slider Section -->


        <!-- Start About Greenforest Section 
        <section class="bg-about-greenforest">
            <div class="container">
                <div class="row">
                    <div class="about-greenforest">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="about-greenforest-content">
                                    <h2>about greenforest</h2>
                                    <p><span>Globaly eenable turnkey aplcations interndent awesome andbenefisa tional awesome ascenarios exceptional scenarios awesome theme strategies.</span></p>
                                    <p>Globally eenable turnkey applications via interdependent awesome andbenefitsa theme are awesome Uniquely formulate impacful bandwidth with client centered creative ianitiatives Interively productivate vertcal paradigms before resource maximg convergence. Efciey diseminate mtidisciplinary mindshare after clientcentered creative theme experienvertcal paradigms before resource maximg convergence. Efciey diseminate mindshare clientcentered creative theme experiences.</p>
                                    <a href="#" class="btn btn-default">join now</a>
                                    <a href="#" class="btn btn-default">donate now</a>
                                </div>
                                <!-- .about-greenforest-content
                            </div>
                            <!-- .col-lg-8 
                            <div class="col-lg-4">
                                <div class="about-greenforest-img">
                                    <img src="assets/images/home02/about-greenforet-img.jpg" alt="about-greenforet-img" class="img-responsive" />
                                </div>
                                <!-- .about-greenforest-img 
                            </div>
                            <!-- .col-md-4
                        </div>
                    </div>
                    <!-- .about-greenforest 
                </div>
                <!-- .row 
            </div>
            <!-- .container 
        </section>
        <!-- End About Greenforest Section -->



        <!-- Start Service Style2 Section -->
        <section class="bg-servicesstyle2-section">
            <div class="container">
                <div class="row">
                    <div class="our-services-option">
                        <div class="section-header">
                            <h2>PRÓXIMAS CAMINATAS</h2>
                            <p>Aquí algunos de nuestras caminatas publicada en nuestro Instagram.</p>
                        </div>
                        <!-- .section-header -->
                        <center><div class="row">

                                <?php
                                  
                                  $sentenciaInsta=$pdo->prepare("SELECT * FROM tb_insta");
                                  $sentenciaInsta->execute();
                                  $listaPost=$sentenciaInsta->fetchAll(PDO::FETCH_ASSOC);
                 
                                  foreach($listaPost as $post){
                                     
                                ?>

                                <div class="col-md-6">        
                                    <?php echo $post['link']; ?>
                                </div>

                                <?php } ?>
                                <!--<div class="col-md-6">
                                    <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CcRDjXCPGJD/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CcRDjXCPGJD/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Ver esta publicación en Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CcRDjXCPGJD/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Una publicación compartida de Baja Coast Hiking (@bajacoasthiking1)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                                </div> -->  
                                <!-- .col-md-4 -->
                        </div></center>
                        <!-- .row -->
                    </div>
                    <!-- .our-services-option -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- End Service Style2 Section -->

        <!-- Start campaian video Section -->
        <section class="bg-compaian-video">
            <div class="compaian-video-overlay">
                <div class="container">
                    <div class="row">
                        <div class="compaian-video">
                            <a href="https://www.youtube.com/embed/dS8KQq4Axwg" data-rel="lightcase:myCollection"><img src="assets/images/home02/video-icon.png" alt="video-icon" /></a>
                            <h3>MIRA NUESTRO ÚLTIMO VÍDEO DE CAMPAÑA</h3>
                        </div>
                        <!-- .compaian-video -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .compaian-video-overlay -->
        </section>
        <!-- End campaian video Section -->



        <!-- Start Sponsors Section -->
        <section class="bg-sponsors-section">
            <div class="container">
                <div class="row">
                    <div class="sponsors-option">
                        <div class="section-header">
                            <h2>CERTIFICACIONES</h2>
                        </div>
                        <!-- .section-header -->
                        <div class="sponsors-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="sopnsors-items">
                                        <a href="#"><img src="assets/img/sponsor1.png" alt="sponsors-img-1" class="img-responsive" /></a>
                                    </div>
                                    <!-- .sponsors-items -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="sopnsors-items">
                                        <a href="#"><img src="assets/img/sponsor2.png" alt="sponsors-img-2" class="img-responsive" /></a>
                                    </div>
                                    <!-- .sponsors-items -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="sopnsors-items">
                                        <a href="#"><img src="assets/img/sponsor3.png" alt="sponsors-img-3" class="img-responsive" /></a>
                                    </div>
                                    <!-- .sponsors-items -->
                                </div>
                                <!-- .swiper-slide -->
                                <div class="swiper-slide">
                                    <div class="sopnsors-items">
                                        <a href="#"><img src="assets/img/sponsor4.png" alt="sponsors-img-4" class="img-responsive" /></a>
                                    </div>
                                    <!-- .sponsors-items -->
                                </div>
                                <!-- .swiper-slide -->

                            </div>
                            <!-- .swiper-wrapper -->
                        </div>
                        <!-- .sponsors-container -->
                    </div>
                    <!-- .sponsors-option -->
                </div>
                <!-- .row -->
            </div>
            <!-- .container -->
        </section>
        <!-- End Sponsors Section -->


        <!-- Start Footer Section -->
        
<?php
include 'complements/finalpage.php';
?>        
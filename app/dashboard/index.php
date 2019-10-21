<?php
session_start();
$titulo = "Aquí es!";
$actual = "login";  
require_once("../layout/header.php"); 
?>
<link rel="stylesheet" href="../../assets/css/guest/auth/style.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/guest/auth/login_style.css" type="text/css">
<style type="text/css">
body {
    background: url("../../assets/img/fondo.jpg")repeat center center fixed;
    background-size: cover;
}
.center-div-link{ 
    background-color: rgba(0, 0, 0, 0.5) !important;
}

</style>
<?php
require_once("../layout/css.php");
?>
<!--Intro Section-->
<section class="view intro-2">
        <div class="mask pattern-0 flex-center"></div>
                <div class="full-bg-img">
                    <div class="container flex-center">
                        <div class="d-flex align-items-center content-height">
                            <div class="row flex-center pt-5 mt-5">
                     
                            <div class="col-12 mb-1 content-div">
                                    <!--Form-->
                                    <div class="card z-depth-5 hoverable">
                                        <div class="card-body">
                            
                                            <!--Carousel Wrapper-->
                                            <div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
                                            <!--Indicators-->
                                            <ol class="carousel-indicators">
                                                <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
                                                <li data-target="#video-carousel-example2" data-slide-to="1"></li>
                                                <li data-target="#video-carousel-example2" data-slide-to="2"></li>
                                                <li data-target="#video-carousel-example2" data-slide-to="3"></li>
                                                <li data-target="#video-carousel-example2" data-slide-to="4"></li>
                                            </ol>
                                            <!--/.Indicators-->
                                            <!--Slides-->
                                            <div class="carousel-inner" role="listbox">
                                                <!-- First slide -->
                                                <div class="carousel-item active">
                                                <!--Mask color-->
                                                    <div class="view">
                                                        <!--Video source-->
                                                        <img width="1123" height="500" src="../../assets/img/fincas/portadas/laJacaranda.jpeg" alt="">
                                                        <div class="mask rgba-blue-slight"></div>
                                                    </div>

                                                <!--Caption-->
                                                    <div class="carousel-caption">
                                                        <div class="animated fadeInDown">
                                                        <h3 class="h3-responsive">LA JACARANDA</h3>
                                                        <p>Cod: 1005</p>
                                                        </div>
                                                    </div>
                                                <!--Caption-->
                                                </div>
                                                <!-- /.First slide -->

                                                <!-- Second slide -->
                                                <div class="carousel-item">
                                                <!--Mask color-->
                                                    <div class="view">
                                                        <!--Video source-->
                                                        <img width="1123" height="500" src="../../assets/img/fincas/portadas/villaAmerica.jpeg" alt="">
                                                        <div class="mask rgba-blue-slight"></div>
                                                    </div>

                                                <!--Caption-->
                                                    <div class="carousel-caption">
                                                        <div class="animated fadeInDown">
                                                        <h3 class="h3-responsive">VILLA AMÉRICA</h3>
                                                        <p>Cod: 1002</p>
                                                        </div>
                                                    </div>
                                                <!--Caption-->
                                                </div>
                                                <!-- /.Second slide -->

                                                <!-- Third slide -->
                                                <div class="carousel-item">
                                                <!--Mask color-->
                                                    <div class="view">
                                                        <!--Video source-->
                                                        <img width="1123" height="500" src="../../assets/img/fincas/portadas/villaGiovanna.jpeg" alt="">
                                                        <div class="mask rgba-blue-slight"></div>
                                                    </div>

                                                <!--Caption-->
                                                    <div class="carousel-caption">
                                                        <div class="animated fadeInDown">
                                                        <h3 class="h3-responsive">VILLA GEOVANNA</h3>
                                                        <p>Cod: 1004</p>
                                                        </div>
                                                    </div>
                                                <!--Caption-->
                                                </div>
                                                <!-- /.Third slide -->
                                                <div class="carousel-item">
                                                <!--Mask color-->
                                                    <div class="view">
                                                        <!--Video source-->
                                                        <img width="1123" height="500" src="../../assets/img/fincas/portadas/villaKamiche.jpeg" alt="">
                                                        <div class="mask rgba-blue-slight"></div>
                                                    </div>

                                                <!--Caption-->
                                                    <div class="carousel-caption">
                                                        <div class="animated fadeInDown">
                                                        <h3 class="h3-responsive">VILLA KAMICHE</h3>
                                                        <p>Cod: 1003</p>
                                                        </div>
                                                    </div>
                                                <!--Caption-->
                                                </div>
                                                <!-- /.Third slide -->
                                                <div class="carousel-item">
                                                <!--Mask color-->
                                                    <div class="view">
                                                        <!--Video source-->
                                                        <img width="1123" height="500" src="../../assets/img/fincas/portadas/villaNancy.jpeg" alt="">
                                                        <div class="mask rgba-blue-slight"></div>
                                                    </div>

                                                <!--Caption-->
                                                    <div class="carousel-caption">
                                                        <div class="animated fadeInDown">
                                                        <h3 class="h3-responsive">VILLA NANCY</h3>
                                                        <p>Cod: 1006</p>
                                                        </div>
                                                    </div>
                                                <!--Caption-->
                                                </div>
                                                <!-- /.Third slide -->
                                            </div>
                                            <!--/.Slides-->
                                            <!--Controls-->
                                            <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Anterior</span>
                                            </a>
                                            <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Siguiente</span>
                                            </a>
                                            <!--/.Controls-->
                                            </div>
                                            <!--Carousel Wrapper-->
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php
require_once("../layout/js.php");
?>
<script type="text/javascript" src="../../assets/js/addons/validation/jquery.validate.js"></script>
<script type="text/javascript" src="../../assets/js/addons/validation/messages_es.js"></script>
<script type="text/javascript">

</script>
<?php
require_once("../layout/footer.php");
?>
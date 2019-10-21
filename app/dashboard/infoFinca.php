<?php
$titulo = "Información Finca - Aquí es!";
$actual = "state";
require_once("../layout/header.php");
require_once("../../controllers/require/pdo.php");
?>
<link rel="stylesheet" href="../../assets/css/guest/auth/style.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/guest/auth/login_style.css" type="text/css">
<style type="text/css">
body {
    background: url("../../assets/img/fondo.jpg")repeat center center fixed;
    background-size: cover;
}
 

</style> 

<?php 

require_once("../layout/css.php");
session_start();
    //if(@$_SESSION['usuario']){
    //$user = json_decode($_SESSION['usuario']);
    $db = new PDO_Connect;
    $db->connect();
    $id = $_SESSION['usuario'];
   
    $finca = $db->getRow("SELECT * FROM fincas WHERE idfincas = ?",array($id));
    $imagen = $db->getRow("SELECT * FROM imagenes WHERE idFinca = ?",array($id));
    //}
?>

<!--Intro Section-->
<section class="section pt-4">
        <div class="mask pattern-0 flex-center">
                <div class="full-bg-img">
                    <div class="container flex-center">
                        <div class="d-flex align-items-center content-height">
                            <div class="row flex-center pt-5 mt-3">
                        
                                                   <!--Datos personales--> 
                                
                                <div class="col-12 mb-5 content-div">
                                    <!--Form-->
                                    <div class="card z-depth-5 hoverable">
                                        <div class="card-body">
                                            <!--Header-->
                                            <div class="text-center">
                                                <h4 class="white-text"><i class="fas fa-info-circle"></i>
                                                Información de la finca <?php echo $finca->nombreFinca; ?>
                                            </h4>
                                                <!--hr class="hr-light"-->
                                                 
                                                <div style=" text-align: center; background-color: rgba(255,255,255,0)!important;">
                                                    <table  class="table table-sm table-hover" >
                                                            <thead>
                                                                
                                                            </thead>
                                                            <tbody style=" text-align: left;background-color: rgba(0,0,0,0.05)!important;">
                                                            <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Código </strong></th>
                                                                <td>
                                                                    <h4><span class="badge badge-success hoverable">
                                                                    <?php echo $finca->codigo ?>
                                                                                </span></h4>                        
                                                                </td>
                                                                </tr>    
                                                            <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Capacidad</strong></th>
                                                                <td><?php echo $finca->capacidad; ?></td>
                                                                
                                                            </tr>
                                                            <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Descripción</strong></th>
                                                                <td><?php  echo mb_strtoupper(utf8_decode($finca->descripcion), 'UTF-8'); ?></td>
                                                            </tr>
                                                            <tr class="hoverable tr-theme">
                                                                <th scope="row"><strong>Ubicación</strong></th>
                                                                <td><?php echo mb_strtoupper($finca->ubicacion, 'UTF-8'); ?></td>
                                                            </tr>
                                                                
                                                            </tbody>
                                                        </table>
                                                        <!--
                                                        <a href="../../controllers/exit.php" class="btn btn-theme btn-outline-white hoverable waves-light waves-effect"><i class="fas fa-door-closed mr-2"></i>Regresar a la Página Principal</a>
                                                        -->
                                                        
                                                </div>
                                                
                                                </div>
   
                                        </div>
                                    </div>
                                    <!--/.Form-->
                                  
                                </div>

                                <!--Fin datos Persoanles-->
                              
                                <div class="col-12 mb-1 content-div">
                                    <!--Form-->
                                    <div class="card z-depth-5 hoverable">
                                        <div class="card-body">
                                        <div class="text-center">
                                                <h4 class="white-text"><i class="fas fa-images"></i>
                                                Imagenes de <?php echo $finca->nombreFinca; ?>
                                            </h4>
                                            <hr class="hr-light">
                                            <!--Carousel Wrapper-->
                                            <div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
                                            <!--Indicators-->
                                            <ol class="carousel-indicators">
                                                <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
                                                <li data-target="#video-carousel-example2" data-slide-to="1"></li>
                                                <li data-target="#video-carousel-example2" data-slide-to="2"></li>
                                                <li data-target="#video-carousel-example2" data-slide-to="3"></li>
                                                <li data-target="#video-carousel-example2" data-slide-to="4"></li>
                                                <li data-target="#video-carousel-example2" data-slide-to="5"></li>
                                                <li data-target="#video-carousel-example2" data-slide-to="6"></li>
                                            </ol>
                                            <!--/.Indicators-->
                                            <!--Slides-->
                                            <div class="carousel-inner" role="listbox">
                                                <!-- First slide -->
                                                <div class="carousel-item active">
                                                <!--Mask color-->
                                                    <div class="view">
                                                        <!--Video source-->
                                                        <img width="1800" height="500" src="<?php echo $imagen->img1 ?>" alt="">
                                                        <div class="mask rgba-black-light"></div>
                                                    </div>

                                                <!--Caption-->
                                                    <div class="carousel-caption">
                                                        <div class="animated fadeInDown">
                                                        <h3 class="h3-responsive"><?php echo $finca->nombreFinca ?></h3>
                                                        <p>Cod: 1005</p>
                                                        </div>
                                                    </div>
                                                <!--Caption-->
                                                </div>
                                                <!-- /.First slide -->

                                                <div class="carousel-item ">
                                                <!--Mask color-->
                                                    <div class="view">
                                                        <!--Video source-->
                                                        <img width="1800" height="500" src="<?php echo $imagen->img2 ?>" alt="">
                                                        <div class="mask rgba-black-light"></div>
                                                    </div>

                                                <!--Caption-->
                                                    <div class="carousel-caption">
                                                        <div class="animated fadeInDown">
                                                        <h3 class="h3-responsive"><?php echo $finca->nombreFinca ?></h3>
                                                        <p>Cod: 1005</p>
                                                        </div>
                                                    </div>
                                                <!--Caption-->
                                                </div>

                                                <div class="carousel-item ">
                                                <!--Mask color-->
                                                    <div class="view">
                                                        <!--Video source-->
                                                        <img width="1800" height="500" src="<?php echo $imagen->img3 ?>" alt="">
                                                        <div class="mask rgba-black-light"></div>
                                                    </div>

                                                <!--Caption-->
                                                    <div class="carousel-caption">
                                                        <div class="animated fadeInDown">
                                                        <h3 class="h3-responsive"><?php echo $finca->nombreFinca ?></h3>
                                                        <p>Cod: 1005</p>
                                                        </div>
                                                    </div>
                                                <!--Caption-->
                                                </div>

                                                <div class="carousel-item ">
                                                <!--Mask color-->
                                                    <div class="view">
                                                        <!--Video source-->
                                                        <img width="1800" height="500" src="<?php echo $imagen->img4 ?>" alt="">
                                                        <div class="mask rgba-black-light"></div>
                                                    </div>

                                                <!--Caption-->
                                                    <div class="carousel-caption">
                                                        <div class="animated fadeInDown">
                                                        <h3 class="h3-responsive"><?php echo $finca->nombreFinca ?></h3>
                                                        <p>Cod: 1005</p>
                                                        </div>
                                                    </div>
                                                <!--Caption-->
                                                </div>

                                                <div class="carousel-item ">
                                                <!--Mask color-->
                                                    <div class="view">
                                                        <!--Video source-->
                                                        <img width="1800" height="500" src="<?php echo $imagen->img5 ?>" alt="">
                                                        <div class="mask rgba-black-light"></div>
                                                    </div>

                                                <!--Caption-->
                                                    <div class="carousel-caption">
                                                        <div class="animated fadeInDown">
                                                        <h3 class="h3-responsive"><?php echo $finca->nombreFinca ?></h3>
                                                        <p>Cod: 1005</p>
                                                        </div>
                                                    </div>
                                                <!--Caption-->
                                                </div>

                                                <div class="carousel-item ">
                                                <!--Mask color-->
                                                    <div class="view">
                                                        <!--Video source-->
                                                        <img width="1800" height="500" src="<?php echo $imagen->img6 ?>" alt="">
                                                        <div class="mask rgba-black-light"></div>
                                                    </div>

                                                <!--Caption-->
                                                    <div class="carousel-caption">
                                                        <div class="animated fadeInDown">
                                                        <h3 class="h3-responsive"><?php echo $finca->nombreFinca ?></h3>
                                                        <p>Cod: 1005</p>
                                                        </div>
                                                    </div>
                                                <!--Caption-->
                                                </div>

                                                <div class="carousel-item ">
                                                <!--Mask color-->
                                                    <div class="view">
                                                        <!--Video source-->
                                                        <img width="1800" height="500" src="<?php echo $imagen->img7 ?>" alt="">
                                                        <div class="mask rgba-black-light"></div>
                                                    </div>

                                                <!--Caption-->
                                                    <div class="carousel-caption">
                                                        <div class="animated fadeInDown">
                                                        <h3 class="h3-responsive"><?php echo $finca->nombreFinca ?></h3>
                                                        <p>Cod: 1005</p>
                                                        </div>
                                                    </div>
                                                <!--Caption-->
                                                </div>

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

                            <div class="col-12 mb-1 content-div">
                                    <!--Form-->
                                <div class="card z-depth-5 hoverable">
                                    <div class="card-body">
                                        <div class="text-center">
                                        <h4 class="white-text"><i class="fas fa-map-marked-alt mr-2"></i>
                                                Ubicación Real
                                            </h4>
                                            <hr class="hr-light">

                                            <iframe 
                                            width="1000" 
                                            height="500"
                                            frameborder="0" 
                                            scrolling="no" 
                                            marginheight="0" 
                                            marginwidth="0" 
                                            src="https://maps.google.com/maps?q=<?php echo $finca->latitud ?>,<?php echo $finca->longitud ?>&hl=es;z=14&amp;output=embed"
                                            >
                                            </iframe>
                                            <br />
                                            <small>
                                            <a 
                                                href="https://maps.google.com/maps?q=<?php echo $finca->latitud ?>,<?php echo $finca->longitud ?>&hl=es;z=14&amp;output=embed" 
                                                style="color:#0000FF;text-align:left" 
                                                target="_blank"
                                            >

                                            <h4 class="text-center"><span class="badge badge-success hoverable">
                                            Ver mapa mas detallado
                                              </span></h4> 
                                                
                                            </a>
                                            </small>

                                        </div>
                                    </div>
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

function validar(){
  if($("#login_form").validate({
    lang: 'es',
    errorPlacement: function(error, element){
      $(element).parent().after(error);
		}})){
    $("#login_form").submit();
  }
  }

</script>
<?php
require_once("../layout/footer.php");
?>
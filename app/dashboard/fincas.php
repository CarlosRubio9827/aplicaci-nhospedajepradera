<?php
session_start();
$titulo = "Listado de Fincas - Aquí es!";
$actual = "registro";
require_once("../layout/header.php");
require_once("../../controllers/require/pdo.php");
?>
<link rel="stylesheet" href="../../assets/css/guest/auth/style.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/addons/select2.css" type="text/css">
<link rel="stylesheet" href="../../assets/css/addons/bootstrap-material-datetimepicker.css" type="text/css"/>

<style type="text/css">
body {
    background: url("../../assets/img/fondo.jpg")repeat center center fixed;
    background-size: cover;
}

.card{ 
    background-color: rgba(0, 0, 0, 0.5) !important;
}
input,.md-form > small,.select2-selection__rendered{
    color:  white !important;
    }
</style>
<?php
require_once("../layout/css.php");
?>
<?php

$db = new PDO_Connect;
$db->connect();

$fincas = $db->getAll("SELECT * FROM fincas");
 
?>
<main>
<section class="view intro-2">
        <div class="mask pattern-0 flex-center"></div>
<!-- Main Container -->
<div class="container mt-5 pt-5">
   
    <div class="row">
        <!-- Content -->
        <div class="col-md-12 mb-4">

           <!-- Products Grid -->
           <section class="section pt-5" >

                <!-- Grid row -->
                <div class="row">
                    
                    <?php
                          $i =1;  foreach($fincas as $row){
                                
                              ?>
                    <div class="col-md-4">
                        <div class="card z-depth-5 hoverable">
                            <div class="card-body">
                                <!--Header-->
                               
                                <!-- Card -->
                                <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">
                                <img class="card-img-top" src="<?php echo $row->imagen; ?>" alt="Card image cap">
                                <a href="#!">
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body">

                                <!-- Title -->
                                <h4 class="card-title text-white text-center"><?php echo $row->nombreFinca; ?></h4>
                                <!-- Text -->
                                <p class="card-text text-center">Código: <?php echo $row->codigo;?></p>
                                <p class=" card-text ">
                                    <h5 class="text-white text-center">Capacidad: <?php echo $row->capacidad;?></h5>   
                                </p>
                                <!-- Button -->
                                <h4 class="text-center">
                                <a class="nav-link border border-light rounded hoverable waves-light" onclick="mostrarFinca(<?php echo $row->idfincas; ?>);">
                                    <form id="finca" method="POST" action="../../controllers/auth.php">
                                    
                                    <input type="hidden" required value="<?php echo $row->idfincas ?>" name="idfinca" id="ejemplo">    
                                    <input type="hidden" required value="finca" name="method" id="ejemplo2">
                                       
                                    </form>
                                           <h5 class="text-white text-center">Ver más</h5> 
                                </a>
                                
                          </h4>
                                </div>

                                </div>
                                <!-- Card -->

                            </div>
                        </div>
                    </div>
                    <?php
                    $i++;
                        }
                    ?>
                </div>
            <!--Grid row-->
            </section>
            <!-- /.Products Grid -->
        </div>
    </div>
</div>
<!-- /.Main Container -->
</section>
</main>
<?php
require_once("../layout/js.php");
?>
<script type="text/javascript" src="../../assets/js/addons/select2.min.js"></script>
<script type="text/javascript" src="../../assets/js/addons/i18n/es.js"></script>
<script type="text/javascript" src="../../assets/js/addons/bootstrap-material-datetimepicker.js"></script>
<script type="text/javascript" src="../../assets/js/addons/validation/jquery.validate.js"></script>
<script type="text/javascript" src="../../assets/js/addons/validation/messages_es.js"></script>
<script type="text/javascript">

function mostrarFinca(idfincas){
 
  $("#ejemplo").attr("value",idfincas);
  
  $("#finca").submit();

}

</script>
<?php
require_once("../layout/footer.php");
?>
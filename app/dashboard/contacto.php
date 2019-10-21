<?php
session_start();
$titulo = "Contacto - Aquí es!";
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

?>
<!--Intro Section-->
<section class="section pt-4">
        <div class="mask pattern-0 flex-center"></div>
                <div class="full-bg-img">
                    <div class="container flex-center">
                        <div class="d-flex align-items-center content-height">
                            <div class="row flex-center pt-5 mt-5">
                     
                                <div class="col-12 mb-1 content-div">
                                    <!--Form-->
                                    <div class="card z-depth-5 hoverable">
                                        <div class="card-body">
                                            <!--Header-->
                                            <div class="text-center">
                                            
                                                <img width="1000" height="400" src="../../assets/img/fincas/tarjetaContacto/tarjetaContacto.jpeg" alt="">
                                            
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
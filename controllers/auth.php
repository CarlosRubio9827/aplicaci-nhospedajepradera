<?php
include "require/pdo.php";
$method = $_POST['method'];
//echo $method;
if(@$method == "finca"){ 
    $db = new PDO_Connect;
    $db->connect();
    $idfinca = $_POST['idfinca'];
    //echo $idfinca;
     //$fincas = $db->getRow("SELECT * FROM fincas WHERE idfincas = ?",array($idfinca));
 //if($fincas){
     session_start();
     $_SESSION['usuario'] = $idfinca;
     header('Location: ../app/dashboard/infoFinca.php' );
   // }
}
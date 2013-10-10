<?php
    require_once('funciones.php');
    $objeto = new funciones();
    $refres = new funciones();

   /*registrar un nuevo estudiante al gim*/
   if(isset($_POST['regMinutos'])){
        ///fecha del registro
        $fecha = $_POST['fecha'];
       // echo "esta es la fecha post ".$fecha;
        if($fecha == null){
            date_default_timezone_set('America/Bogota'); 
            $fecha = date("Y-m-d");
        }
        //echo "<br> esta es la nueva fecha".$fecha;
        $otroValor = $_POST['otroValor'];
        $nomOtro = $_POST['nomOtro'];
        //cantidad de minutos, destino de las llamadas
        $nac = $_POST['nacionales'];
        $ven = $_POST['venezuela'];
        $esp = $_POST['españa'];
        $arg = $_POST['argentina'];
        $eeu = $_POST['eeuu'];
        $otr = $_POST['otro'];
        echo "valor de tiempo ".$nac;
        //totales de los minutos por destino
        echo "total ".$_POST['totalN'];
        $totalnac = $_POST['totalN'];
        $totalven = $_POST['totalV'];
        $totalesp = $_POST['totalE'];
        $totalarg = $_POST['totalA'];
        $totaleeu = $_POST['totalU'];
        $totalotr = $_POST['totalO'];
        /*------------------------------*/
        //total
        $totalDia = $_POST['totaldia'];
        echo "total dia"+$totalDia;
        $objeto->registrarMinutos($fecha,'nacionales','150',$nac,$totalnac,$totalDia);
        $objeto->registrarMinutos($fecha,'venezuela','200',$ven,$totalven,"0");
        $objeto->registrarMinutos($fecha,'españa','300',$esp,$totalesp,"0");
        $objeto->registrarMinutos($fecha,'argentina','400',$arg,$totalarg,"0");
        $objeto->registrarMinutos($fecha,'eeuu','200',$eeu,$totaleeu,"0");
        $objeto->registrarMinutos($fecha,$nomOtro,$otroValor,$otr,$totalotr,"0");
       header('Location: ../index.php');
   }

   if(isset($_POST['guarGasto'])){
        date_default_timezone_set('America/Bogota'); 
        $fecha = date("Y-m-d");
        $conp = $_POST['concepto'];
        $mont = $_POST['monto'];
        $objeto->registrarGasto($fecha,$conp,$mont);
        header('Location: ../index.php');
   }

   if(isset($_POST['limpiar'])){
     $objeto->limpiar();
   }
?>
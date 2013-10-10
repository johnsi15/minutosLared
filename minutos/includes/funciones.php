<?php
  class funciones{
     private $bd;

     function __construct(){
         require_once('config.php');
         $bd = new conexion();
         $bd->conectar();
     }

    public function registrarMinutos($fecha,$destino,$precio,$canMinu,$totalMinu,$totalDia){
           $resultado = mysql_query("INSERT INTO minutosdiarios (fecha,destino,precios,totalMinutos,total,totalDia)
                                      VALUES ('$fecha','$destino','$precio','$canMinu','$totalMinu','$totalDia')")
                                      or die ("Error en insertar en la tabla minutos diarios");
    }

    public function verminutos(){
       $resultado = mysql_query("SELECT * FROM minutosdiarios ORDER BY id DESC");
       while ($fila = mysql_fetch_array($resultado)){
           if($fila['destino'] == "nacionales"){
              echo '<tr class="success"> 
                    <td>'.$fila['fecha'].'</td>
                    <td>'.$fila['destino'].'</td>
                    <td>'.$fila['precios'].'</td>
                    <td>'.$fila['totalMinutos'].'</td>
                    <td>'.$fila['total'].'</td>
                    <td>'.$fila['totalDia'].'</td>
                </tr>';
           }else{
              echo '<tr> 
                    <td>'.$fila['fecha'].'</td>
                    <td>'.$fila['destino'].'</td>
                    <td>'.$fila['precios'].'</td>
                    <td>'.$fila['totalMinutos'].'</td>
                    <td>'.$fila['total'].'</td>
                    <td>'.$fila['totalDia'].'</td>
                </tr>';
           }
       }
    }

    public function vergastos(){
      $resultado = mysql_query("SELECT * FROM gastos ORDER BY id DESC");
       while ($fila = mysql_fetch_array($resultado)){
           
              echo '<tr> 
                    <td>'.$fila['fecha'].'</td>
                    <td>'.$fila['concepto'].'</td>
                    <td>'.$fila['monto'].'</td>
                </tr>';
       }
    }

    public function totalmes(){
        $resultado = mysql_query("SELECT SUM(totalDia) AS total FROM minutosdiarios");
        $fila = mysql_fetch_array($resultado);
        echo number_format($fila['total']);
    }

    public function totalgastos(){
       $resultado = mysql_query("SELECT SUM(monto) AS total FROM gastos");
       $fila = mysql_fetch_array($resultado);
       echo number_format($fila['total']);
    }

    public function totalmesgatos(){
        $resultado = mysql_query("SELECT SUM(totalDia) AS total FROM minutosdiarios");
        $fila = mysql_fetch_array($resultado);

        $resultado2 = mysql_query("SELECT SUM(monto) AS totalGasto FROM gastos");
        $fila1 = mysql_fetch_array($resultado2);
        echo number_format($fila['total']-$fila1['totalGasto']);
    }

    public function limpiar(){
       /* echo "<script>
            if(confirm('Estas seguro que deseas borrar?')){".
                mysql_query("truncate table minutosdiarios");
                mysql_query("truncate table gastos");
            ."} else {
                
            }
         </script>";
       */
        mysql_query("truncate table minutosdiarios");
        mysql_query("truncate table gastos");
    }

    public function registrarGasto($fecha,$conp,$mont){
           $resultado = mysql_query("INSERT INTO gastos (fecha,concepto,monto)
                                      VALUES ('$fecha','$conp','$mont')")
                                      or die ("Error en insertar en la tabla gastos");
    }
    
  }//cierre de la clase
?>
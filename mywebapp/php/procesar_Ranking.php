<?php
//Abrir conexion
include('abre_conexion.php');

//Capturar variable src de form.
$img_Form = $_REQUEST['imagen'];
                                //    echo "imagen del formulario---> $img";
                                //    echo "<br>";
//Realizar la consulta a bd.
$sql1 = "select * from artesanal_productoartesanal";
$query = $conexion_db->query($sql1);
$sumtotal=0;



// Recorrer la consulta.
while ($r = $query->fetch_array()) {
    if ($r['imagen_artesanal']== $img_Form) {
                                //         echo "contiene una ruta valida, esta verificada :D  y su id es :";
                                //         echo $r['producto_artesanal_id'];
         // Variable id Proc. Art.
        $img_Id_Bd =$r['id'];
        // Variable Puntuacion.
        $Puntuacion = $_REQUEST['valorarALE'];
                            //echo $Puntuacion."     ".$resultado;

        $PuntosRanking = $r['posicion_ranking'];
        $s1=0;

      if ($Puntuacion=="1") {
        $s1=$PuntosRanking-0.6;
        if ($s1<=0) {
            $s1=0;
            $sql3 = "UPDATE artesanal_productoartesanal set posicion_ranking = '$s1' where id ='$img_Id_Bd'";
            $conexion_db->query($sql3);

                /*$sql3 = "INSERT INTO artesanal_ranking VALUES ($s1,$img_Id_Bd)";
                $conexion_db->query($sql3);*/
        }else{

        $sql3 = "UPDATE artesanal_productoartesanal set posicion_ranking = '$s1' where id ='$img_Id_Bd'";
        $conexion_db->query($sql3);

        /*$sql3 = "INSERT INTO artesanal_ranking VALUES ($s1,$img_Id_Bd)";
        $conexion_db->query($sql3);*/
      }
      }
      if ($Puntuacion=="2") {
        $s1= $PuntosRanking-0.3;
        if ($s1<=0) {
            $s1=0;
            $sql3 = "UPDATE artesanal_productoartesanal set posicion_ranking = '$s1' where id ='$img_Id_Bd'";
            $conexion_db->query($sql3);

                /*$sql3 = "INSERT INTO artesanal_ranking VALUES ($s1,$img_Id_Bd)";
                $conexion_db->query($sql3);*/
        }else{

        $sql3 = "UPDATE artesanal_productoartesanal set posicion_ranking = '$s1' where id ='$img_Id_Bd'";
        $conexion_db->query($sql3);

      /*  $sql3 = "INSERT INTO artesanal_ranking VALUES ($s1,$img_Id_Bd)";
        $conexion_db->query($sql3);*/
      }
      }
      if ($Puntuacion=="3") {
        $s1= $PuntosRanking+0.4;
        if ($s1>=5) {
            $s1=5;
            $sql3 = "UPDATE artesanal_productoartesanal set posicion_ranking = '$s1' where id ='$img_Id_Bd'";
            $conexion_db->query($sql3);

              /*  $sql3 = "INSERT INTO artesanal_ranking VALUES ($s1,$img_Id_Bd)";
                $conexion_db->query($sql3);*/
        }else{

        $sql3 = "UPDATE artesanal_productoartesanal set posicion_ranking = '$s1' where id ='$img_Id_Bd'";
        $conexion_db->query($sql3);

        /*$sql3 = "INSERT INTO artesanal_ranking VALUES ($s1,$img_Id_Bd)";
        $conexion_db->query($sql3);*/
      }
      }
      if ($Puntuacion=="4") {
          $s1= $PuntosRanking+0.6;
          if ($s1>=5) {
              $s1=5;
              $sql3 = "UPDATE artesanal_productoartesanal set posicion_ranking = '$s1' where id ='$img_Id_Bd'";
              $conexion_db->query($sql3);

                /*  $sql3 = "INSERT INTO artesanal_ranking VALUES ($s1,$img_Id_Bd)";
                  $conexion_db->query($sql3);*/
          }else{

          $sql3 = "UPDATE artesanal_productoartesanal set posicion_ranking = '$s1' where id ='$img_Id_Bd'";
          $conexion_db->query($sql3);

        /*  $sql3 = "INSERT INTO artesanal_ranking VALUES ($s1,$img_Id_Bd)";
          $conexion_db->query($sql3);*/
        }
      }
      if ($Puntuacion=="5") {
        $s1= $PuntosRanking+1;
        if ($s1>=5) {
            $s1=5;
            $sql3 = "UPDATE artesanal_productoartesanal set posicion_ranking = '$s1' where id ='$img_Id_Bd'";
            $conexion_db->query($sql3);

              /*  $sql3 = "INSERT INTO artesanal_ranking VALUES ($s1,$img_Id_Bd)";
                $conexion_db->query($sql3);*/
        }else{

        $sql3 = "UPDATE artesanal_productoartesanal set posicion_ranking = '$s1' where id ='$img_Id_Bd'";
        $conexion_db->query($sql3);

      /*  $sql3 = "INSERT INTO artesanal_ranking VALUES ($s1,$img_Id_Bd)";
        $conexion_db->query($sql3);*/
      }
      }
        }

//$sql3 = "INSERT INTO artesanal_ranking VALUES ($Puntuacion,$img_Id_Bd)";
              //$conexion_db->query($sql3);
/*
              $sql3 = "UPDATE artesanal_productoartesanal set posicion_ranking = '$s1' where id ='$img_Id_Bd'";
              $conexion_db->query($sql3);

              $sql4 = "SELECT ROUND(AVG(posicion_ranking)) as totalPuntos from artesanal_productoartesanal";
              $query4 = $conexion_db->query($sql4);
              $totalPuntos = 0;

              while ($r1 = $query4->fetch_array()) {

              $totalPuntos = $r1['totalPuntos'];
          }

              //  $totalPuntos = floor($sumtotal);

            //}
        $sql4 = "UPDATE artesanal_productoartesanal set Rating = '$totalPuntos' where id ='$img_Id_Bd'";
        $conexion_db->query($sql4); */
    }

    //Selecciona y compara fk Ranking con la fk obtenida no repetida de la tabla ranking.

    //$query3 = $conexion_db->query($sql3);
$conexion_db->close();
header ('Location:http://192.168.1.37/artesanal.php');
?>

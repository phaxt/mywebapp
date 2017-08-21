<?php
//Abrir conexion
include('abre_conexion.php');

// +++++++++++++++    Mostrar RANKING.  ++++++++++++++++++++++
            //Selecciona la posicion_Ranking de la tabla artesanal_productosartesanal y la ordena descendente
            $sql5 = "SELECT * from artesanal_productoartesanal order by posicion_ranking DESC ";
            $query5 = $conexion_db->query($sql5);

            //Recorre la consulta.
            while ($r3 = $query5->fetch_array()) {

              if ($r3['posicion_ranking']>= 1) {



                    //Guarda ruta src y nombre de las cervezas con puntuacion y trunkea la posicion_ranking.
                    $imgRank =$r3['imagen_artesanal'];
                    $nombreRank =$r3['nombre_cerveza'];
                    $totalPuntos = $r3['posicion_ranking'];
                    $P = floor($totalPuntos);
           ?>
             <div id="ranking">
               <div class="col s12 m7 offset-m2">
                 <div class="card horizontal">
                   <div class="card-image">
                     <img class="imgCervezas" src="<?php echo $imgRank ?>">
                   </div>
                   <div class="card-stacked">
                     <div class="card-action">
                       <p>Cerveza <?php echo $nombreRank ?></p>
                       <p>
                       <?php for ($i=0; $i < $P; $i++) {
                         ?> <label style="padding:0px" class="lblRank2">&#9733</label>
                       <?php } ?>
                      </p>
                      <p>
                        <form name="formValorar" class="formRank" action="./artesanal_detalles.php" method="POST">
                        <input type="submit" value="ver detalles" class="waves-effect waves-light btn"/>
                        <INPUT TYPE="hidden" NAME="nombre" value="<?php echo $nombreRank ?>"><br>
                        <INPUT TYPE="hidden" NAME="imagen" value="<?php echo $imgRank ?>"><br>
                        </form>
                      </p>
                     </div>

                   </div>
                 </div>
               </div>

              </div>
            <?php
}}
$conexion_db->close();
?>

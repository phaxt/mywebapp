<?php
//Abrir conexion
include('abre_conexion.php');

$sql6 = "select * from artesanal_productoartesanal INNER JOIN artesanal_valor ON artesanal_productoartesanal.id = artesanal_valor.producto_id_id INNER JOIN artesanal_cerveceria on artesanal_valor.cerveceria_id_id = artesanal_cerveceria.id Group BY artesanal_productoartesanal.nombre_cerveza, artesanal_productoartesanal.tipo_fermentacion, artesanal_productoartesanal.descripcion, artesanal_productoartesanal.imagen_artesanal, artesanal_productoartesanal.posicion_ranking, artesanal_valor.precio, artesanal_cerveceria.nombre_local";
$query6 = $conexion_db->query($sql6);

while ($r = $query6->fetch_array()) {



if ($r['tipo_fermentacion']=="2") {
  //variables
  $nombreLAGER = $r['nombre_cerveza'];
  $tipoFermentacionLAGER= $r['tipo_fermentacion'];
  $precioLAGER = $r['precio'];
  $descripcionLAGER = $r['descripcion'];
  $imagenLAGER = $r['imagen_artesanal'];
  $LocalLAGER = $r['nombre_local'];


?>

<div id="lager">
  <div class="col s12 m7 offset-m2">
    <div class="card horizontal">
      <div class="card-image">
        <img class="imgCervezas" src="<?php echo $imagenLAGER ?>">
      </div>
      <div class="card-stacked">
        <div class="card-action">
          <p><?php echo $descripcionLAGER ?></p>
        </div>
        <div class="card-action">
          <p><h5><strong><?php echo "Valor $".$precioLAGER ?></strong></h5></p>
        </hr>
          <p><?php echo "Punto de venta:  ".$LocalLAGER ?></p>
            <p>
              <form name="formValorar" class="formRank" action="./artesanal_detalles.php" method="POST">


              <INPUT TYPE="hidden" NAME="nombre" value="<?php echo $nombreLAGER ?>"><br>
              <INPUT TYPE="hidden" NAME="imagen" value="<?php echo $imagenLAGER ?>"><br>

              <input type="submit" value="ver detalles" class="waves-effect waves-light btn"/>

              </form>
            </p>

            <style type="text/css">
              .lblRank { font-size: 2em}
            </style>
        </div>
      </div>
    </div>
  </div>
</div>


<?php }}
$conexion_db->close(); ?>

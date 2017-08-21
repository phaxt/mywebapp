<!DOCTYPE html>
<html>
  <head>
    <?php
    header("Content-Type: text/html;charset=utf-8");
        function extraerSRC($html) {
        preg_match('@src="([^"]+)"@', $html, $array);
        $src = array_pop($array);
        return $src;
        }
        //echo extraerSRC($cadena);// muestro la ruta de la img. ?>

        <link type="text/css" rel="stylesheet" href="css/ranking.css"/>

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="rating/css/font-awesome.min.css">
    <link rel="stylesheet" href="rating/css/style.min.css">
    <link rel="stylesheet" href="rating/css/rating.min.css">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon.png">
    <meta charset="UTF-8">
    <style>
      #img_o {
        opacity: 0.2;
        filter: alpha(opacity=80); /* For IE8 and earlier */
      }
    </style>
  </head>
  <body>
    <div class="row">
     <div class="col s12">
       <nav class="nav-extended color teal">
         <div class="nav-wrapper">
           <a href="#" class="brand-logo"><h5><?php echo $_REQUEST['nombre']?></h5></a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul class="side-nav" id="mobile-demo">
             <div class="parallax-container">
               <li>
                 <div class="userView">
                   <div class="background">
                     <img width="250" src="">
                   </div>
                   <img width="200" src="images/logo.png">
                 </div>
                 <li><a href="inicio.html"><i class="material-icons">home</i>Principal</a></li>
                 <li><a href="tradicional.php"><i class="material-icons">local_drink</i>Cerveza tradicional</a></li>
                 <li><a href="artesanal.php"><i class="material-icons">local_drink</i>Cerveza artesanal</a></li>
                 <li><a href="map.html"><i class="material-icons">place</i>Botilleria cercana</a></li>
                  <li><a href="about.php"><i class="material-icons">info</i>Acerca de</a></li>
               </li>
               <div class="parallax"><img id="img_o" src="images/background_2.jpg"></div>
             </div>
           </ul>
         <div class="nav-content">
           <ul class="tabs tabs-transparent">
             <li class="tab">Detalles</li>

           </ul>
         </div>
       </nav>
       <div class="parallax-container">
       </br>
         <div class="row">
           <!-- Seccion ALE -->



           <?php
           //Abrir conexion
           include('./php/abre_conexion.php');
           $img_Form = $_REQUEST['imagen'];


           $sql6 = "select * from artesanal_productoartesanal INNER JOIN artesanal_valor ON artesanal_productoartesanal.id = artesanal_valor.producto_id_id INNER JOIN artesanal_cerveceria on artesanal_valor.cerveceria_id_id = artesanal_cerveceria.id Group BY artesanal_productoartesanal.nombre_cerveza, artesanal_productoartesanal.tipo_fermentacion, artesanal_productoartesanal.descripcion, artesanal_productoartesanal.imagen_artesanal, artesanal_productoartesanal.posicion_ranking, artesanal_valor.precio, artesanal_cerveceria.nombre_local,artesanal_cerveceria.ubicacion, artesanal_cerveceria.horario_atencion";
           $query6 = $conexion_db->query($sql6);

           while ($r = $query6->fetch_array()) {


             if ($r['imagen_artesanal']==$img_Form) {
               //variables
               $nombreALE = $r['nombre_cerveza'];
               $tipoFermentacionALE= $r['tipo_fermentacion'];
               $precioALE = $r['precio'];
               $descripcionALE = $r['descripcion'];
               $imagenALE = $r['imagen_artesanal'];
               $LocalALE = $r['nombre_local'];
               $nombreLOCAL = $r['nombre_local'];
               $ubicacionLOCAL = $r['ubicacion'];
               $horarioLOCAL = $r['horario_atencion'];


           ?>

             <div id="ale">

              <div class="row">
                <div class="col s12 m7 offset-m2">
                  <div class="card">
                    <div class="card-image">
                      <img style="max-width:450px"  src="<?php echo $imagenALE ?>">
                      <span class="card-title"></span>
                    </div>
                    <div class="card-action">
                      <p><?php echo $descripcionALE ?></p>
                    </div>
                    <div class="card-action">
                      <p>Precio: $<?php echo $precioALE ?></p>
                      <p>Local: <?php echo $LocalALE ?></p>
                      <p>Horario: <?php echo $horarioLOCAL ?></p>
                      <p>Ubicación: <?php echo $ubicacionLOCAL ?></p>
                    </div>
                    <div class="card-action">
                      <p>
                        <form name="formValorar" class="formRank" action="./php/procesar_Ranking.php" method="POST">
                        <div class="star-rating">
                        <input type="radio" hidden="true" checked="enable" class="radio" name="valorarALE" value="1" id="1">
                        <label for="1" class="lblRank"> &#9733</label>
                        <input type="radio" hidden="true" class="radio" name="valorarALE" value="2" id="2">
                        <label for="2" class="lblRank"> &#9733</label>
                        <input type="radio" hidden="true" class="radio" name="valorarALE" value="3" id="3">
                        <label for="3" class="lblRank"> &#9733</label>
                        <input type="radio" hidden="true" class="radio" name="valorarALE" value="4" id="4">
                        <label for="4" class="lblRank"> &#9733</label>
                        <input type="radio" hidden="true" class="radio" name="valorarALE" value="5" id="5">
                        <label for="5" class="lblRank">&#9733</label>
                        <INPUT TYPE="hidden" NAME="imagen" value="<?php echo $imagenALE ?>"><br>
                          <hr/>

                        <input type="submit" value="valorar" class="waves-effect waves-light btn"/>
                        <a style="float: right" href="./artesanal.php">Volver</a>
                        </div>
                        </form>

                      </p>

                    </div>
                  </div>
                </div>
              </div>

             </div>


           <?php }} ?>


           <div id="Detalles">



           </div>
           <!-- Seccion ALE -->


         </div>
         <div class="parallax"><img id="img_o" src="images/background_3.jpg"></div>
       </div>

     <!-- FIN -->
     </div>
   </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="rating/js/lib/githubicons.js"></script>
    <script src="rating/js/lib/carbonad.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-34160351-1', 'auto');
      ga('send', 'pageview');
    </script>
    <script>
      $(function (){
        $(".button-collapse").sideNav();
      })
      $(function(){
        $('.button-collapse').sideNav({
          menuWidth: 250, // Default is 300
          edge: 'left', // Choose the horizontal origin
          closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
          draggable: true // Choose whether you can drag to open on touch screens
        })
      })
      $(document).ready(function(){
        $('.materialboxed').materialbox();
      })
      $(document).ready(function(){
        $('.parallax').parallax();
      });
    </script>
  </body>
</html>

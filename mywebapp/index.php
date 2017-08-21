<!DOCTYPE html>
<?php
include 'php/abre_conexion.php';
 ?>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <style>
      #img_o {
        opacity: 0.2;
        filter: alpha(opacity=80); /* For IE8 and earlier */
      }
      #img_2 {
        opacity: 0.5;
        filter: alpha(opacity=80); /* For IE8 and earlier */
      }
    </style>
  </head>
  <body>
    <div class="row">
     <div class="col s12">
       <nav class="nav-extended color teal">
         <div class="nav-wrapper">
           <a href="#" class="brand-logo">Principal</a>
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
                 <li><a href="index.php"><i class="material-icons">home</i>Principal</a></li>
                 <li><a href="tradicional.php"><i class="material-icons">local_drink</i>Cerveza tradicional</a></li>
                 <li><a href="artesanal.php"><i class="material-icons">local_drink</i>Cerveza artesanal</a></li>
                 <li><a href="map.html"><i class="material-icons">place</i>Ruta artesanal</a></li>
                  <li><a href="about.php"><i class="material-icons">info</i>About</a></li>
               </li>
               <div class="parallax"><img id="img_o" src="images/background_2.jpg"></div>
             </div>
           </ul>
         </div>
       </nav>
       <div class="parallax-container">
     </br>
       <div class="col s12">
         <h4>Recomendados...</h4>
       </div>
       <div class="col s12">
         <div class="slider">
           <ul class="slides">
             <?php
             $sql_4 = "SELECT marca, precio, imagen_ref FROM producto_producto;";
               $result_4 = $conexion_db ->query($sql_4);
               if ($result_4->num_rows > 0) { ?>
                  <?php while($row = $result_4->fetch_assoc()) {?>
             <li>
               <img id=img_2 src="<?php echo $row['imagen_ref']?>"> <!-- random image -->
               <div class="caption right-align black-text">
                 <h1><?php echo $row['marca'];?></h1>
                 <h2 class="light black-text text-lighten-3"><b><?php echo "$".$row['precio'];?></b></h2>
               </div>
             </li>
             <?php }
             $conexion_db->close();?>
             <?php } ?>
           </ul>
         </div>
       </div>
       <div class="parallax"><img id="img_o" src="images/background_3.jpg"></div>
     </div>
   <!--FIN-->
    </div>
  </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
      $(function(){
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
        $('.carousel.carousel-slider').carousel({fullWidth: true});
      })
      $(document).ready(function(){
        $('.parallax').parallax();
      })
      $(document).ready(function(){
        $('.slider').slider(
        );
      })
    </script>
  </body>
</html>

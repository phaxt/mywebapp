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
        height: 150px;
        width: 150px;
      }
    </style>
  </head>
  <body>
    <div class="row">
     <div class="col s12">
       <nav class="nav-extended color teal">
         <div class="nav-wrapper">
           <a href="#" class="brand-logo">Tradicional</a>
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
         <div class="nav-content">
           <ul class="tabs tabs-transparent">
             <li class="tab"><a class="active"href="#12pack">Tradicional</a></li>
             <li class="tab"><a href="#6pack">Premium</a></li>
             <li class="tab"><a href="#botella">Artesanal</a></li>
           </ul>
         </div>
       </nav>
       <div class="parallax-container">
       </br>
         <div class="row">
           <div id="12pack">
           <!--CODIGO PHP-->
           <?php
           $sql = "SELECT marca, cantidad, precio, descripcion, supermercado, imagen FROM testscraping_webscraping ORDER BY precio ASC;";
             $result = $conexion_db ->query($sql);
             if ($result->num_rows > 0) { ?>
               <?php while($row = $result->fetch_assoc()) {?>
                 <div class="col s6">
                   <div class="card">
                     <div class="card-image waves-effect waves-block waves-light">
                       <img class="activator" src=<?php echo $row['imagen'];?>>
                     </div>
                     <div class="card-content">
                       <span class="card-title activator grey-text text-darken-4"><?php echo $row['marca'];?><i class="material-icons right">more_vert</i></span>
                       <p><h5><?php echo "$".$row['precio'];?></h5></p>
                     </div>
                     <div class="card-reveal">
                       <span class="card-title grey-text text-darken-4">Info<i class="material-icons right">close</i></span>
                       <p><h5><?php echo $row['supermercado'];?></h5></p>
                     </div>
                   </div>
                 </div>
             <?php }/*
             $conexion_db->close(); */?>
             <?php } ?>
            <!--CODIGO PHP-->
           </div>
           <div id="6pack">
           <!--CODIGO PHP-->
           <?php
           $sql_2 = "SELECT marca, precio, imagen, supermercado FROM testscraping_webscrapingpremium ORDER BY precio ASC;";
             $result_2 = $conexion_db ->query($sql_2);
             if ($result_2->num_rows > 0) { ?>
               <?php while($row = $result_2->fetch_assoc()) {?>
                 <div class="col s6">
                   <div class="card">
                     <div class="card-image waves-effect waves-block waves-light">
                       <img class="activator" src=<?php echo $row['imagen'];?>>
                     </div>
                     <div class="card-content">
                       <span class="card-title activator grey-text text-darken-4"><?php echo $row['marca'];?><i class="material-icons right">more_vert</i></span>
                       <p><h5><?php echo "$".$row['precio'];?></h5></p>
                     </div>
                     <div class="card-reveal">
                       <span class="card-title grey-text text-darken-4">Info<i class="material-icons right">close</i></span>
                       <p><h5><?php echo $row['supermercado'];?></h5></p>
                     </div>
                   </div>
                 </div>
             <?php }/*
             $conexion_db->close(); */?>
             <?php } ?>
           <!--CODIGO PHP-->
           </div>
           <div id="botella">
           <!--CODIGO PHP-->
           <?php
           $sql_3 = "SELECT marca, precio, supermercado, imagen FROM testscraping_webscrapingartesanal ORDER BY precio ASC;";
             $result_3 = $conexion_db ->query($sql_3);
             if ($result_3->num_rows > 0) { ?>
               <?php while($row = $result_3->fetch_assoc()) {?>
                 <div class="col s6">
                   <div class="card">
                     <div class="card-image waves-effect waves-block waves-light">
                       <img class="activator" src=<?php echo $row['imagen'];?>>
                     </div>
                     <div class="card-content">
                       <span class="card-title activator grey-text text-darken-4"><?php echo $row['marca'];?><i class="material-icons right">more_vert</i></span>
                       <p><h5><?php echo "$".$row['precio'];?></h5></p>
                     </div>
                     <div class="card-reveal">
                       <span class="card-title grey-text text-darken-4">Info<i class="material-icons right">close</i></span>
                       <p><h5><?php echo $row['supermercado'];?></h5></p>
                     </div>
                   </div>
                 </div>
             <?php }
             $conexion_db->close();?>
             <?php } ?>
           <!--CODIGO PHP-->
           </div>
         </div>
         <div class="parallax"><img id="img_o" src="images/background_3.jpg"></div>
       </div>
     <!-- FIN -->
     </div>
   </div>


    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
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

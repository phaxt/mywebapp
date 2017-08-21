<!DOCTYPE html>
<html>
  <head>
    <?php
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
           <a href="#" class="brand-logo">Artesanal</a>
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
                  <li><a href="about.php"><i class="material-icons">info</i>Acerca de</a></li>
               </li>
               <div class="parallax"><img id="img_o" src="images/background_2.jpg"></div>
             </div>
           </ul>
         <div class="nav-content">
           <ul class="tabs tabs-transparent">
             <li class="tab"><a class="active"href="#ale">Ale</a></li>
             <li class="tab"><a href="#lager">Lager</a></li>
             <li class="tab"><a href="#ranking">Ranking</a></li>
           </ul>
         </div>
       </nav>
       <div class="parallax-container">
       </br>
         <div class="row">
           <!-- Seccion ALE -->
           <div id="ale">
              <?php include './php/mostrar_ALE.php' ?>
           </div>
           <!-- Seccion ALE -->

           <!-- Seccion LAYER -->
           <div id="lager">
             <?php include './php/mostrar_LAGER.php' ?>
           </div>
          <!-- Seccion LAYER -->

           <!-- AQUI COMIENZA EL SCRIPT DEL RANTING-->


           <div id="ranking">
             <?php include './php/mostrar_Ranking.php' ?>
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

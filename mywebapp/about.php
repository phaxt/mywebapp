<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta charset="UTF-8">
    <style>
    #img_3 {
    display: block;
    margin: auto;
    width: 300px;
    }
    #body_1 {
    background-image: url("images/background_4.jpg");
    }
    </style>
  </head>
  <body id=body_1>
    <div  class="row">
     <div class="col s12">
       </br>
       <div style="text-align:center" class="col s12 white-text">
         <p><h4>Más por menos</h4></p>
       </div>

       <div style="text-align:center" class="col s12 white-text">
         <p><h6>Versión 1.0</h6></p>
       </div>

       <div class="col s12">
         <a href="./index.php"> <img id=img_3 src="images/logo.png"></a>
       </div>

       <div style="text-align:center" class="col s12 white-text">
         <p><h6>Creado por Erick Galleguillos - Felipe Veas</h6></p>
       </div>

       <div style="text-align:center" class="col s12 white-text">
         <p><h6>Universidad Tecnológica de Chile INACAP</h6></p>
       </div>
     <!-- FIN -->
     </div>
   </div>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
      $(document).ready(function(){
        $('.parallax').parallax();
      });
    </script>
  </body>
</html>

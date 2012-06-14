<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
<link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/tables.css">
  <link rel="stylesheet" href="css/iphone-check.css">
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDcJm10cJjXQ6cZvCH4c25x5BhZCRbvY48&sensor=true"></script>
  <!---jQuery Files-->
  <script src="js/jquery-1.7.1.min.js"></script>
  <script src="js/jquery-ui-1.8.17.min.js"></script>
  <script src="js/styler.js"></script>
  <script src="js/jquery.tipTip.js"></script>
  <script src="js/colorpicker.js"></script>
  <script src="js/sticky.full.js"></script>
  <script src="js/global.js"></script>
  <script src="js/forms/fileinput.js"></script>
  <script src="js/forms/iphone-check.js"></script>
  <script src="js/flot/jquery.flot.min.js"></script>
  <script src="js/flot/jquery.flot.resize.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <!---Fonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lte IE 8]>
  <script language="javascript" type="text/javascript" src="js/flot/excanvas.min.js"></script>
  <![endif]-->
  <script type="text/javascript">
  $(document).on("ready", function(){
    var latlng = new google.maps.LatLng(1,1);
    var opciones = {
      zoom: 8,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("mapCanvas"), opciones);
  });
  </script>
  <!--<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>  -
  <script type="text/javascript">
    tinyMCE.init({
      mode : "textareas",
      width: "100%",
      theme : "advanced",
      skin : "o2k7",
      skin_variant : "silver",
      entity_encoding : "raw",
      theme_advanced_toolbar_location : "top",
      theme_advanced_resizing : true,
          theme_advanced_buttons1 : "bold,italic,underline, bullist,numlist,separator,outdent, indent,separator,undo,redo,separator, hr,removeformat,visualaid,separator,sub,sup,separator,charmap",
          theme_advanced_buttons2 : "",
          theme_advanced_buttons3 : ""
    });
  </script>-->
</head>
<body>

  <!--- HEADER -->

    <!-- <div class="header">
   <a href="dashboard.html"><img src="img/logo_tm_new.png" alt="Logo" /></a> 
   
  </div> -->

  <div class="top-bar" >
      <ul id="nav">
        <li id="user-panel">
          <img src="img/nav/usr-avatar.jpg" id="usr-avatar" alt="" />
          <div id="usr-info">
            <p id="usr-name"><a href="dashboard.html"><img src="img/logo_tm_new.png" alt="Logo" /></a></p> 
            <!-- <p id="usr-name">Welcome back, Michael</p> -->
            <p id="usr-notif"><!-- You have 6 notifications. <a href="#">View</a> --></p>
            <p><a href="index.html">Salir</a></p>
          </div>
        </li>
        <li>
        <ul id="top-nav">
         <li class="nav-item">
           <a href="fotos.php"><img src="img/nav/gal.png" alt="" /><p>Fotos</p></a>
         </li>
       </ul>
      </li>
     </ul>
  </div>
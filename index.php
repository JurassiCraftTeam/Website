<html>
  <head>
    <meta charset="utf-8"></meta>
      <!--Tab Title-->
    <title>JurassiCraft</title>

      <!--Meta-->
    <meta content="Minecraft mod and community" name="description"></meta>
    <meta content="SkyForge_" name="author"></meta>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

      <!--Favicon-->
    <!--     <link href="images/Icons/favicon.ico" rel="shortcut icon"></link>     -->

      <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"></link>

      <!--Styles-->
    <link href="styles/main.css" rel="stylesheet"></link>
    <link href="styles/fonts.css" rel="stylesheet"></link>
    <link href="styles/home.css" rel="stylesheet"></link>
    <link href="styles/navbar.css" rel="stylesheet"></link>
    <link href="styles/downloads.css" rel="stylesheet"></link>
    <link href="styles/dinodex.css" rel="stylesheet"></link>
    <link href="styles/footer.css" rel="stylesheet"></link>

      <!--Scripts-->
    <script src="scripts/main.js"></script>
    <script src="scripts/parallax.js"></script>
    <script src="scripts/nav.js"></script>
    <script src="scripts/infopages.js"></script>
  </head>

  <body>
    <?php
      $ini = parse_ini_file("config/domain.ini");
      echo("<script>domain = '" . $ini['domain'] . "'</script>");
      if(isset($_GET["page"])) {
        $location = explode(',', $_GET["page"]);
        $url = 'pages/' . $location[0] . '.php';
        if(file_exists($url)) {
          include $url;
        } else {
          include 'modules/pagenotfound.php';
        }
      }else{
        include 'pages/home.php';
      }
    ?>
  </body>
</html>

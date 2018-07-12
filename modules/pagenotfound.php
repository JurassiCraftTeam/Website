<?php
  $location = explode(',', $_GET["page"]);
  $url = 'pages/' . $location[0] . '.php';
  if(!file_exists($url)) {
    include 'modules/navbar.html';
  }
?>
<br><br><br><br><br><br><br><br><br><br><br>
<div style = "text-align: middle; top: 100%; color: white; font-family: Big John;">
  <h1>This    is    a    jurrasic    embarassment</h1>
  <center>The page was lost in time</center>
</div>

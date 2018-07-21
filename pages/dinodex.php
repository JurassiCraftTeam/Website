<?php include 'modules/navbar.html'?>

<br>

<div class="pagelist">
  <h1>Species</h1>
  <?php
    $dir_array = array_diff(scandir("wiki/dinodexpages/"), array('..', '.'));
    foreach($dir_array as $value) {
      echo("<script>" . trim($value, ".ini") . " = '" . trim($value, ".ini") . "';</script>");
      $js = 'window.location.href = "http://localhost/?page=dinodex,' . trim($value, '.ini') . '";';
      echo("<div class='listitem' onclick='" . $js . "'><img src='images/dinoSprites/" . trim($value, ".ini") . ".png' style='width:10px;'></img> " . ucwords(trim($value, ".ini")) . "</div>");
    }
  ?>
</div>

<?php
if(isset($_GET["page"])) {
  if(strpos($_GET["page"], ',') !== false) {
    $url = 'modules/dinoinfo.php';
    include $url;
  }
}else{
  include 'modules/pagenotfound.php';
}
?>

<?php include 'modules/navbar.html'?>

<br>

<div class="pagelist">
  <?php
    $dir_array = array_diff(scandir("wiki/dinodexpages/"), array('..', '.'));
    foreach($dir_array as $value) {
      if(!is_file($value)) {
        $category_array = array_diff(scandir("wiki/dinodexpages/" . $value . "/"), array('..', '.'));
        echo("<br><br><h1>" . $value . "</h1>");
        foreach($category_array as $item) {
          echo("<script>" . trim($item, ".ini") . " = '" . trim($item, ".ini") . "';</script>");
          $js = 'window.location.href = "http://' . $ini['domain'] . '/?page=dinodex,' . $value . "," . trim($item, '.ini') . '";';
          echo("<div class='listitem' onclick='" . $js . "'><img src='images/dinoSprites/" . trim($item, ".ini") . ".png' style='width:10px;'></img> " . ucwords(trim($item, ".ini")) . "</div>");
        }
      }
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

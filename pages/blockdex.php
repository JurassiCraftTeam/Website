<?php include 'modules/navbar.html'?>

<br>

<div class="pagelist">
  <?php
    $dir_array = array_diff(scandir("wiki/blockdexpages/"), array('..', '.'));
    foreach($dir_array as $value) {
      if(!is_file($value)) {
        $category_array = array_diff(scandir("wiki/blockdexpages/" . $value . "/"), array('..', '.'));
        echo("<br><br><h1>" . $value . "</h1>");
        foreach($category_array as $item) {
          echo("<script>" . trim($item, ".ini") . " = '" . trim($item, ".ini") . "';</script>");
          $js = 'window.location.href = "http://' . $ini['domain'] . '/?page=blockdex,' . $value . "," . trim($item, '.ini') . '";';
          echo("<div class='listitem' onclick='" . $js . "'><img src='images/blockSprites/" . trim($item, ".ini") . ".png' style='width:10px;'></img> " . ucwords(trim($item, ".ini")) . "</div>");
        }
      }
    }
  ?>
  <br><br>
</div>

<?php
if(isset($_GET["page"])) {
  if(strpos($_GET["page"], ',') !== false) {
    $url = 'modules/blockinfo.php';
    include $url;
  }
}else{
  include 'modules/pagenotfound.php';
}
?>

<div style="margin-left: 480px;">
  <?php
  $page = explode(",",$_GET['page']);
  $ini = parse_ini_file("wiki/blockdexpages/" . $page[1] . "/" . $page[2] . ".ini");
  ?>
  <?php echo("<img src='images/blockShowcase/" . $page[2] . ".png' alt='' style='top:15%;width: 20%;left:40%;position:absolute;z-index=-1;'></img>")?>
  <div class="description">
    <h1>Dino Description</h1>
    <p>
      <?php
        if($ini['desc']){
          echo $ini['desc'];
        } else {
          echo('Oops! It looks like we are missing some information! If you&#39;d like to contribute to the wiki click <a href="mailto:wiki@jurassicraftmod.com">here</a>!');
        }
      ?>
    </p>
  </div>
  <div class="stats">
    <div class="cardgroup" style="width: 50%;margin-left: 0px;">
      <div class="cardlist">
        <div class="cardnohover" style="width: 70%">
          <h1>Recipe</h1>
          <p><?php echo("<img src='images/blockRecipes/" . $page[2] . ".png' alt='' style='width: 100%;z-index=-1;'></img>")?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'modules/navbar.html'?>

<div class="pageheader">
  <h1>Jurassicraft</h1>
  <br>
  <select name="version">
    <option value="1.12.2">1.12.2<option>
    <!--TODO: Make these generate dynamically with php and the maven site-->
  </select>
</div>

<div class="content">
  <h1>Recommended Version</h1>

  <div class="release" id="recommended">
    <div style="display: flex;">
      <div class="version" style="float: left;">2.1.14</div>
      7/31/2018
      <div style="float: right;">
        <button id="download" onclick="location.href='https://minecraft.curseforge.com/projects/jurassicraft/files/2595176/download'">Download</button><br><br>
        <button id="source" onclick="location.href='https://github.com/JurassiCraftTeam/JurassiCraft2'">GitHub</button>
      </div>
    </div>
    <button onclick="viewContent('release');">Show Patch Notes</div>
    <div class="patchnotes" style="display: none;" id="release">
	  *Fixed some issues with the new lang utils<br>
	  +The dinosaur order gui displays the current order now<br>
	  *Krill to no longer have a collision box for entitites to stand on it
    </div>
  </div>
</div>	

<div class="content">
  <h1>All Versions</h1>
  <div><div><div><div><div><div><div><div><div><div>
    <div class="release">
      <div style="display: flex;">
        <div class="version" style="float: left;">2.1.13</div>
        7/30/2018
        <div style="float: right;">
          <button id="download" onclick="location.href='https://minecraft.curseforge.com/projects/jurassicraft/files/2594638/download'">Download</button><br><br>
          <button id="source" onclick="location.href='https://github.com/JurassiCraftTeam/JurassiCraft2'">GitHub</button>
        </div>
      </div>
      <button onclick="viewContent('2.1.13');">Show Patch Notes</div>
      <div class="patchnotes" style="display: none;" id="2.1.13">
		*Fixed desyncing process bars for all machines<br>
		*Fixed desyncing items when taken out of the output slots<br>
		*Fixed client-side duplication bug with cleaning station<br>
		*Fixed output slots accepting items from the player which isn't possible anymore<br>
		*Fixed the feeders's default input slot -> Now upper left corner<br>
		*Fixed a problem with herds losing their leader which crashed the game<br>
		*Ensures dinosaurs do not remain angry after player leaves.<br>
		*Improved some Dinosaur Targetting AI<br>
		*Changed system to use LangUtils<br>
      </div>
    </div>

    <br>
	
    <div class="release">
      <div style="display: flex;">
        <div class="version" style="float: left;">2.1.12</div>
        7/29/2018
        <div style="float: right;">
          <button id="download" onclick="location.href='https://minecraft.curseforge.com/projects/jurassicraft/files/2591780/download'">Download</button><br><br>
          <button id="source" onclick="location.href='https://github.com/JurassiCraftTeam/JurassiCraft2'">GitHub</button>
        </div>
      </div>
      <button onclick="viewContent('2.1.12');">Show Patch Notes</div>
      <div class="patchnotes" style="display: none;" id="2.1.12">
		+Added a Config Option to allow Tour Rail blocks to be disabled<br>
		*Fixed Action Figures not displaying the correct pose
      </div>
    </div>

  </div></div></div></div></div></div></div></div></div></div>


</div>

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
      <div class="version" style="float: left;">1.12.2-1.1.0</div>
      4 days ago
      <div style="float: right;">
        <button id="download">Download</button><br><br>
        <button id="source">GitHub</button>
      </div>
    </div>
    <button onclick="viewContent('release');">Show Patch Notes</div>
    <div class="patchnotes" style="display: none;" id="release">
      patch notes<br>
      patch notes<br>
      patch notes
    </div>
  </div>
</div>

<div class="content">
  <h1>All Versions</h1>
  <div><div><div><div><div><div><div><div><div><div>
    <div class="release" id="recommended">
      <div style="display: flex;">
        <div class="version" style="float: left;">1.12.2-1.1.0</div>
        4 days ago
        <div style="float: right;">
          <button id="download">Download</button><br><br>
          <button id="source">GitHub</button>
        </div>
      </div>
      <button onclick="viewContent('1.1.0');">Show Patch Notes</div>
      <div class="patchnotes" style="display: none;" id="1.1.0">
        patch notes<br>
        patch notes<br>
        patch notes
      </div>
    </div>

    <br>

    <div class="release">
      <div style="display: flex;">
        <div class="version" style="float: left;">1.12.2-1.0.3</div>
        11 days ago
        <div style="float: right;">
          <button id="download">Download</button><br><br>
          <button id="source">GitHub</button>
        </div>
      </div>
      <button onclick="viewContent('1.0.3');">Show Patch Notes</div>
      <div class="patchnotes" style="display: none;" id="1.0.3">
        patch notes<br>
        patch notes<br>
        patch notes
      </div>
    </div>

    <br>

    <div class="release">
      <div style="display: flex;">
        <div class="version" style="float: left;">1.12.2-1.0.2</div>
        15 days ago
        <div style="float: right;">
          <button id="download">Download</button><br><br>
          <button id="source">GitHub</button>
        </div>
      </div>
      <button onclick="viewContent('1.0.2');">Show Patch Notes</div>
      <div class="patchnotes" style="display: none;" id="1.0.2">
        patch notes<br>
        patch notes<br>
        patch notes
      </div>
    </div>

    <br>

    <div class="release">
      <div style="display: flex;">
        <div class="version" style="float: left;">1.12.2-1.0.1</div>
        25 days ago
        <div style="float: right;">
          <button id="download">Download</button><br><br>
          <button id="source">GitHub</button>
        </div>
      </div>
      <button onclick="viewContent('1.0.1');">Show Patch Notes</div>
      <div class="patchnotes" style="display: none;" id="1.0.1">
        patch notes<br>
        patch notes<br>
        patch notes
      </div>
    </div>

    <br>

    <div class="release">
      <div style="display: flex;">
        <div class="version" style="float: left;">1.12.2-1.0.0</div>
        30 days ago
        <div style="float: right;">
          <button id="download">Download</button><br><br>
          <button id="source">GitHub</button>
        </div>
      </div>
      <button onclick="viewContent('1.0.0');">Show Patch Notes</div>
      <div class="patchnotes" style="display: none;" id="1.0.0">
        patch notes<br>
        patch notes<br>
        patch notes
      </div>
    </div>

  </div></div></div></div></div></div></div></div></div></div>


</div>

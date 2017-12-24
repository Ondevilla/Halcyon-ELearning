
<h4>Course Title : </h4>
<input type="text" placeholder="Enter Course Title Here ..." id="ctitle1" name="ctitle1" required></input>
<br>
<br>
<h4>Description</h4>
<textarea rows="7" cols="50" id="cdetails1" name="cdetails1" required></textarea>
<br><br>
<h4>Add Image</h4>
<h5><input type="file" name="image" id="image" accept="image/*" required></input>
<br>
<br>
<h4>Color :</h4>
<br>

<!----> 

 
   <script src='colorpicker/js/1.js'></script>

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      .extra {

  font-family: 'Proxima Nova', sans-serif;
  color: #8B949A;
  letter-spacing: .05em;
  transition: background .5s ease;
}

.extra .color-picker-panel {

 align-self: center;
  width: 100%;
  border-radius: 8px;
  border: 2px solid #364347;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);

 

}


.extra .panel-row {
  position: relative;
  margin: 0 10px 10px;
}
.extra .panel-row:first-child {
  margin-top: 10px;
  margin-bottom: 6px;
}
.extra .panel-row:after {
  content: "";
  display: table;
  clear: both;
}

.extra  .panel-header {
  background: #15191C;
  padding: 8px;
  margin: 0 -10px 10px;
  text-align: center;
}

.extra .swatch {
  display: inline-block;
  width: 32px;
  height: 32px;
  background: #ccc;
  border-radius: 4px;
  margin-left: 4px;
  margin-bottom: 4px;
  box-sizing: border-box;
  border: 2px solid #364347;
  cursor: pointer;
}

.extra .default-swatches {
  width: 212px;
}
.extra .default-swatches .swatch:nth-child(6n + 1) {
  margin-left: 0;
}

.extra .color-cursor {
  border-radius: 100%;
  background: #ccc;
  box-sizing: border-box;
  position: absolute;
  pointer-events: none;
  z-index: 2;
  border: 2px solid #fff;
  transition: all .2s ease;
}
.extra .color-cursor.dragging {
  transition: none;
}
.extra .color-cursor#spectrum-cursor {
  width: 30px;
  height: 30px;
  margin-left: -15px;
  margin-top: -15px;
  top: 0;
  left: 0;
}
.extra .color-cursor#hue-cursor {
  top: 0;
  left: 50%;
  height: 20px;
  width: 20px;
  margin-top: -10px;
  margin-left: -10px;
  pointer-events: none;
}

.extra .spectrum-map {
  position: relative;
  width: 212px;
  height: 200px;
  overflow: hidden;

}

.extra #spectrum-canvas {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #ccc;
    border:  3px solid;
  border-radius:10px;
}

.extra .hue-map {
    position: absolute;

    bottom: 20px;

    right: 95%;
    width: 10px;
    height: 310px;
  
}

.extra #hue-canvas {
  border-radius: 8px;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #ccc;
}

.extra .button {
  background: #2A3137;
  border: 0;
  border-radius: 4px;
  color: #8B949A;
  font-size: 1rem;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  outline: none;
  cursor: pointer;
  padding: 4px;
}
.extra .button:active {
  background: #262c31;
}
.extra .button.eyedropper {
  position: absolute;
  right: 0;
  top: 0;
  width: 68px;
  height: 68px;
  display: block;
}
.extra .button.add-swatch {
  display: block;
  padding: 6px;
  width: 200px;
  margin: 10px auto 0;
}
.extra .button.refresh {
  display: block;
  padding: 6px;
  width: 200px;
  margin: 10px auto 0;
}
.extra .button.mode-toggle {

  right: 0;
  width: 300px;
  height: 40px;
}

.extra .value-fields {
  display: none;
  align-items: center;
}
.extra .value-fields.active {
  display: inline-flex;
}
.extra .value-fields .field-label {
  margin-right: 6px;
}
.extra .value-fields .field-input {
  background: #15191C;
  border: 1px solid #364347;
  box-sizing: border-box;
  border-radius: 2px;
  line-height: 38px;
  padding: 0 4px;
  text-align: center;
  color: #8B949A;
  font-size: 1rem;
  display: block;
}

.extra .rgb-fields .field-group {
  display: inline-flex;
  align-items: center;
}
.extra  .rgb-fields .field-input {
  width: 42px;
  margin-right: 10px;
}

.extra .hex-field .field-input {
  width: 170px;
}

.extra .color-indicator {
  display: inline-block;
  vertical-align: middle;
  margin-right: 10px;
  width: 20px;
  height: 20px;
  border-radius: 4px;
  background: #ccc;
}

.extra input::-webkit-outer-spin-button,
.extra input::-webkit-inner-spin-button {
  /* display: none; <- Crashes Chrome on hover */
  -webkit-appearance: none;
  margin: 0;
  /* <-- Apparently some margin are still there even though it's hidden */
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>



<div   onmousemove="refreshElementRects()" id="color-indicator" class="extra" style="background-color:black;border-radius:10px; ">
<center>
  <div class="color-picker-panel">
  <div class="panel-row">
  <br>
    <div class="swatches default-swatches"></div>
   
  </div>
  <div class="panel-row">
    <div class="spectrum-map" >
      <input type="button" id="spectrum-cursor" class="color-cursor">
      <canvas id="spectrum-canvas"></canvas>
    </div>
</div>
<div class="panel-row" style="height: 10px;">
    <div class="hue-map">
      <input type="button" id="hue-cursor" class="color-cursor">
      <canvas id="hue-canvas"></canvas>
    </div>

  </div>
<div class="panel-row">   <input type="button" id="mode-toggle" class="button mode-toggle" Value="Mode">
</div>
  <div class="panel-row" style="background:#15191C; width:300px;border-radius:3px; padding:5px;">

  <center>
    <div id="rgb-fields" class="field-group value-fields rgb-fields active">
      <div class="field-group">
        <label for="" class="field-label">R:</label>
        <input type="number" max="255" maxlength="3" min="0" name="red" id="red"  class="field-input rgb-input"/>
      </div>
      <div class="field-group">
        <label for="" class="field-label">G:</label>
        <input type="number" max="255" maxlength="3" min="0" name="green" id="green"  class="field-input rgb-input"/>
      </div>
      <div class="field-group">
        <label for="" class="field-label">B:</label>
        <input type="number" max="255" maxlength="3"  min="0" name="blue" id="blue" class="field-input rgb-input"/>
      </div>
    </div>
    </center>
    <div id="hex-field" class="field-group value-fields hex-field" > 
      <label for="" class="field-label">Hex:</label>
      <input type="text" id="hex" class="field-input"/>
    </div>
   
  </div>
  <div class="panel-row">
   
    <div id="user-swatches" class="swatches custom-swatches">
    </div>
    <button disabled  style="cursor:default ; opacity:0;" id="add-swatch" class="button add-swatch">
     
    </button>

        <button disabled  id="refresh" style=" cursor:default;opacity:0;" class="button refresh">

    </button>    
  
          



<?php ///////////////////////////////////////////// ?>



  </div>
</div>


  <script src='colorpicker/js/2.js'></script>

    <script src="colorpicker/js/indexcom1.js"></script>
</center>
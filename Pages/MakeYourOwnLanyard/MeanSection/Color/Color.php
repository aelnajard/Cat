<style media="screen">

/*----------------------------------------------------------------------------*/
/*----------------------------------- MATERIAL- ------------------------------*/
/*----------------------------------------------------------------------------*/
.ColorContainer{
  display: none;
  position: relative;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding: 0 20px;
  width: 100%;
  height: 470px;
  margin: 0 auto;
}
.ColorContainer h2{
  font-weight: 400;
  font-size: 1.5em;
  margin-bottom: 40px;
}
.ColorContainer h3{
  margin-bottom: 19px;
  font-weight: 400;
  font-size: 1.3em;
}
.Color{
  position: relative;
  display: inline-block;
  height: 50px;
  min-width: 22%;
  margin: 10px 5px;
  width: 50px;
  border: 1px solid black;
  cursor: pointer;
}
.Color input {
  position: relative;
  height: 100%;
  width: 100%;
}
.Color h3{
  position: absolute;
  display: flex;
  top: 0px;
  height: 30px;
  width: 100%;
  padding: 4px;
  z-index: 2;
}
.btnNext{
  position: relative;
  margin: 100px 25px 0px 0px;
  float: right;
  height: 45px;
  width: 200px;
  background-color: black;
  cursor: pointer;
  border-radius: 5px;
  color: white;
  transition: background-color .6s;
}
.btnNext:hover{
  background-color: rgb(236,93,42);
  color: black;
  transition: all .6s;
}
.btnNext:active{
  box-shadow: 2px 2px 2px grey;
  transition: all .6s;
}
.btnNext h2 {
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  font-weight: 400;
  text-align:center;
}
</style>

    <div id="ColorContainer" class="ColorContainer">
      <label class="container">One colour
        <input type="radio" checked="checked" name="radio">
        <span class="checkmark"></span>
      </label>

      <div class="Color">
        <input  class="ColorInput"  type="color" name="" value="#ec5e2a">
      </div>



      <label class="container">Two colours
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>

      <div class="Color">
        <input  class="ColorInput" type="color" name="" value="#ec5e2a">
      </div>

      <div class="Color">
        <input  class="ColorInput" type="color" name="" value="#ec5e2a">
      </div>


      <label class="container">Three colours
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>

      <div class="Color">
        <input class="ColorInput" type="color" name="" value="#ec5e2a">
      </div>

      <div class="Color">
        <input class="ColorInput" type="color" name="" value="#ec5e2a">
      </div>

      <div class="Color">
        <input class="ColorInput" type="color" name="" value="#ec5e2a">
      </div>


      <label class="container">Four colours
        <input type="radio" name="radio">
        <span class="checkmark"></span>
      </label>

      <div class="Color">
        <input class="ColorInput" type="color" name="" value="#ec5e2a">
      </div>

      <div class="Color">
        <input class="ColorInput" type="color" name="" value="#ec5e2a">
      </div>





      <div class="Color">
        <input class="ColorInput" type="color" name="" value="#ec5e2a">
      </div>

      <div class="Color">
        <input class="ColorInput" type="color" name="" value="#ec5e2a">
      </div>

      <div id="" class="btnNext">
        <h2>Next</h2>
      </div>

      <div id="" class="btnNext">
        <h2>Back</h2>
      </div>



    </div>


<script type="text/javascript">





var InputOneColor = document.getElementsByClassName("ColorInput")[0];
InputOneColor.addEventListener("input", function(){
  var oneColor = InputOneColor.value;
  changeColor(oneColor);
}, false);


var InputTwoColor = document.getElementsByClassName("ColorInput")[1];
InputTwoColor.addEventListener("input", function(){
  var oneColor = InputTwoColor.value;
  changeTwoColor1(oneColor);
}, false);

var InputTwoColor2 = document.getElementsByClassName("ColorInput")[2];
InputTwoColor2.addEventListener("input", function(){
  var oneColor = InputTwoColor2.value;
  changeTwoColor2(oneColor);
}, false);


var InputThreeColor = document.getElementsByClassName("ColorInput")[3];
InputThreeColor.addEventListener("input", function(){
  var oneColor = InputThreeColor.value;
  changeThreeColor1(oneColor);
}, false);

var InputThreeColor2 = document.getElementsByClassName("ColorInput")[4];
InputThreeColor2.addEventListener("input", function(){
  var oneColor = InputThreeColor2.value;
  changeThreeColor2(oneColor);
}, false);

var InputThreeColor3 = document.getElementsByClassName("ColorInput")[5];
InputThreeColor3.addEventListener("input", function(){
  var oneColor = InputThreeColor3.value;
  changeThreeColor3(oneColor);
}, false);


var InputFourColor1 = document.getElementsByClassName("ColorInput")[6];
InputFourColor1.addEventListener("input", function(){
  var oneColor = InputFourColor1.value;
  changeFourColor1(oneColor);
}, false);

var InputFourColor2 = document.getElementsByClassName("ColorInput")[7];
InputFourColor2.addEventListener("input", function(){
  var oneColor = InputFourColor2.value;
  changeFourColor2(oneColor);
}, false);

var InputFourColor3 = document.getElementsByClassName("ColorInput")[8];
InputFourColor3.addEventListener("input", function(){
  var oneColor = InputFourColor3.value;
  changeFourColor3(oneColor);
}, false);

var InputFourColor4 = document.getElementsByClassName("ColorInput")[9];
InputFourColor4.addEventListener("input", function(){
  var oneColor = InputFourColor4.value;
  changeFourColor4(oneColor);
}, false);
/*
background: rgb(36,36,0);
background: linear-gradient(90deg, rgba(36,36,0,1) 0%, rgba(40,0,255,1) 98%);

*/


</script>
<?php include("../../Pages/General/RadioBox/RadioBox.php");?>

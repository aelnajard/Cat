<style media="screen">

/*----------------------------------------------------------------------------*/
/*----------------------------------- MATERIAL- ------------------------------*/
/*----------------------------------------------------------------------------*/
.MaterialContainer{
  position: relative;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  width: 100%;
  height: 470px;
  margin: 0 auto;
}
.MaterialContainer h2{
  font-weight: 400;
  font-size: 1.5em;
  margin-bottom: 40px;
  width: 100%;
  }

.MaterialContainer h3{
  margin-bottom: 19px;
  font-weight: 400;
  font-size: 1.3em;
}
.Material{
  position: relative;
  float: left;
  height: 45%;
  min-width: 22%;
  width: 23%;
  margin: 4px;
  border: 1px solid black;
  cursor: pointer;
}
.Material img{
  position: relative;
  width: 100%;
  top: 50%;
  transform: translateY(-50%);
}
.Material h3{
  position: absolute;
  display: flex;
  top: 0px;
  height: 30px;
  width: 100%;
  padding: 4px;
}
.IconsContMat{
  position: absolute;
  display: flex;
  bottom: 0px;
  height: 30px;
  width: 100%;
}
.IconsContMat img{
  position: absolute;
  height: 100%;
  width: auto;
  right: 5px;
}
.IconsContMat img:hover{
  filter: drop-shadow(1px .98px 0px grey);
  transition: all .5s;
}
.IconsContMat img:active{
  filter: drop-shadow(0px 0px 0px black);
  transition: all .5s;
}
.PupopMat{
  display: none;
  position: absolute;
  bottom: -150%;
  left: 50%;
  transform: translateX(-50%);
  height: 150%;
  width: 180%;
  background-color: white;
  border-radius: 5px;
  z-index: 2;
  border: 1px solid black;
}
.PupopMat img{
  height: 90%;
}
.ShowPopup{
  display: block
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


/*
li:nth-child(2) {
  color: lime;
}
*/
</style>
<section class="Settings">

    <div id="MaterialContainer" class="MaterialContainer">
      <h2>Select the material</h2>

      <div class="Material">
        <h3>Flat Poliester</h3>
        <img src="MeanSection/Materials/imgMaterials/Material2.png" alt="">
        <div class="IconsContMat">
            <img src="MeanSection/Materials/imgMaterials/info.png" alt="">
        </div>
        <div class="PupopMat">
          <img src="MeanSection/Materials/imgMaterials/Material1.png" alt="">
        </div>
      </div>

      <div class="Material">
        <h3>Flat Poliester</h3>
        <img src="MeanSection/Materials/imgMaterials/Material2.png" alt="">
        <div class="IconsContMat">
            <img src="MeanSection/Materials/imgMaterials/info.png" alt="">
        </div>
        <div class="PupopMat">
          <img src="MeanSection/Materials/imgMaterials/Material1.png" alt="">
        </div>
      </div>

      <div class="Material">
        <h3>Flat Poliester</h3>
        <img src="MeanSection/Materials/imgMaterials/Material2.png" alt="">
        <div class="IconsContMat">
            <img src="MeanSection/Materials/imgMaterials/info.png" alt="">
        </div>
        <div class="PupopMat">
          <img src="MeanSection/Materials/imgMaterials/Material1.png" alt="">
        </div>
      </div>

      <div class="Material">
        <h3>Flat Poliester</h3>
        <img src="MeanSection/Materials/imgMaterials/Material2.png" alt="">
        <div class="IconsContMat">
            <img src="MeanSection/Materials/imgMaterials/info.png" alt="">
        </div>
        <div class="PupopMat">
          <img src="MeanSection/Materials/imgMaterials/Material1.png" alt="">
        </div>
      </div>

      <div class="Material">
        <h3>Flat Poliester</h3>
        <img src="MeanSection/Materials/imgMaterials/Material2.png" alt="">
        <div class="IconsContMat">
            <img src="MeanSection/Materials/imgMaterials/info.png" alt="">
        </div>
        <div class="PupopMat">
          <img src="MeanSection/Materials/imgMaterials/Material1.png" alt="">
        </div>
      </div>

      <div class="Material">
        <h3>Flat Poliester</h3>
        <img src="MeanSection/Materials/imgMaterials/Material2.png" alt="">
        <div class="IconsContMat">
            <img src="MeanSection/Materials/imgMaterials/info.png" alt="">
        </div>
        <div class="PupopMat">
          <img src="MeanSection/Materials/imgMaterials/Material1.png" alt="">
        </div>
      </div>

      <div class="Material">
        <h3>Flat Poliester</h3>
        <img src="MeanSection/Materials/imgMaterials/Material2.png" alt="">
        <div class="IconsContMat">
            <img src="MeanSection/Materials/imgMaterials/info.png" alt="">
        </div>
        <div class="PupopMat">
          <img src="MeanSection/Materials/imgMaterials/Material1.png" alt="">
        </div>
      </div>

      <div class="Material">
        <h3>Flat Poliester</h3>
        <img src="MeanSection/Materials/imgMaterials/Material2.png" alt="">
        <div class="IconsContMat">
            <img src="MeanSection/Materials/imgMaterials/info.png" alt="">
        </div>
        <div class="PupopMat">
          <img src="MeanSection/Materials/imgMaterials/Material1.png" alt="">
        </div>
      </div>

      <div id="NextMaterial" class="btnNext">
        <h2>Next</h2>
      </div>
    </div>

















</section>

<script type="text/javascript">
/*----------------------------------------------------------------------------*/
/*-----------------------------  Material  Pupop -----------------------------*/
/*----------------------------------------------------------------------------*/
var infoMaterial = document.getElementsByClassName("IconsContMat")[0].getElementsByTagName("img")[0];

var popup = document.getElementsByClassName("PupopMat")[0];
infoMaterial.addEventListener("click", function() {
  popup.classList.toggle("ShowPopup");
});

var infoMaterial = document.getElementsByClassName("IconsContMat")[1].getElementsByTagName("img")[0];

var popup1 = document.getElementsByClassName("PupopMat")[1];
infoMaterial.addEventListener("click", function() {
  popup1.classList.toggle("ShowPopup");
});

var infoMaterial = document.getElementsByClassName("IconsContMat")[2].getElementsByTagName("img")[0];

var popup2 = document.getElementsByClassName("PupopMat")[2];
infoMaterial.addEventListener("click", function() {
  popup2.classList.toggle("ShowPopup");
});

var infoMaterial = document.getElementsByClassName("IconsContMat")[3].getElementsByTagName("img")[0];

var popup3 = document.getElementsByClassName("PupopMat")[3];
infoMaterial.addEventListener("click", function() {
  popup3.classList.toggle("ShowPopup");
});

var infoMaterial = document.getElementsByClassName("IconsContMat")[4].getElementsByTagName("img")[0];

var popup4 = document.getElementsByClassName("PupopMat")[4];
infoMaterial.addEventListener("click", function() {
  popup4.classList.toggle("ShowPopup");
});

var infoMaterial = document.getElementsByClassName("IconsContMat")[5].getElementsByTagName("img")[0];

var popup5 = document.getElementsByClassName("PupopMat")[5];
infoMaterial.addEventListener("click", function() {
  popup5.classList.toggle("ShowPopup");
});

var infoMaterial = document.getElementsByClassName("IconsContMat")[6].getElementsByTagName("img")[0];

var popup6 = document.getElementsByClassName("PupopMat")[6];
infoMaterial.addEventListener("click", function() {
  popup6.classList.toggle("ShowPopup");
});

var infoMaterial = document.getElementsByClassName("IconsContMat")[7].getElementsByTagName("img")[0];

var popup7 = document.getElementsByClassName("PupopMat")[7];
infoMaterial.addEventListener("click", function() {
  popup7.classList.toggle("ShowPopup");
});


/*----------------------------------------------------------------------------*/
/*-----------------------------  Material  Click -----------------------------*/
/*----------------------------------------------------------------------------*/

var material = document.getElementsByClassName("Material")[0];
var materialStyle = document.getElementsByClassName("Material")[0].style;
material.addEventListener("click", function() {
  materialStyle.border = "2px solid blue";
  materialStyle1.border = "1px solid black";
  materialStyle2.border = "1px solid black";
  materialStyle3.border = "1px solid black";
  materialStyle4.border = "1px solid black";
  materialStyle5.border = "1px solid black";
  materialStyle6.border = "1px solid black";
  materialStyle7.border = "1px solid black";

});

var material1 = document.getElementsByClassName("Material")[1];
var materialStyle1 = document.getElementsByClassName("Material")[1].style;
material1.addEventListener("click", function() {
  materialStyle.border = "1px solid black";
  materialStyle1.border = "2px solid blue";
  materialStyle2.border = "1px solid black";
  materialStyle3.border = "1px solid black";
  materialStyle4.border = "1px solid black";
  materialStyle5.border = "1px solid black";
  materialStyle6.border = "1px solid black";
  materialStyle7.border = "1px solid black";

});

var material2 = document.getElementsByClassName("Material")[2];
var materialStyle2 = document.getElementsByClassName("Material")[2].style;
material2.addEventListener("click", function() {
  materialStyle.border = "1px solid black";
  materialStyle1.border = "1px solid black";
  materialStyle2.border = "2px solid blue";
  materialStyle3.border = "1px solid black";
  materialStyle4.border = "1px solid black";
  materialStyle5.border = "1px solid black";
  materialStyle6.border = "1px solid black";
  materialStyle7.border = "1px solid black";

});

var material3 = document.getElementsByClassName("Material")[3];
var materialStyle3 = document.getElementsByClassName("Material")[3].style;
material3.addEventListener("click", function() {
  materialStyle.border = "1px solid black";
  materialStyle1.border = "1px solid black";
  materialStyle2.border = "1px solid black";
  materialStyle3.border = "2px solid blue";
  materialStyle4.border = "1px solid black";
  materialStyle5.border = "1px solid black";
  materialStyle6.border = "1px solid black";
  materialStyle7.border = "1px solid black";

});

var material4 = document.getElementsByClassName("Material")[4];
var materialStyle4 = document.getElementsByClassName("Material")[4].style;
material4.addEventListener("click", function() {
  materialStyle.border = "1px solid black";
  materialStyle1.border = "1px solid black";
  materialStyle2.border = "1px solid black";
  materialStyle3.border = "1px solid black";
  materialStyle4.border = "2px solid blue";
  materialStyle5.border = "1px solid black";
  materialStyle6.border = "1px solid black";
  materialStyle7.border = "1px solid black";

});

var material5 = document.getElementsByClassName("Material")[5];
var materialStyle5 = document.getElementsByClassName("Material")[5].style;
material5.addEventListener("click", function() {
  materialStyle.border = "1px solid black";
  materialStyle1.border = "1px solid black";
  materialStyle2.border = "1px solid black";
  materialStyle3.border = "1px solid black";
  materialStyle4.border = "1px solid black";
  materialStyle5.border = "2px solid blue";
  materialStyle6.border = "1px solid black";
  materialStyle7.border = "1px solid black";
});

var material6 = document.getElementsByClassName("Material")[6];
var materialStyle6 = document.getElementsByClassName("Material")[6].style;
material6.addEventListener("click", function() {
  materialStyle.border = "1px solid black";
  materialStyle1.border = "1px solid black";
  materialStyle2.border = "1px solid black";
  materialStyle3.border = "1px solid black";
  materialStyle4.border = "1px solid black";
  materialStyle5.border = "1px solid black";
  materialStyle6.border = "2px solid blue";
  materialStyle7.border = "1px solid black";
});

var material7 = document.getElementsByClassName("Material")[7];
var materialStyle7 = document.getElementsByClassName("Material")[7].style;
material7.addEventListener("click", function() {
  materialStyle.border = "1px solid black";
  materialStyle1.border = "1px solid black";
  materialStyle2.border = "1px solid black";
  materialStyle3.border = "1px solid black";
  materialStyle4.border = "1px solid black";
  materialStyle5.border = "1px solid black";
  materialStyle6.border = "1px solid black";
  materialStyle7.border = "2px solid blue";
});


/*var lanyardTypeSelected = document.getElementsByClassName("custom-select")[0];

lanyardTypeSelected.addEventListener("click", function() {

  var value = document.getElementById("lanyardType").value;
  var withTop = document.getElementsByClassName("with")[0].style;
  var singleEnded = document.getElementsByClassName("SingleEnded")[0].style;
  var doubleEnded = document.getElementsByClassName("DoubleEnded")[0].style;

  var withTop1 = document.getElementsByClassName("with")[1].style;
  var singleEnded1 = document.getElementsByClassName("SingleEnded")[1].style;
  var doubleEnded1 = document.getElementsByClassName("DoubleEnded")[1].style;

  if (value== "SingleEnded") {
    withTop.display = "block";
    singleEnded.display = "block";
    doubleEnded.display = "none";

    withTop1.display = "block";
    singleEnded1.display = "block";
    doubleEnded1.display = "none";
  }else {
    withTop.display = "block";
    singleEnded.display = "none";
    doubleEnded.display = "block";

    withTop1.display = "block";
    singleEnded1.display = "none";
    doubleEnded1.display = "block";
  }
});*/


/*----------------------------------------------------------------------------*/
/*-----------------------------  Lanyard Printed  ----------------------------*/
/*----------------------------------------------------------------------------*/
/*
  var lanyardPrinted = document.getElementsByClassName("custom-select")[1];

  lanyardPrinted.addEventListener("click",function(){
    var value = document.getElementById("printed").value;
    var btnSize = document.getElementsByClassName("containerSizeBtn")[0].style;

    if (value== "oneSide") {
      //btnSize.display = "none";
      btnSize.opacity = "0";
      btnSize.transition = "all .5s";
      }else {
      btnSize.display = "flex";
      btnSize.opacity = "1";
      btnSize.transition = "all .5s";

      }
});
*/

/*----------------------------------------------------------------------------*/
/*--------------------------------  Material  --------------------------------*/
/*----------------------------------------------------------------------------*/

/*  var material = document.getElementsByClassName("custom-select")[2];

  material.addEventListener("click",function(){
    var value = document.getElementById("material").value;
    var bgImg = document.getElementsByClassName("material")[0].style;
    bgImg.backgroundImage = "url('MeanSection/Materials/imgMaterials/"+value+".png')";
    bgImg.transition = "all .5s";
});*/

</script>
<?php include("../../Pages/General/CheckBox/CheckBox.php");?>

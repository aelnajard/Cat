<style media="screen">

/*----------------------------------------------------------------------------*/
/*----------------------------------- MATERIAL- ------------------------------*/
/*----------------------------------------------------------------------------*/
.WithContainer{
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
.WithContainer h2{
  font-weight: 400;
  font-size: 1.5em;
  margin-bottom: 40px;
}
.WithContainer h3{
  margin-bottom: 19px;
  font-weight: 400;
  font-size: 1.3em;
}
.With{
  position: relative;
  float: left;
  height: 45%;
  min-width: 22%;
  width: 48.6%;
  margin: 10px 4px;
  border: 1px solid black;
  cursor: pointer;
}
.With img{
  position: relative;
  width: 80%;
  top: 50%;
  left:50%;
  transform: translate(-50%,-50%);
}
.With h3{
  position: absolute;
  display: flex;
  top: 0px;
  height: 30px;
  width: 100%;
  padding: 4px;
  z-index: 2;
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
</style>

    <div id="WithContainer" class="WithContainer">
      <h2>Select with</h2>

      <div class="With">
        <h3>10mm</h3>
        <img src="MeanSection/Width/imgWidth/10mm.png" alt="">
      </div>

      <div class="With">
        <h3>15mm</h3>
        <img src="MeanSection/Width/imgWidth/15mm.png" alt="">
      </div>

      <div class="With">
        <h3>20mm</h3>
        <img src="MeanSection/Width/imgWidth/20mm.png" alt="">
      </div>

      <div class="With">
        <h3>25mm</h3>
        <img src="MeanSection/Width/imgWidth/25mm.png" alt="">
      </div>

      <div id="NextColor" class="btnNext">
        <h2>Next</h2>
      </div>

      <div id="BackTypeClip" class="btnNext">
        <h2>Back</h2>
      </div>



    </div>


<script type="text/javascript">



/*----------------------------------------------------------------------------*/
/*-----------------------------  Material  Click -----------------------------*/
/*----------------------------------------------------------------------------*/

var widthLan = document.getElementsByClassName("With")[0];
var withStyle = document.getElementsByClassName("With")[0].style;
widthLan.addEventListener("click", function() {
  changeBorderBoxWith("2px solid blue","1px solid black","1px solid black","1px solid black");
  changeWithSE("30px", "67.8%", "7px",
               "30px", "36px", "73%", "skew(13.7deg)", "30.4%",
               "30px", "36px", "73%", "skew(-13.7deg)","61%");
 changeWithDE("30px", "20.8%", "73.4%", "6.1%",
                "30px", "70.6%", "73.4%", "6.1%");


});

var widthLan1 = document.getElementsByClassName("With")[1];
var withStyle1 = document.getElementsByClassName("With")[1].style;
widthLan1.addEventListener("click", function() {
  changeBorderBoxWith("1px solid black","2px solid blue","1px solid black","1px solid black");
  changeWithSE("35px", "69.52%", "2px",
               "35px", "36px", "73%", "skew(13.8deg)", "29.55%",
               "35px", "36px", "73%", "skew(-13.8deg)", "60.25%");

  changeWithDE("40px", "19.7%", "73.4%", "6.1%",
                "40px", "68.8%", "73.4%",  "6.1%");
});

var widthLan2 = document.getElementsByClassName("With")[2];
var withStyle2 = document.getElementsByClassName("With")[2].style;
widthLan2.addEventListener("click", function() {
  changeBorderBoxWith("1px solid black","1px solid black","2px solid blue","1px solid black");
  changeWithSE("40px", "70.3%", "2px",
               "40px", "42px", "72%", "skew(13.95deg)", "28.9%",
               "40px", "42px", "72%", "skew(-13.95deg)", "59.6%");
  changeWithDE("45px", "19%", "72%", "7%",
                "45px", "68.2%", "72%", "7%");
});

var widthLan3 = document.getElementsByClassName("With")[3];
var withStyle3 = document.getElementsByClassName("With")[3].style;
widthLan3.addEventListener("click", function() {
  changeBorderBoxWith("1px solid black","1px solid black","1px solid black","2px solid blue");
  changeWithSE("45px", "71%", "0px",
               "45px", "45px", "72%", "skew(13.9deg)", "28.3%",
               "45px", "45px", "72%", "skew(-13.9deg)", "58.9%");
  changeWithDE("45px", "18.5%", "72%", "45px",
               "45px", "68.5%", "72%", "45px");
});

function changeBorderBoxWith(border1, border2, border3, border4){
  withStyle.border  = border1;
  withStyle1.border = border2;
  withStyle2.border = border3;
  withStyle3.border = border4;
}

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

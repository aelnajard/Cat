<style media="screen">

/*----------------------------------------------------------------------------*/
/*----------------------------------- MATERIAL- ------------------------------*/
/*----------------------------------------------------------------------------*/
.TypeLanyardContainer{
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
.TypeLanyardContainer h2{
  font-weight: 400;
  font-size: 1.5em;
  margin-bottom: 40px;
}
.TypeLanyardContainer h3{
  margin-bottom: 19px;
  font-weight: 400;
  font-size: 1.3em;
}
.TypeLanyard{
  position: relative;
  float: left;
  height: 90%;
  min-width: 22%;
  width: 48.6%;
  margin: 10px 4px;
  border: 1px solid black;
  cursor: pointer;
}
.TypeLanyard img{
  position: relative;
  width: 50%;
  top: 50%;
  left:50%;
  transform: translate(-50%,-50%);
}
.TypeLanyard h3{
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

    <div id="TypeLanyardContainer" class="TypeLanyardContainer">
      <h2>Select TypeLanyard</h2>

      <div class="TypeLanyard">
        <h3>Single Clip</h3>
        <img src="MeanSection/TypeLanyard/imgLanyard/SingleEnded.png" alt="">
      </div>

      <div class="TypeLanyard">
        <h3>Double Clip</h3>
        <img src="MeanSection/TypeLanyard/imgLanyard/DoubleEnded.png" alt="">
      </div>



      <div id="NextWith" class="btnNext">
        <h2>Next</h2>
      </div>

      <div id="BackMaterial" class="btnNext">
        <h2>Back</h2>
      </div>



    </div>


<script type="text/javascript">



/*----------------------------------------------------------------------------*/
/*-----------------------------  Material  Click -----------------------------*/
/*----------------------------------------------------------------------------*/

var typeLan = document.getElementsByClassName("TypeLanyard")[0];
var TypeLanyardStyle = document.getElementsByClassName("TypeLanyard")[0].style;
typeLan.addEventListener("click", function() {
  TypeLanyardStyle.border = "2px solid blue";
  TypeLanyardStyle1.border = "1px solid black";
  changeNumberClip("block", "block", "none", "block", "block", "none");
  changeMeasurement("skew(14deg)", "87px", "rotate(-90deg) skewY(-14deg)", "10px","57.9%","61.9%",
                    "skew(-14deg)", "60%", "rotate(90deg) skewY(14deg)", "48%");
});

var typeLan1 = document.getElementsByClassName("TypeLanyard")[1];
var TypeLanyardStyle1 = document.getElementsByClassName("TypeLanyard")[1].style;
typeLan1.addEventListener("click", function() {
  TypeLanyardStyle.border = "1px solid black";
  TypeLanyardStyle1.border = "2px solid blue";
  changeNumberClip("block", "none", "block", "block", "none", "block");
  changeMeasurement("skew(5deg)", "15%", "rotate(-90deg) skewY(-9deg)", "-9%","65%","68.5%",
                    "skew(-5deg)", "77.5%", "rotate(90deg) skewY(5deg)", "67%");
});


</script>
<?php include("../../Pages/General/CheckBox/CheckBox.php");?>

<style media="screen">
body{
  margin: 0px;
  padding: 0px;
}
.Lanyards{
  position: relative;
  height: 6vh;
  background-color: #e0e0e0;
  width: 100%;
  padding: 60px 0;
  min-height: 1600px;
}
.Wrap-Lanyards{
  position: relative;
  width: 90%;
  height: 100%;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  box-shadow: 0px 0px 3px #000642;
}
.Box-Lanyards{
  position: relative;
  height: 60%;
  width: 50%;
  min-height: 430px;
  float: left;
  border-right: 5px solid black;
  border-bottom: 5px solid black;
  background-color: white;
  overflow-y: scroll;
}
.Checkout-Box{
  position: relative;
  height: 40%;
  width: 100%;
  min-height: 430px;
  float: left;
  border-top: 5px solid black;

  border-right: 5px solid black;
  border-bottom: 5px solid black;
  border-left: 5px solid black;

  background-color: white;
  overflow-y: scroll;
}
.Left-Border{
  border-left: 5px solid black;
}
.Box-Make-Lanyards{
  position: sticky;
  top: 0px;
  padding: 30px 0;
  width: 100%;
  text-align: center;
  margin-bottom: 40px;
  color: white;
  background-color: #000642;
  z-index: 10;
  border: 2px solid #000642;
  box-shadow: 0px 0px 3px #000642;
}
.Box-Make-Lanyards h2{
  color: lightgrey;
  text-shadow: 2px 2px 1px black;
}
.Container-Lanyard{
  position: relative;
  height: 70%;
  width: 96%;
  left: 50%;
  top: 40%;
  transform: translate(-50%,-50%);
}
.Container-Lanyard2{
  position: relative;
  height: 70%;
  width: 80%;
  left: 50%;
  top: 40%;
  transform: translate(-50%,-50%);
}
@media only screen and (max-width:950px){
  .Box-Lanyards{
    height: 50%;
    width: 100%;
  }
  .Lanyards{
    position: relative;
    min-height: 1820px;
  }
}
</style>

<section class="Lanyards">
  <div class="Wrap-Lanyards">
    <div class="Checkout-Box">
      <?php include("MeanSection/CheckOut/Chekout.php");?>
    </div>
    <div class="Left-Border  Box-Lanyards">
      <div class="Box-Make-Lanyards">
        <h2>Design your own Lanyard</h2>
      </div>
      <div class="Container-Lanyard">
        <?php include("MeanSection/Materials/Materials.php");?>
        <?php include("MeanSection/TypeLanyard/TypeLanyard.php");?>

        <?php include("MeanSection/Width/Width.php");?>
        <?php include("MeanSection/Color/Color.php");?>

      </div>
    </div>

    <div class="Box-Lanyards">
      <div class="Box-Make-Lanyards">
        <h2>Your lanyard design</h2>
      </div>
      <div class="Container-Lanyard2">
        <?php include("MeanSection/LanyardDesigned/LanyardDesigned.php");?>
      </div>
    </div>


  </div>

</section>

<script type="text/javascript">
/*----------------------------------------------------------------------------*/
/*--------------------------  Next Section  -------------------------*/
/*----------------------------------------------------------------------------*/
document.getElementById("ColorContainer").style.display="none";

document.getElementById("WithContainer").style.display="none";
document.getElementById("TypeLanyardContainer").style.display="none";

  var material = document.getElementById("NextMaterial");

  material.addEventListener("click",function(){
     document.getElementById("MaterialContainer").style.display="none";
     document.getElementById("TypeLanyardContainer").style.display="block";
});

var material = document.getElementById("NextWith");

material.addEventListener("click",function(){
   document.getElementById("TypeLanyardContainer").style.display="none";
   document.getElementById("WithContainer").style.display="block";
});

//

var backMaterial = document.getElementById("BackMaterial");

backMaterial.addEventListener("click",function(){
  document.getElementById("MaterialContainer").style.display="block";
  document.getElementById("TypeLanyardContainer").style.display="none";
});

var backTypeClip = document.getElementById("BackTypeClip");

backTypeClip.addEventListener("click",function(){
  document.getElementById("TypeLanyardContainer").style.display="block";
  document.getElementById("WithContainer").style.display="none";
});


var nextColor = document.getElementById("NextColor");

nextColor.addEventListener("click",function(){
  document.getElementById("WithContainer").style.display="none";
  document.getElementById("ColorContainer").style.display="block";
});



var nextColor = document.getElementById("EditColor");
var BoxLanyard = document.getElementsByClassName("Box-Lanyards")[0];
var BoxLanyard1 = document.getElementsByClassName("Box-Lanyards")[1];

var lanyards = document.getElementsByClassName("Lanyards")[0];
var CheckoutBox = document.getElementsByClassName("Checkout-Box")[0];




nextColor.addEventListener("click",function(){

  if (BoxLanyard.style.display == "block") {
    BoxLanyard.style.display = 'none';
    BoxLanyard1.style.display = 'none';
    CheckoutBox.style.height = "100%";
    lanyards.style.minHeight = "700px";
  }
  else {
    BoxLanyard.style.display = 'block';
    BoxLanyard1.style.display = 'block';
    CheckoutBox.style.height = "40%";
  lanyards.style.minHeight = "1500px";
}
});

</script>

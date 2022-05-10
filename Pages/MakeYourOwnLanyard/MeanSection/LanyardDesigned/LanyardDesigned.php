<style media="screen">
    .Design{
      position: relative;
    }
  .Container-Design2{
    position: relative;
    width: 350px;
    height: 600px;
    left: 50%;
    transform: translate(-50%,13%);
    }
  .with{
    top: 0px;
    display: block;
    position: absolute;
    height: 45px;
    width: 71%;
    border: 1px solid black;
    left: 50%;
    z-index: 10;
    transform: translateX(-50%) perspective(10px) rotateX(1deg);
    background-color: white;
  }
  .LinesTop{
    position: absolute;
    height: 100%;
    width: 100px;
    top: 0;
    left: 50%;
    transform: translateX(-50%) perspective(0) rotateX(1deg);
    border-right: 1px dashed #000642;
    border-left: 1px dashed #000642;

  }
  .Relative{
    position: relative;
    height: 100%;
    width: 100%;
  }
  .SingleEnded{
    display: block;
  }
  .SELeft, .SERight{
    position: absolute;
    top: calc(24px + 21px);
    width: 45px;
    height: 72%;
    border: 1px solid black;
    background-color: white;
    z-index: 1;
  }
  .SELeft{
    left:28.3%;
    transform: skew(13.9deg);

  }
  .SERight{
    left:58.9%;
    transform: skew(-13.9deg);
  }
  .SELeftBottom, .SERightBottom{
    position: absolute;
    top: 380px;
    width: calc(25px + 18px);
    height: 1px;
    background-color: white;
    z-index: 200;
    border-top: 1px dashed #000642;
  }

  .Clip{
    position: absolute;
    height: 110px;
    width: 69px;
    top: 75%;
    left: 50%;
    transform: translateX(-50%);
    z-index: 0;
  }
  .Clip img{
    position: absolute;
    width: 100%;
    left: 0px;
  }
  .Clip-Close{
    position: absolute;
    height: 120%;
    width: 60px;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
  }
  .Clip-Close img{
    position: relative;
    height: 100%;
  }
  .DoubleEnded{
    display: none;
  }
  .DELeft, .DERight{
    position: absolute;
    top: calc(24px + 21px);
    width: calc(25px + 20px);
    height: 72%;
    border: 1px solid black;
    background-color: white;
    z-index: 1;
  }
  .DELeft{
    left:18.5%;
    transform: skew(5deg);
  }

  .DERight{
    left:68.5%;
    transform: skew(-5deg);
  }
  .Clip1{
    left: 29.7%;
  }
  .Clip2{
    left: 69.3%;
  }
  .Size1{
    position: relative;
    display: block;
    height: 100%;
    width: 100%;
    animation-duration: 4s;
    animation-delay: -2s;
  }
  .Size2{
    position: relative;
    display: none;
    height: 100%;
    width: 100%;
    animation-duration: 6s;
    animation-delay: -1s;
  }

  @keyframes size1 {
    20%{
      opacity: 1;
        }
    100%{
      opacity: 0;
      transform: rotateY(180deg);
    }
  }



.containerSizeBtn{
  display: none;
  justify-content:space-around;
  position: relative;
  height: 80px;
  width: 100%;
  margin: 20px 0;
  opacity: 0;
}
.btnSize{
  position: relative;
  height: 60px;
  width: 140px;
  margin: 0 20px;
  align-self:center;
  border-radius: 5px;
  display: flex;
  cursor: pointer;
  box-shadow: 1px 1px 2px  black;
  background-color: #000642;
}
.btnSize:hover{
  box-shadow: 2px 2px 2px  black;
  transition: all .4s;
}
.btnSize:active{
  box-shadow: 1px 1px 2px  black;
  transition: all .4s;
}
.btnSize h5{
  position: absolute;
  font-size: 1.2em;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.WidthLanyard{
  position: absolute;
  height: 10px;
  width: 80px;
  top: 200px;
  left: 200px;
  transform: skew(-15deg);
  z-index: 10;
  border-left: 2px solid #000642;
  border-right: 2px solid #000642;
  border-top: 2px solid #000642;
  opacity: .2;
}
.WidthText{
  position: absolute;
  height: 30px;
  width: 20px;
  top: 175px;
  left: 215px;
  transform: skew(-15deg);
  z-index: 10;
  background-color: transparent;
}
.WidthText h2{
  font-size: 1.3em;
  font-weight: 500;
  color: #000642;
  opacity: .5;
  text-shadow: 2px 2px 0px  white;
}
.MeasurementOneClip{
  display: block;
}
.LongLanyard1{
  position: absolute;
  height: 432px;
  width: 8px;
  top: 45px;
  left: 87px;
  transform: skew(14deg);
  z-index: 1;
  border-bottom: 2px solid #000642;
  border-left: 2px solid #000642;
  background-color: white;
  opacity: .2;
}
.LongLanyard2{
  position: absolute;
  height: 52px;
  width: 10px;
  top: -7px;
  left: 40px;
  transform: skew(-14deg);
  z-index: 1;
  border-left: 2px solid #000642;
  opacity: .2;

}
.LongLanyard3{
  position: absolute;
  height: 7px;
  width: 129px;
  top: -9px;
  left: 46px;
  transform: skew(-14deg);
  z-index: 1;
  border-top: 2px solid #000642;
  border-right: 2px solid #000642;
  opacity: .2;

}
.LongLanyardText{
  position: absolute;
  height: 7px;
  width: 129px;
  top: 300px;
  left: 10px;
  transform: rotate(-90deg) skewY(-14deg) ;
  z-index: 1;
}
.LongLanyardText h2{
  font-size: 1.3em;
  font-weight: 500;
  color: #000642;
  opacity: .5;
}
.LongLanyard4{
  position: absolute;
  height: 7px;
  width: 12%;
  top: -9px;
  left: 52%;
  transform: skew(-14deg);
  z-index: 1;
  border-top: 2px solid #000642;
  border-right: 2px solid #000642;
  border-left: 2px solid #000642;
  opacity: .2;
}
.LongLanyard4Text{
  position: absolute;
  height: 20px;
  width: 80px;
  top: -33px;
  left: 175px;
  z-index: 12;
  background-color: white;

  font-size: 1.3em;
  font-weight: 500;
  color: #000642;
  opacity: .5;
}
.LongLanyard5{
  position: absolute;
  height: 52px;
  width: 10px;
  top: 71%;
  left: 60%;
  transform: skew(-14deg);
  z-index: 1;
  border-right: 2px solid #000642;
  border-top: 2px solid #000642;
  border-bottom: 2px solid #000642;
  opacity: .2;
}
.LongLanyard5Text{
  position: absolute;
  height: 7px;
  width: 129px;
  top: 80.5%;
  left: 48%;
  transform: rotate(90deg) skewY(14deg) ;
  z-index: 1;
  font-size: 1.3em;
  font-weight: 500;
  color: #000642;
  opacity: .5;
}
</style>
<section class="Design">

  <div class="Container-Design2">

    <div class="Size1">
      <div class="with">
        <div class="Relative">
          <div class="LinesTop">

          </div>
          <div class="Clip-Close">
            <img src="MeanSection/LanyardDesigned/Clips/ClipNeck.png" alt="">
          </div>
        </div>
      </div>
      <div class="SingleEnded">
        <div class="SELeft">
          <div class="SELeftBottom">
          </div>
        </div>
        <div class="SERight">
          <div class="SERightBottom">
          </div>
        </div>
        <div class="Clip">
          <div class="Relative">
            <img src="MeanSection/LanyardDesigned/Clips/StandarClip.png" alt="">
          </div>
        </div>
      </div>



      <div class="DoubleEnded">
        <div class="DELeft">

        </div>
        <div class="DERight">

        </div>
        <div class="Clip Clip1">
          <div class="Relative">
            <img src="MeanSection/LanyardDesigned/Clips/StandarClip.png" alt="">
          </div>
        </div>

        <div class="Clip Clip2">
          <div class="Relative">
            <img src="MeanSection/LanyardDesigned/Clips/StandarClip.png" alt="">
          </div>
        </div>
      </div>

    </div>


    <div class="Size2">
      <div class="with">
        <div class="Relative">
          <div class="LinesTop">

          </div>
          <div class="Clip-Close">
            <img src="MeanSection/LanyardDesigned/Clips/ClipNeck.png" alt="">
          </div>
        </div>
      </div>
      <div class="SingleEnded">
        <div class="SELeft">
          <div class="SELeftBottom">
          </div>
        </div>

        <div class="SERight">
          <div class="SERightBottom">

          </div>

        </div>
        <div class="Clip">
          <div class="Relative">
            <img src="MeanSection/LanyardDesigned/Clips/StandarClip.png" alt="">
          </div>
        </div>
      </div>
      <div class="DoubleEnded">
        <div class="DELeft">

        </div>
        <div class="DERight">

        </div>
        <div class="Clip Clip1">
          <div class="Relative">
            <img src="MeanSection/LanyardDesigned/Clips/StandarClip.png" alt="">
          </div>
        </div>

        <div class="Clip Clip2">
          <div class="Relative">
            <img src="MeanSection/LanyardDesigned/Clips/StandarClip.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="MeasurementOneClip">
      <div class="MeasurementWith">
        <div class="WidthText">
          <h2>25mm</h2>
        </div>
        <div class="WidthLanyard">
        </div>
      </div>
      <div class="MeasurementLong">
        <div class="LongLanyard">
          <div class="LongLanyard1">

          </div>
          <div class="LongLanyard2">

          </div>
          <div class="LongLanyard3">

          </div>
          <div class="LongLanyard4">

          </div>
          <h2 class="LongLanyard4Text">30mm</h2>
          <div class="LongLanyard5">

          </div>
          <h2 class="LongLanyard5Text">30mm</h2>

          <div class="LongLanyardText">
            <h2>450mm</h2>
          </div>
        </div>
      </div>
    </div>

</div>

</section>

<script type="text/javascript">

function changeNumberClip(typeLanyardTopDisplay, singleEndedDisplay, doubleEndedDisplay,
typeLanyardTop1Display, singleEnded1Display, doubleEnded1Display){
  var TypeLanyardTop = document.getElementsByClassName("TypeLanyard")[0].style;
  var singleEnded = document.getElementsByClassName("SingleEnded")[0].style;
  var doubleEnded = document.getElementsByClassName("DoubleEnded")[0].style;

  var TypeLanyardTop1 = document.getElementsByClassName("TypeLanyard")[1].style;
  var singleEnded1 = document.getElementsByClassName("SingleEnded")[1].style;
  var doubleEnded1 = document.getElementsByClassName("DoubleEnded")[1].style;
    TypeLanyardTop.display = typeLanyardTopDisplay;
    singleEnded.display = singleEndedDisplay;
    doubleEnded.display = doubleEndedDisplay;

    TypeLanyardTop1.display = typeLanyardTop1Display;
    singleEnded1.display = singleEnded1Display;
    doubleEnded1.display = doubleEnded1Display;
}
function changeMeasurement(LongLanyard1Transform, LongLanyard1Left, LongLanyard1TextTransform, LongLanyard1TextLeft,
                            WidthLanyardLeft, WidthTextLeft,
                          LongLanyard5Transform, LongLanyard5Left, LongLanyard5TextTransform, LongLanyard5TextLeft){

  var LongLanyard1 = document.getElementsByClassName("LongLanyard1")[0].style;
  var LongLanyard1Text = document.getElementsByClassName("LongLanyardText")[0].style;

  var WidthLanyard = document.getElementsByClassName("WidthLanyard")[0].style;
  var WidthText = document.getElementsByClassName("WidthText")[0].style;

  var LongLanyard5 = document.getElementsByClassName("LongLanyard5")[0].style;
  var LongLanyard5Text = document.getElementsByClassName("LongLanyard5Text")[0].style;

  LongLanyard1.transform = LongLanyard1Transform;
  LongLanyard1.left = LongLanyard1Left;

  LongLanyard1Text.transform = LongLanyard1TextTransform;
  LongLanyard1Text.left = LongLanyard1TextLeft;

  WidthLanyard.left = WidthLanyardLeft;
  WidthText.left = WidthTextLeft;

  LongLanyard5.transform = LongLanyard5Transform;
  LongLanyard5.left = LongLanyard5Left;

  LongLanyard5Text.transform = LongLanyard5TextTransform;
  LongLanyard5Text.left = LongLanyard5TextLeft;
}

function changeWithSE(withLanHeight, withLanWidth, withLanTop,
                      SELeftWidth, SELeftTop, SELeftHeight, SELeftTransform, SELeftLeft,
                    SERightWidth, SERightTop, SERightHeight, SERightTransform,SERightLeft){

    var withLan = document.getElementsByClassName("with")[0].style;
    var SELeft = document.getElementsByClassName("SELeft")[0].style;
    var SERight = document.getElementsByClassName("SERight")[0].style;

    withLan.height  =  withLanHeight;
    withLan.width  =  withLanWidth;
    withLan.top  =  withLanTop;

    SELeft.width  =  SELeftWidth;
    SELeft.top  =  SELeftTop;
    SELeft.height  =  SELeftHeight;
    SELeft.transform  =  SELeftTransform;
    SELeft.left  =  SELeftLeft;

    SERight.width  =  SERightWidth;
    SERight.top  =  SERightTop;
    SERight.height  =  SERightHeight;
    SERight.transform  =  SERightTransform;
    SERight.left  =  SERightLeft;
}
function changeWithDE(DELeftWidth, DELeftLeft, DELeftHeight, DELeftTop,
                      DERightWidth, DERightLeft, DERightHeight, DERightTop){
  var DELeft = document.getElementsByClassName("DELeft")[0].style;
  var DERight = document.getElementsByClassName("DERight")[0].style;

  DELeft.width   = DELeftWidth;
  DELeft.left    = DELeftLeft;
  DELeft.height  = DELeftHeight;
  DELeft.top     = DELeftTop;

  DERight.width  = DERightWidth;
  DERight.left   = DERightLeft;
  DERight.height = DERightHeight;
  DERight.top    = DERightTop;
}

var withLan = document.getElementsByClassName("with")[0].style;
var SELeft = document.getElementsByClassName("SELeft")[0].style;
var SERight = document.getElementsByClassName("SERight")[0].style;
var DELeft = document.getElementsByClassName("DELeft")[0].style;
var DERight = document.getElementsByClassName("DERight")[0].style;

function changeColor(color){

  withLan.background = color;
  SELeft.background = color;
  SERight.background = color;
  DELeft.background = color;
  DERight.background = color;
}
var colorTwo1;
var colorTwo2 = "rgba(254,254,254,0)";

function changeTwoColor1(oneColor){
  colorTwo1 = oneColor;
  withLan.background = "linear-gradient(0deg, "+colorTwo2+" 0%, "+colorTwo1+" 98%)";;
  SELeft.background = "linear-gradient(0deg, "+colorTwo2+" 0%, "+colorTwo1+" 98%)";;
  SERight.background = "linear-gradient(0deg, "+colorTwo2+" 0%, "+colorTwo1+" 98%)";;
  DELeft.background = "linear-gradient(0deg, "+colorTwo2+" 0%, "+colorTwo1+" 98%)";;
  DERight.background = "linear-gradient(0deg, "+colorTwo2+" 0%, "+colorTwo1+" 98%)";;
}

function changeTwoColor2(twoColor){
  colorTwo2 = twoColor;
  withLan.background = "linear-gradient(0deg, "+colorTwo2 +" 0%, "+colorTwo1+" 98%)";
  SELeft.background = "linear-gradient(0deg, "+colorTwo2 +" 0%, "+colorTwo1+" 98%)";
  SERight.background = "linear-gradient(0deg, "+colorTwo2 +" 0%, "+colorTwo1+" 98%)";
  DELeft.background = "linear-gradient(0deg, "+colorTwo2 +" 0%, "+colorTwo1+" 98%)";
  DERight.background = "linear-gradient(0deg, "+colorTwo2 +" 0%, "+colorTwo1+" 98%)";
}

var colorThree1;
var colorThree2 = "rgba(254,254,254,0)";
var colorThree3 = "rgba(254,254,254,0)";

function changeThreeColor1(oneColor){
  colorThree1 =  oneColor;
  withLan.background = "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
  SELeft.background =  "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
  SERight.background = "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
  DELeft.background =  "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
  DERight.background = "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
}
function changeThreeColor2(twoColor){
  colorThree2 = twoColor;
  withLan.background = "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
  SELeft.background =  "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
  SERight.background = "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
  DELeft.background =  "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
  DERight.background = "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
}
function changeThreeColor3(threeColor){
  colorThree3 = threeColor;
  withLan.background = "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
  SELeft.background =  "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
  SERight.background = "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
  DELeft.background =  "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
  DERight.background = "linear-gradient(0deg, "+colorThree1+" 0%, "+colorThree2+" 48%, "+colorThree3+" 98%)";
}







var colorFour1;
var colorFour2 = "rgba(254,254,254,0)";
var colorFour3 = "rgba(254,254,254,0)";
var colorFour4 = "rgba(254,254,254,0)";

function changeFourColor1(oneColor){
  colorFour1 =  oneColor;
  withLan.background = "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  SELeft.background =  "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  SERight.background = "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  DELeft.background =  "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  DERight.background = "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
}

function changeFourColor2(twoColor){
  colorFour2 =  twoColor;
  withLan.background = "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  SELeft.background =  "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  SERight.background = "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  DELeft.background =  "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  DERight.background = "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
}

function changeFourColor3(threeColor){
  colorFour3 =  threeColor;
  withLan.background = "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  SELeft.background =  "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  SERight.background = "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  DELeft.background =  "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  DERight.background = "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
}

function changeFourColor4(fourColor){
  colorFour4 =  fourColor;
  withLan.background = "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  SELeft.background =  "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  SERight.background = "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  DELeft.background =  "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
  DERight.background = "background: linear-gradient(90deg, "+colorFour1+" 0%, "+colorFour2+" 30%, "+colorFour3+" 60%, "+colorFour4+" 98%)";
}
</script>

<style media="screen">
  .sliderSection{
    position: relative;
    height: 70vh;
    width: 100vw;
    min-height: 568px;
  }
  .containerSlider{
    position: absolute;
    height: 100%;
    width: 300vw;
    display: flex;
    left: 0vw;
  }
  .sliderRelative{
    position: relative;
    height: 100%;
    width: 100%;
  }
  .slider{
    position: relative;
    width: 33.2%;
    height: 100%;
    display: inline-block;
    background-color: #cccccc; /* Used if the image is unavailable */
    height: 100%;
    background-position: center; /* Center the image */
    background-repeat: no-repeat; /* Do not repeat the image */
    background-size: cover; /* Resize the background image to cover the entire container */
  }
  .slider:nth-child(1) {
    background-image: url("../../Pages/Index/Slider/Slide1.png");
  }
  .slider:nth-child(2) {
    background-image: url("../../Pages/Index/Slider/Slide2.png");
  }
  .slider:nth-child(3) {
    background-image: url("../../Pages/Index/Slider/Slide3.png");
  }
  .moveSliderContainer{
    position: absolute;
    width: 100vw;
    height: 70%;
    top: 50%;
    transform: translateY(-50%);
    left: 0px;
    z-index: 2;
    display: flex;
  }
  .btnMoveSliderContainer{
    position: absolute;
    left: 0px;
    bottom: 15px;
    z-index: 2;
    left: 50%;
    transform: translateX(-50%);
    padding: 5px;
  }
  .moveSlider{
    position: relative;
    width: 49.5%;
    height: 100%;
    display: inline-block;
  }
  .btnMoveSlider{
    position: relative;
    height: 16px;
    width: 60px;
    background-color: white;
    margin: 0 5px;
    display: inline-block;
    border-radius: 10px;
    border: 3px solid black;
    box-shadow: 2px 2px 3px black;
    transition: width .5s;
  }
  .btnMoveSlider:hover{
    width: 85px;
    transition: width .5s;
  }

</style>

<section class="sliderSection">
  <div class="moveSliderContainer">
    <div class="sliderRelative">
      <div class="moveSlider">
      </div>
      <div class="moveSlider">
      </div>
    </div>
  </div>
  <div class="btnMoveSliderContainer">
    <div class="sliderRelative">
      <div class="btnMoveSlider">
      </div>
      <div class="btnMoveSlider">
      </div>
      <div class="btnMoveSlider">
      </div>
    </div>
  </div>
  <div class="containerSlider">
    <div class="sliderRelative">
      <div class="slider">
        <h1>Slider1</h1>
      </div>
      <div class="slider">
        <h1>Slider2</h1>
      </div>
      <div class="slider">
        <h1>Slider3</h1>
      </div>
    </div>
  </div>
</section>


<script type="text/javascript">
var moveSlider = document.getElementsByClassName('moveSlider');
var containerSlider = document.getElementsByClassName('containerSlider');
var containerSliderLeft = containerSlider[0].offsetLeft;
//Left
moveSlider[0].addEventListener("mousedown",function(){
  if (containerSlider[0].style.left  == "-200vw" ){
   containerSlider[0].style.left = "-100vw";
 }
 else if (containerSlider[0].style.left  == "-100vw") {
   containerSlider[0].style.left = 0;
 }
 else if (containerSlider[0].style.left  == 0 || containerSlider[0].style.left  == "0px"){
   containerSlider[0].style.left = "-200vw";
 }
 containerSlider[0].style.transition = "2s";
} )
//Right
moveSlider[1].addEventListener("mousedown",function(){
   if (containerSlider[0].style.left  == 0 || containerSlider[0].style.left  == "0px"){
    containerSlider[0].style.left = "-100vw";
  }
  else if (containerSlider[0].style.left  == "-100vw") {
    containerSlider[0].style.left = "-200vw";
  }
  else if (containerSlider[0].style.left  == "-200vw") {
    containerSlider[0].style.left = 0;
  }
  //se mueva con efecto
  containerSlider[0].style.transition = "2s";

})
//Para que se mueva automaticamente
var counter;
function automaticMoveSlider(){

}
</script>

<style media="screen">
.slider {
  position: relative;
  width: 100%;
  height: 85vh;
  min-height: 480px;
  overflow: hidden;
}

@media screen and (max-width: 391px){
  .hidden{
    display: none;
  }
}

.slides {
  position: absolute;
  width: 300%;
  height: 100%;
  top: 0px;
  left: 0;
  transition: 2s ease;
}
.slide {
  position: relative;
  width: 33.33%;
  height: 100%;
  float: left;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.slide::before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

       /* Slider images */
      .slide:nth-child(1) {
        background-image: url(../../Pages/Index/Slider/Slide2.png);
      }

      .slide:nth-child(2) {
        background-image: url(../../Pages/Index/Slider/Slide1.png);
      }

      .slide:nth-child(3) {
        background-color:  white;

        filter: drop-shadow(5px 5px 5px black);
        background-image: url(../../Pages/Index/Slider/Slide3.png);
      }


/* Slider Data */
.slide-data {
  position: absolute;
  top: 65%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  text-align: center;
  color: WHITE;
  padding: 0 15px;
  background-color: rgba(250,250,250,.5);
  padding: 20px 0;
}
.relative{
  position: relative;
  display: block;
}
.top-left, .top-right, .bottom-left, .bottom-right{
  position: absolute;
  width: 120px;
  height: 120px;
}
.top-left{
  top: 0px;
  left: 0px;
  border-top: 13px solid red;
  border-left: 13px solid red;
}
.top-right{
  top: 0px;
  right: 0px;
  border-top: 13px solid red;
  border-right: 13px solid red;
}
.bottom-left{
  bottom: 0px;
  left: 0px;
  border-bottom: 13px solid red;
  border-left: 13px solid red;
}
.bottom-right{
  bottom: 0px;
  right: 0px;
  border-bottom: 13px solid red;
  border-right: 13px solid red;
}

.slide-data h1 {
  text-shadow: 2px 2px 0px grey;
  text-align: center;
  text-transform: uppercase;
  font-weight: bolder;
  font-size: 2.4em;
  color: black;
  margin-top: 20px;
}
.panelSlide{
  position: relative;
  left: 30%;
  top: 50%;
  transform: translate(-50%,-50%);
  height: 60%;
  width: 45%;
  min-width: 340px;
  max-width: 600px;
  max-width: 600px;
}
.panelSlide  h2{
  position: relative;
  display: block;
  width: 90%;
  font-size: calc(1.5em  + 1.6vw);
  left: 50%;
  transform: translateX(-50%);
  font-weight: 400;
  padding: 0 20px;
  text-align:justify;

}
.panelSlide  h3{
  position: relative;
  display: block;
  font-size: calc(0.8em  + 1.6vw);
  width: 90%;
  left: 50%;
  transform: translateX(-50%);
  font-weight: 400;
  padding: 0 20px;
  text-align:justify;

}

.slide-data h3{
  text-shadow: 1px 1px 3px  white;
  color: black;
  font-size: 1.6em;
  font-weight: 400;
}
.containerPanelSlide1{
  position: relative;
  top: 50%;
}

@media screen and (max-width: 800px){
  .panelSlide{
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    width: 95vw;
    height: 60%;
    min-width: 300px;

  }
}

@media screen and (max-height: 600px){
  .panelSlide{
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    width: 90vw;
    height: 80%;
    min-width: 300px;
  }
  /* Slider Data */
  .slide-data {
    top: 45%;
  }
}




  .slide-data p {
    font-size: 1.2em;
    margin-bottom: 10px;
    color: lightgrey;
    text-shadow: 1px 1px black;
  }

  .slide-data button {
    background: none;
    outline: none;
    border: 1px solid #fff;
    font-weight: bolder;
    padding: 10px 25px;
    font-size: 20px;
    transition: 0.4s linear;
    text-shadow: 1px 1px black;
    cursor: pointer;
    color: #000;
    background-color: #fff;
    text-shadow: 1px 1px transparent;
    border: 1px  solid black;
    box-shadow: 0px 0px 8px black;

  }

  .slide-data button:hover {
    text-shadow: 1px 1px black;
    border: 1px  solid black;
    background-color: transparent;
  }




  /* Dots & Arrows */
  .slider .arrows {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    outline: none;
    border: none;
    font-size: 60px;
    color: #fff;
    transition: 0.4s linear;
    cursor: pointer;
  }
  .slider .arrows:hover {
    text-shadow: 0px 0px 3px grey;
  }
    .slider .arrows:hover {
      text-shadow: 1px 1px 3px grey;
    }

      .slider .prev {
        left: 3%;
      }
      .slider .next {
        right: 3%;
      }

  .dots {
    position: absolute;
    bottom: 3%;
    width: 100%;
    text-align: center;
    cursor: pointer;
  }

  .dots span {
    width: 12px;
    height: 12px;
    margin: 0 6px;
    border-radius: 100px;
    background-color: grey;
    display: inline-block;
    transition: 0.4s linear;

  }

  .dots span:hover {
    background-color: #000 !important;
    border: 2px solid #fff;
  }
  .dot-active {
    background-color: black !important;
    border: 2px solid #fff;
  }
  .buttonSlider1{
    position: relative;
    padding: 10px  40px;
    z-index: 200;
    cursor: pointer;
    left: 50%;
    transform: translateX(-50%);
    background-color: red;
    color: white;
    border: 3px solid transparent;
    font-size: 1.3em;
    text-shadow: 1px 1px 2px black;
    transition: all .5s;
  }
  .buttonSlider1:hover{
    border: 3px solid black;
    background-color: transparent;
    color: black;
    transition: all .5s;
  }
</style>


  <div class="slider">
     <div class="slides">
        <div class="slide">

          <div class="panelSlide">
            <div class="relative">
                <div class="top-left"></div>
                <div class="top-right"></div>
                <div class="bottom-left"></div>
                <div class="bottom-right"></div>
                <div class="containerPanelSlide1">
                <br><br>
                <h3>As the future moves more and more towards contactles and hands free actions
                -what better way to carry your ID card, keys, passes, tickets etc than on a</h3>
                <br>
                <h2><strong>LANYARD</strong> </h2>
                <br>
                <button class="buttonSlider1" type="button" name="button">Start</button>
              </div>
            </div>
          </div>

        </div>

         <div class="slide">
           <div class="slide-data">
             <h1> Most popular lanyards</h1><br>
             <br>
             <h3> Hands free, light and comfortable to wear, hard to lose </h3>
             <h3> We have all the options to fit around any neck! </h3><br>
             <br>
             <button id="Open-Scanners"> Go </button>
           </div>
         </div>

          <div class="slide">
            <div class="slide-data">
              <h1> Custom Lanyards </h1><br>
              <br>
              <h3> Material can be tubular, polyester, bamboo, woven -- there are many choices. </h3>
              <h3> There are even LED light up lanyards.. </h3>
              <h3> The width of the lanyard can be for comfort or to accommodate your logo </h3><br>

              <h3 class="hidden">If in doubt work with a 20mm or 15mm dye sublimated polyester lanyard -- eveeryone loves this one and the price is right...</h3>
              <br>
              <button id="Open-ContactUs"> Visit </button>
            </div>
          </div>
     </div> <!-- END Slides -->



    <!-- Left Arrow -->
    <button class="arrows prev" onclick="plusslide(-1)">
      <span><i class="fas fa-angle-left"></i></span>
    </button>

    <!-- Right Arrow -->
    <button class="arrows next" onclick="plusslide(1)">
      <span><i class="fas fa-angle-right"></i></span>
    </button>

    <div class="dots">
      <span onclick="currentslide(1)"> </span>
      <span onclick="currentslide(2)"> </span>
      <span onclick="currentslide(3)"> </span>
    </div>

  </div> <!-- END Banner Slider -->



  <script type="text/javascript">








  let slideIndex = 0;

  let slider = document.querySelector(".slider");
  let slides = document.querySelector(".slides");
  let slide = document.querySelectorAll(".slide");

  let dots = document.querySelectorAll(".dots span");


  showslide();


  function plusslide(position) {
    slideIndex += position;

    if(slideIndex > slide.length) {
      slideIndex = 1;
    }
    else if (slideIndex < 1) {
      slideIndex = slide.length;
    }

    // Default: Active Class is removed from all dots
    for (let i=0; i < dots.length; i++) {
      const element = dots[i];
      element.classList.remove("dot-active");
    }

    slides.style.left = `-${slideIndex -1}00%`;
    dots[slideIndex - 1].classList.add("dot-active");

  } // End PlusSlide()








  function currentslide(index) {

    if(index > slide.length) {
      index = 1;
    }
    else if (index < 1) {
      index = slide.length;
    }

    // Default: Active Class is removed from all dots
    for (let i=0; i < dots.length; i++) {
      const element = dots[i];
      element.classList.remove("dot-active");
    }

    slides.style.left = `-${index -1}00%`;
    dots[index - 1].classList.add("dot-active");

    slideIndex = index;
  } // End CurrentSlide()










  function showslide() {
    slideIndex++;

    if(slideIndex > slide.length) {
      slideIndex = 1;
    }
    else if (slideIndex < 1) {
      slideIndex = slide.length;
    }

    // Default: Active Class is removed from all dots
    for (let i=0; i < dots.length; i++) {
      const element = dots[i];
      element.classList.remove("dot-active");
    }

    slides.style.left = `-${slideIndex -1}00%`;
    dots[slideIndex - 1].classList.add("dot-active");
  }


  let interval = setInterval(()=> {
    showslide();
  }, 3000);   // Change image after 6 secs


  slider.addEventListener("mouseover", ()=> {
    clearInterval(interval);  // Stop Changing images onHover
  });


  slider.addEventListener("mouseout", ()=> {
    interval = setInterval(()=> {
      showslide();
    }, 3000);         // resume Timer after MouseOut from Slide
  });

  </script>

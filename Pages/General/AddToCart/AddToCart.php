<style media="screen">
.backgroundAddToCart{
  position: sticky;
  padding: 0px;
  z-index: 10;
  top: 91px;
  display: none;
}
  .AddToCart{
    position: absolute;
    left: 50%;
    top: 10%;
    transform: translateX(-50%);
    padding: 0px;
    z-index: 10;
    color: white;
  }
  .cartContainer{
    position: relative;
    padding: 3px;
    min-width: 290px;
    width: 290px;
    height: 550px;
    background:  rgba(207, 198, 247, 0.8);
  }
  .addToCartContainer{
    position: relative;
    display: flex;
    flex-direction: row;
    justify-content: center;
    flex-wrap: wrap;
  }
  .lanyard{
    width: 270px;
    height: 520px;
    position: relative;
    top: 50%;
    transform: translate(-50%,-50%);
    left:50%;
  }
  @media only screen and (max-width: 600px) {
   .addToCartContainer{
     flex-direction:row-reverse;
    }
    .cartContainer{
      border-top: 1px solid black;
      border-right: 1px solid black;
      border-left: 1px solid black;
    }

    .backgroundAddToCart{
      top: -560px;
    }
     }

     .closeX{
       position: absolute;
       right: 3px;
       top: 3px;
       z-index: 12;
       color: black;
       cursor: pointer;
       text-shadow: 2px 2px 4px grey;
       font-size: 1.3em;

     }
     .closeX:hover{
       text-shadow: 2px 2px 2px grey;
       transition: all .5s;
     }

   /*-------------------------------------------------------------------------*/
   /*-------------------------------- One end --------------------------------*/
   /*-------------------------------------------------------------------------*/
   .neckLeft{
    position: absolute;
    width: 100px;
    height: 30px;
    background: white;
    transform: perspective(10px) rotateX(2deg) translateX(-50%);
    left: 30%;
    border-top: 1px solid black;
    border-left: 1px solid black;
    border-right: 1px solid black;
    border-bottom: 1px solid black;
   }
   .neckRight{
     position: absolute;
     width: 100px;
     height: 30px;
     background: white;
     transform: perspective(10px) rotateX(2deg) translateX(50%);
     right: 30%;
     border-top: 1px solid black;
     border-right: 1px solid black;
     border-left: 1px solid black;
     border-bottom: 1px solid black;
   }
   .sideLeft{
     position: absolute;
     width: 30px;
     height: 53.5%;
     background: white;
     transform: skew(18.7deg) ;
     top: 30.5px;
     left: 27.1%;
     border-left: 1px solid black;
     border-right:1px solid black;
   }
   .sideRight{
     position: absolute;
     width: 30px;
     height: 53.5%;
     background: white;
     transform: skew(-18.7deg) ;
     top: 30.5px;
     right: 27.1%;
     border-left: 1px solid black;
     border-right:1px solid black;
   }
   .center{
     position: absolute;
     width: 30px;
     height: 26%;
     background: rgba(255,255,255,1);
     left: 50%;
     transform: translateX(-50%);
     top: 59.3%;
     border-bottom: 1px solid black;
     border-left: 1px solid black;
     border-right: 1px solid black;
   }
   .clickNeck{
     position: absolute;
     left: 50%;
     transform: translateX(-50%);
     height: 40px;
     width: 40px;
     z-index: 100;
     top: -4px;
   }
   .clickNeck img{
     height: 40px;
     width:40px;
     transform: rotate(90deg);
   }
   .standarClip img{
     position: absolute;
     top: 420px;
     left: 50%;
     height: 110px;
     width: 55px;
     transform:  translateX(-50%);
     z-index: -2;
   }
   .attachmentClip{
     position: absolute;
     height: 68px;
     width: 37px;
     top: 300px;
     left: 43%;
   }
   .attachmentClip img{
     height: 68px;
     width: auto;
   }
   .colour1{
     position: absolute;
     top: 60%;
     left: 3.5%;
   }
   .colour2{
     position: absolute;
     top: 68%;
     left: 3.5%;
     display: none;
   }
   .inputRange1{
     position: absolute;
     top:78%;
     left:-5%;
     border: 1px solid black;
     height:50px;
     width: 80px;
     transform: rotate(90deg);
     display: none;
   }

/*------------------------------ One end 10mm -------------------------------*/
 .neckLeft10mm{
   position: absolute;
   height: 20px;
   width: 95px;
   transform: perspective(10px) rotateX(2deg) translateX(-50%);
   left: 30%;
  }
 .neckRight10mm{
   position: absolute;
   width: 95px;
   height: 20px;
   transform: perspective(10px) rotateX(2deg) translateX(50%);
   right: 30%;
  }
  .sideLeft10mm{
    width: 20px;
    height: 55.5%;
    transform: skew(18.2deg) ;
    top: 20px;
    left: 28.7%;
  }
  .sideRight10mm{
    width: 20px;
    height: 55.5%;
    transform: skew(-18.2deg) ;
    top: 20px;
    right: 28.7%;
  }
  .center10mm{
    width: 20px;
  }
  .clickNeck10mm{
    top: -4px;
    height: 28px;
    width: 28px;

  }
  .clickNeck10mm img{
    height: 28px;
    width: 28px;

  }
  .standarClip10mm img{
    position: absolute;
    top: 420px;
    left: 50%;
    height: 95px;
    width: 40px;
    transform:  translateX(-50%);
  }
  .attachmentClip10mm{
    height: 50px;
    width: 25px;
    top: 300px;
    left: 45.5485%;
  }
  .attachmentClip10mm img{
    height: 50px;
    width: 25px;
  }

/*------------------------------ One end 15mm -------------------------------*/
  .neckLeft15mm{
    position: absolute;
    height: 25px;
    transform: perspective(10px) rotateX(2deg) translateX(-50%);
    left: 30%;
    }
  .neckRight15mm{
    position: absolute;
    width: 100px;
    height: 25px;
    background: white;
    transform: perspective(10px) rotateX(2deg) translateX(50%);
    right: 30%;
    }
  .sideLeft15mm{
    position: absolute;
    width: 25px;
    height: 54.5%;
    transform: skew(18.78deg) ;
    top: 25px;
    left: 27.5%;
    }
  .sideRight15mm{
    position: absolute;
    width: 25px;
    height: 54.5%;
    transform: skew(-18.78deg) ;
    top: 25px;
    right: 27.5%;
    }
  .center15mm{
    width: 25px;
    }
  .clickNeck15mm{
    top: -4px;
    height: 33px;
    width:33px;
    }
    .clickNeck15mm img{
      height: 33px;
      width:33px;
    }
    .standarClip15mm img{
      position: absolute;
      top: 420px;
      left: 50%;
      height: 100px;
      width: 45px;
      transform:  translateX(-50%);
      z-index: -2;
    }
    .attachmentClip15mm{
      height: 55px;
      width: 30px;
      top: 300px;
      left: 44.8%;
    }
    .attachmentClip15mm img{
      height: 55px;
      width: 30px;
    }


/*------------------------------ One end 20mm -------------------------------*/
  .neckLeft20mm{
    width: 100px;
    height: 30px;
    transform: perspective(10px) rotateX(2deg) translateX(-50%);
    left: 30%;
    }
  .neckRight20mm{
    width: 100px;
    height: 30px;
    transform: perspective(10px) rotateX(2deg) translateX(50%);
    right: 30%;
    }
  .sideLeft20mm{
    width: 30px;
    height: 53.5%;
    transform: skew(18.7deg) ;
    top: 30.5px;
    left: 27.1%;
    }
  .sideRight20mm{
    width: 30px;
    height: 53.5%;
    transform: skew(-18.7deg) ;
    top: 30.5px;
    right: 27.1%;
    }
  .center20mm{
    width: 30px;
    height: 26%;
    top: 59%;
    }
  .clickNeck20mm{
    top: -4px;
    height: 40px;
    width: 40px;
    }
    .clickNeck20mm img{
      height: 40px;
      width: 40px;
    }
    .attachmentClip20mm{
      height: 60px;
      width: 35px;
      top: 300px;
      left: 43.7%;
    }
    .attachmentClip20mm img{
      height: 60px;
      width: 35px;
    }


/*------------------------------ One end 25mm -------------------------------*/
  .neckLeft25mm{
      height: 35px;
      width: 97px;
      transform: perspective(10px) rotateX(2deg) translateX(-50%);
      left: 30.3%;
    }
  .neckRight25mm{
      height: 35px;
      width: 90px;
      transform: perspective(10px) rotateX(2deg) translateX(50%);
      right: 29.2%;
      }
  .sideLeft25mm{
      width: 35px;
      height: 52.6%;
      transform: skew(18.1deg) ;
      top: 35px;
      left: 27%;
    }
  .sideRight25mm{
      width: 35px;
      height: 52.6%;
      transform: skew(-18.1deg) ;
      top: 35px;
      right: 27%;
    }
  .center25mm{
      width: 35px;
    }
  .clickNeck25mm {
    top: -4px;
    height: 45px;
    width: 45px;
    }
  .clickNeck25mm img{
    height: 45px;
    width: 45px;
    }
    .attachmentClip25mm{
      height: 65px;
      width: 40px;
      top: 300px;
      left: 42.7%;
    }
    .attachmentClip25mm img{
      height: 65px;
      width: 40px;
    }

/*------------------------------ One end 30mm -------------------------------*/
  .neckLeft30mm{
      height: 40px;
      width: 97px;
      transform: perspective(10px) rotateX(2deg) translateX(-50%);
      left: 30.3%;
  }
  .neckRight30mm{
      height: 40px;
      width: 90px;
      transform: perspective(10px) rotateX(2deg) translateX(50%);
      right: 29.2%;
  }
  .sideLeft30mm{
      width: 40px;
      height: 51.5%;
      transform: skew(18.2deg) ;
      top: 40.7px;
      left: 26.3%;
  }
  .sideRight30mm{
      width: 40px;
      height: 51.5%;
      transform: skew(-18.2deg) ;
      top: 40.7px;
      right: 26.3%;
  }
  .center30mm{
      width: 40px;
  }
  .clickNeck30mm {
    top: -4px;
    height: 50px;
    width: 50px;
  }
  .clickNeck30mm img{
    height: 50px;
    width: 50px;
  }
  .attachmentClip30mm{
    height: 70px;
    width: 45px;
    top: 300px;
    left: 41.88%;
  }
  .attachmentClip30mm img{
    height: 70px;
    width: 45px;
  }


/*-------------------------------------------------------------------------*/
/*----------------------------- itemsAddToCart ----------------------------*/
/*-------------------------------------------------------------------------*/
 .itemsContainerAddToCart{
   position: relative;
   width: 90%;
   left: 50%;
   transform: translateX(-50% );
   margin: 15px 0px;
   padding: 10px 0;
 }
 .itemContainerAddToCart{
   background: rgba(69, 79, 176, 1);
   position: relative;
   width: 100%;
   display: flex;
   flex-wrap: wrap;
   height: 35px;
   cursor: pointer;
   box-shadow: 0px 0px 3px black;
   margin: 3px 0px;
 }
 .items1AddToCart{
   position: relative;
   height: 100%;
   width: 50%;
 }
 .items1AddToCart h4{
   text-align: center;
   position: relative;
   top: 50%;
   transform: translateY(-50%);
   font-size: 0.9em;
 }
 .selectItemsAddToCart{
   position: relative;
   height: 130px;
   width: 100%;
   display: none;
   overflow-y: scroll;
   z-index: 3;
   background: rgba(131, 137, 202, 1);
 }
 .itemsForSelectAddToCart{
   height: 35px;
   width: 100%;
   position: relative;
   background: rgba(193, 196, 228, 1);
   box-shadow: 0px 0px 3px black;
   z-index: 10;
 }
 .itemsForSelectAddToCart:hover{
  background: rgba(131, 137, 202, 1);
  transition: background 0.5s;
 }
 .itemsForSelectAddToCart h4 {
   position: relative;
   text-align: center;
   top: 50%;
   transform: translateY(-50%);
   color: rgba(46, 52, 117, 1);
   font-size: 0.9em;
 }
 .itemsForSelectAddToCart:hover h4{
   color: white;
   transition: color .5s;
 }
 .showSelect{
 display: block;
}
  input[type=range] {
  -webkit-appearance: none;
  margin: 18px 0;
  width: 100%;}
  input[type=range]:focus {
    outline: none;
  }
  input[type=range]::-webkit-slider-runnable-track {
    width: 100%;
    height: 8.4px;
    cursor: pointer;
    box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
    background: rgba(69, 79, 176, 1);
    border-radius: 1.3px;
    border: 0.2px solid #010101;
  }
  input[type=range]::-webkit-slider-thumb {
    box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
    border: 1px solid #000000;
    height: 36px;
    width: 16px;
    border-radius: 3px;
    background: #ffffff;
    cursor: pointer;
    -webkit-appearance: none;
    margin-top: -14px;
  }
  input[type=range]:focus::-webkit-slider-runnable-track {
    background: #2E3475;
  }
  input[type=range]::-moz-range-track {
    width: 100%;
    height: 8.4px;
    cursor: pointer;
    box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
    background: #3071a9;
    border-radius: 1.3px;
    border: 0.2px solid #010101;
  }
  input[type=range]::-moz-range-thumb {
    box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
    border: 1px solid #000000;
    height: 36px;
    width: 16px;
    border-radius: 3px;
    background: #ffffff;
    cursor: pointer;
  }
  input[type=range]::-ms-track {
    width: 100%;
    height: 8.4px;
    cursor: pointer;
    background: transparent;
    border-color: transparent;
    border-width: 16px 0;
    color: transparent;
  }
  input[type=range]::-ms-fill-lower {
    background: #2a6495;
    border: 0.2px solid #010101;
    border-radius: 2.6px;
    box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  }
  input[type=range]::-ms-fill-upper {
    background: #3071a9;
    border: 0.2px solid #010101;
    border-radius: 2.6px;
    box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
  }
  input[type=range]::-ms-thumb {
    box-shadow: 1px 1px 1px #000000, 0px 0px 1px #0d0d0d;
    border: 1px solid #000000;
    height: 36px;
    width: 16px;
    border-radius: 3px;
    background: #ffffff;
    cursor: pointer;
  }
  input[type=range]:focus::-ms-fill-lower {
    background: #3071a9;
  }
  input[type=range]:focus::-ms-fill-upper {
    background: #367ebd;
  }

  .BtnAddToCart{
    background-color: rgba(69, 79, 177, 1);
    padding: 5px 10px;
    color: white;
    font-size: 1em;
    min-width: 120px;
    margin: 20px 0;
  }
  .BtnSaveLanyard{
    background-color: rgba(69, 79, 177, 1);
    padding: 5px 10px;
    color: white;
    font-size: 1em;
    min-width: 120px;
    margin: 20px 0;
  }

/*-------------------------------------------------------------------------*/
/*----------------------------- measureLanyards----------------------------*/
/*-------------------------------------------------------------------------*/
.widthMeasure{
  position: absolute;
  width: 40px;
  height: 5px;
  border-top: 1px solid black;
  border-left: 1px solid black;
  border-right: 1px solid black;
  left: 167px;
  top: 180px;
  display: none;
}

</style>
<div class="backgroundAddToCart">

<section class="AddToCart">

  <div class="addToCartContainer">
    <div class="cartContainer">
      <div class="itemsContainerAddToCart">

        <div class="itemContainerAddToCart">
          <div class="items1AddToCart">
            <h4>Material</h4>
          </div>
          <div class="items1AddToCart">
            <h4>Dye-sublimation</h4>
          </div>
          <div class="selectItemsAddToCart">
            <div class="itemsForSelectAddToCart">
              <h4>Tube Polyester</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>Natural Bamboo</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>Dyed Bamboo</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>Recycled PET</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>Dye-sublimation</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>Dye-sub Recycled PET</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>Woven</h4>
            </div>

          </div>
        </div> <!-- Material -->
        <div class="itemContainerAddToCart">
          <div class="items1AddToCart">
            <h4>Width</h4>
          </div>
          <div class="items1AddToCart">
            <h4 id="widthChaged">20mm</h4>
          </div>
          <div class="selectItemsAddToCart">
            <div class="itemsForSelectAddToCart">
              <h4>10mm</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>15mm</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>20mm</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>25mm</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>30mm</h4>
            </div>
          </div>
        </div> <!-- Width -->
        <div class="itemContainerAddToCart">
          <div class="items1AddToCart">
            <h4>Clips</h4>
          </div>
          <div class="items1AddToCart">
            <h4 id="clipChaged">Standard Dog Clip</h4>
          </div>
          <div class="selectItemsAddToCart">
            <div class="itemsForSelectAddToCart">
              <h4>Slide Clip</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>Crab Hook</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>Swivel Clip</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>Metal J Hook</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>Crocodile Clip</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>Standard Dog Clip</h4>
            </div>


          </div>
        </div> <!-- Width --> <!-- Clips -->
        <div class="itemContainerAddToCart">
          <div class="items1AddToCart">
            <h4>Attachment</h4>
          </div>

          <div class="items1AddToCart">
            <h4>None</h4>
          </div>

          <div class="selectItemsAddToCart">
            <div class="itemsForSelectAddToCart">
              <h4>None</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>Bottle Holder</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>Quick Release</h4>
            </div>

          </div>
        </div> <!-- Width --> <!-- Attachment -->
        <div class="itemContainerAddToCart"> <!-- Selling prices -->
          <div class="items1AddToCart">
            <h4>Selling prices</h4>
          </div>
          <div class="items1AddToCart">
            <h4>1 colour 1 side</h4>
          </div>
          <div class="selectItemsAddToCart">
            <div class="itemsForSelectAddToCart">
              <h4>1 colour 1 side</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>1 colour 2 sides</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>2 colours 1 side</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>2 colours 2 sides</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>CMYK 2 sides</h4>
            </div>
          </div>
        </div> <!-- Width -->
        <div class="itemContainerAddToCart"> <!-- Time -->
          <div class="items1AddToCart">
            <h4>Time</h4>
          </div>
          <div class="items1AddToCart">
            <h4>8 WD</h4>
          </div>
          <div class="selectItemsAddToCart">
            <div class="itemsForSelectAddToCart">
              <h4>8 WD</h4>
            </div>
            <div class="itemsForSelectAddToCart">
              <h4>10 WD</h4>
            </div>
          </div>
        </div> <!-- Width -->

        <input type="range" id="vol" name="vol" min="0" max="50">

        <button id="BtnAddToCart" class="BtnAddToCart" type="button" name="button">Add to cart</button>
        <button id="BtnSaveLanyard" class="BtnSaveLanyard" type="button" name="button">Save</button>

      </div>
    </div>
    <div class="cartContainer">
      <div class="lanyard">
        <div id="closeX" class="closeX">
          <h3>X</h3>
        </div>
        <div class="lanyardOneEnd">
          <div class="clickNeck">
            <img src="../../Pages/General/AddToCart/Clips/ClipNeck.png" alt="">
          </div>
          <div class="neckLeft">

          </div>
          <div class="neckRight">

          </div>
          <div class="sideLeft">

          </div>
          <div class="sideRight">

          </div>
          <div class="center">

          </div>
          <div class="standarClip">
              <img id="imgClipChange"  src="../../Pages/General/AddToCart/Clips/StandarClip.png" alt="">
          </div>
          <div class="attachmentClip">
            <img class="imgAttachmentClip" src="" alt="">
          </div>
          <div class="colour1">
            <input id="colour1"  type="color" value="#4d41f2">
          </div>
          <div  class="colour2">
            <input id="colour2" type="color" name="" value="#17bf44">
          </div>
          <div class="inputRange1">
            <input id="range1" type="range" name="" value="">
          </div>
        </div>
        <div class="measureLanyards">
          <div class="widthMeasure">

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<script type="text/javascript">

  const selectItemsAddToCart = document.querySelectorAll(".itemContainerAddToCart");
  var containerItems = document.getElementsByClassName('selectItemsAddToCart');
  for(let i=0; i < selectItemsAddToCart.length; i++) {
    selectItemsAddToCart[i].addEventListener("click", function(){
    //hideOthersSelect(i);
    containerItems[i].classList.toggle("showSelect");

    })

  }
  const  itemsForSelectAddToCart = document.querySelectorAll(".itemsForSelectAddToCart");
  function hideOthersSelect(numberSelected){
   for (var i = 0; i <  selectItemsAddToCart.length; i++) {
     containerItems[numberSelected].classList.remove("showSelect");

     if (i != numberSelected) {
    //   alert("Entramos " + i + " veces ");

     }


   }
  }

  var closeX = document.getElementById("closeX");
  var backgroundAddToCart = document.getElementsByClassName('backgroundAddToCart');
  closeX.addEventListener("click", function(){
    backgroundAddToCart[0].style.display = "none";
})

    var neckLeft = document.getElementsByClassName('neckLeft');
    var neckRight = document.getElementsByClassName('neckRight');
    var sideLeft = document.getElementsByClassName('sideLeft');
    var sideRight = document.getElementsByClassName('sideRight');
    var center = document.getElementsByClassName('center');
    var clickNeck = document.getElementsByClassName('clickNeck');
    var attachmentClip = document.getElementsByClassName('attachmentClip ');

    itemsForSelectAddToCart[7].addEventListener("click", function(){
      neckLeft[0].classList.add("neckLeft10mm")
      neckRight[0].classList.add("neckRight10mm")
      sideLeft[0].classList.add("sideLeft10mm")
      sideRight[0].classList.add("sideRight10mm")
      center[0].classList.add("center10mm")
      clickNeck[0].classList.add("clickNeck10mm")
      attachmentClip[0].classList.add("attachmentClip10mm")


      removeClasses("15mm");
      removeClasses("20mm");
      removeClasses("25mm");
      removeClasses("30mm");

      document.getElementById('widthChaged').innerHTML = "10mm";

    })
    itemsForSelectAddToCart[8].addEventListener("click", function(){
      neckLeft[0].classList.add("neckLeft15mm")
      neckRight[0].classList.add("neckRight15mm")
      sideLeft[0].classList.add("sideLeft15mm")
      sideRight[0].classList.add("sideRight15mm")
      center[0].classList.add("center15mm")
      clickNeck[0].classList.add("clickNeck15mm")
      attachmentClip[0].classList.add("attachmentClip15mm")

      removeClasses("10mm");
      removeClasses("20mm");
      removeClasses("25mm");
      removeClasses("30mm");

      document.getElementById('widthChaged').innerHTML = "15mm";

    })
    itemsForSelectAddToCart[9].addEventListener("click", function(){
      neckLeft[0].classList.add("neckLeft20mm")
      neckRight[0].classList.add("neckRight20mm")
      sideLeft[0].classList.add("sideLeft20mm")
      sideRight[0].classList.add("sideRight20mm")
      center[0].classList.add("center20mm")
      clickNeck[0].classList.add("clickNeck20mm")
      attachmentClip[0].classList.add("attachmentClip20mm")

      removeClasses("10mm");
      removeClasses("15mm");
      removeClasses("25mm");
      removeClasses("30mm");

      document.getElementById('widthChaged').innerHTML = "20mm";

    })
    itemsForSelectAddToCart[10].addEventListener("click", function(){
      neckLeft[0].classList.add("neckLeft25mm")
      neckRight[0].classList.add("neckRight25mm")
      sideLeft[0].classList.add("sideLeft25mm")
      sideRight[0].classList.add("sideRight25mm")
      center[0].classList.add("center25mm")
      clickNeck[0].classList.add("clickNeck25mm")
      attachmentClip[0].classList.add("attachmentClip25mm")

      removeClasses("10mm");
      removeClasses("15mm");
      removeClasses("20mm");
      removeClasses("30mm");

      document.getElementById('widthChaged').innerHTML = "25mm";

    })
    itemsForSelectAddToCart[11].addEventListener("click", function(){
      neckLeft[0].classList.add("neckLeft30mm")
      neckRight[0].classList.add("neckRight30mm")
      sideLeft[0].classList.add("sideLeft30mm")
      sideRight[0].classList.add("sideRight30mm")
      center[0].classList.add("center30mm")
      clickNeck[0].classList.add("clickNeck30mm")
      attachmentClip[0].classList.add("attachmentClip30mm")

      removeClasses("10mm");
      removeClasses("15mm");
      removeClasses("20mm");
      removeClasses("25mm");

      document.getElementById('widthChaged').innerHTML = "30mm";

    })

    function removeClasses(className){
    neckLeft[0].classList.remove('neckLeft' + className)
    neckRight[0].classList.remove('neckRight' + className)
    sideLeft[0].classList.remove('sideLeft' + className)
    sideRight[0].classList.remove('sideRight' + className)
    center[0].classList.remove('center' + className)
    clickNeck[0].classList.remove('clickNeck' + className)
    attachmentClip[0].classList.remove('attachmentClip' + className)
  }
  /*---------------------------------- Clips ---------------------------------*/

  itemsForSelectAddToCart[12].addEventListener("click", function(){
    var imgClip = document.getElementById("imgClipChange");

     imgClip.src = "../../Pages/General/AddToCart/Clips/clipsMetalicos/SlideClip.png";
     imgClip.style.left = "132px";
     imgClip.style.right = "0px";
     imgClip.style.top = "422px";
     imgClip.style.bottom = "20px";

     document.getElementById('clipChaged').innerHTML = "Slide clip";
  })
  itemsForSelectAddToCart[13].addEventListener("click", function(){
    var imgClip = document.getElementById("imgClipChange");

     imgClip.src ="../../Pages/General/AddToCart/Clips/clipsMetalicos/CrabHook.png";
     imgClip.style.left = "134px";
     imgClip.style.right = "0px";
     imgClip.style.top = "422px";
     imgClip.style.bottom = "20px";

     document.getElementById('clipChaged').innerHTML = "Crab Hook";
  })
  itemsForSelectAddToCart[14].addEventListener("click", function(){
    var imgClip = document.getElementById("imgClipChange");

      imgClip.src = "../../Pages/General/AddToCart/Clips/clipsMetalicos/SwivelClip.png";
      imgClip.style.left = "134px";
      imgClip.style.right = "0px";
      imgClip.style.top = "424px";
      imgClip.style.bottom = "20px";

      document.getElementById('clipChaged').innerHTML = "Swivel Clip";
  })
  itemsForSelectAddToCart[15].addEventListener("click", function(){
    var imgClip = document.getElementById("imgClipChange");

      imgClip.src = "../../Pages/General/AddToCart/Clips/clipsMetalicos/MetalJHook.png";
      imgClip.style.left = "134px";
      imgClip.style.right = "0px";
      imgClip.style.top = "424px";
      imgClip.style.bottom = "20px";

      document.getElementById('clipChaged').innerHTML = "Metal J Hook";
  })
  itemsForSelectAddToCart[16].addEventListener("click", function(){
    var imgClip = document.getElementById("imgClipChange");

      imgClip.src =   "../../Pages/General/AddToCart/Clips/clipsMetalicos/CrocodileClip.png";
      imgClip.style.left = "136px";
      imgClip.style.right = "0px";
      imgClip.style.top = "423px";
      imgClip.style.bottom = "20px";

      document.getElementById('clipChaged').innerHTML = "Crocodile Clip";
  })
  itemsForSelectAddToCart[17].addEventListener("click", function(){
    var imgClip = document.getElementById("imgClipChange");

      imgClip.src = "../../Pages/General/AddToCart/Clips/clipsMetalicos/StandardDogClip.png";
      imgClip.style.left = "133.5px";
      imgClip.style.right = "0px";
      imgClip.style.top = "422px";
      imgClip.style.bottom = "20px";

      document.getElementById('clipChaged').innerHTML = "Standard dog clip";
  })


  /*-------------------------------- Attachment ------------------------------*/
  var attachmentClip = document.getElementsByClassName('attachmentClip');
  var imgAttachmentClip = document.getElementsByClassName('imgAttachmentClip');

  itemsForSelectAddToCart[18].addEventListener("click", function(){
    attachmentClip[0].style.display = "none";
    imgAttachmentClip[0].setAttribute('src', '');
  });
  itemsForSelectAddToCart[19].addEventListener("click", function(){
    attachmentClip[0].style.display = "block";

    imgAttachmentClip[0].setAttribute('src', '../../Pages/General/AddToCart/Clips/ClipsPlasticos/QuickRelease.png');

  });
  itemsForSelectAddToCart[20].addEventListener("click", function(){
  });


/*------------------------- Colour and side select ---------------------------*/

  var colour2 = document.getElementsByClassName('colour2');
  itemsForSelectAddToCart[21].addEventListener("click", function(){
    colour2[0].style.display = "none";
  });
  itemsForSelectAddToCart[22].addEventListener("click", function(){
    colour2[0].style.display = "none";
  });
  itemsForSelectAddToCart[23].addEventListener("click", function(){

    colour2[0].style.display = "block";
  });
  itemsForSelectAddToCart[24].addEventListener("click", function(){
    colour2[0].style.display = "block";
  });
  itemsForSelectAddToCart[25].addEventListener("click", function(){
    colour2[0].style.display = "block";
  });


  /*------------------------------- Change Colours ----------------------------*/

  var colour1Value = document.getElementById("colour1");
  var colour2Value = document.getElementById("colour2");

  colour1Value.addEventListener('input', () =>{
    neckLeft[0].style.background = colour1Value.value;
    neckRight[0].style.background = colour1Value.value;
    sideLeft[0].style.background = colour1Value.value;
    sideRight[0].style.background = colour1Value.value;
    center[0].style.background = colour1Value.value;

  });

  colour2Value.addEventListener('input', () =>{
    neckLeft[0].style.background = colour1Value.value;
    neckLeft[0].style.background = "linear-gradient(-315deg, "+colour1Value.value+" 10%, "+colour2Value.value+" 85%)";
    neckRight[0].style.background = colour1Value.value;
    neckRight[0].style.background = "linear-gradient(315deg, "+colour1Value.value+" 10%, "+colour2Value.value+" 85%)";
    sideLeft[0].style.background = colour1Value.value;
    sideLeft[0].style.background = "linear-gradient(180deg, "+colour1Value.value+" 66%, "+colour2Value.value+" 90%)";
    sideRight[0].style.background = colour1Value.value;
    sideRight[0].style.background = "linear-gradient(180deg, "+colour1Value.value+" 66%, "+colour2Value.value+" 90%)";
    center[0].style.background = colour2Value.value;
  });
  var range1 = document.getElementById("range1");
  range1.addEventListener('input', () =>{
    alert("Hola");

  });



</script>

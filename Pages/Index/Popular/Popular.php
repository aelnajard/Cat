<style media="screen">
.Popular{
  position: relative;
  padding: 20px 50px;
}


.popularTitle{
  text-align: center;
  font-size: calc(1.3vw + 1.6em);
  font-weight: 400;
  color: rgb(51, 25, 155);
  text-shadow: 2px 2px 2px black;
  text-decoration: underline;
}
.containerPopular{
  position: relative;
  display: flex;
  margin: 30px 0 0 0;
}
.boxPopular{
  position: relative;
  width: 50%;
  padding: 20px;
}

.item-box-popular{
  position: relative;
  padding: 3px 0;
  width: 100%;
  display: flex;
  margin: 0px 0 10px 0;
  background-color: rgba(51, 25, 155,.2);
  transition: all .5s;
}

.item-box-popular:hover{
  background-color: rgba(51, 25, 155,1);
  transition: all .5s;
}

.item-box-popular:hover .item-popular h3{
  color: white;
  transition: all .5s;
}

.item-popular{
  position: relative;
  height: 100%;
  width: 100%;
  display: flex;
  width: 50%;
  min-width: 271px;
  cursor: pointer;
}

.item-popular h3{
  padding-top: 5px;
   padding-left: 20px;
   font-size: 1.4em;
   color: rgb(51, 25, 155);
   font-weight: 500;
   text-shadow: 0px 0px 1px black;
 }

 .btn-popular{
  position: relative;
  padding: 8px;
  background-color: rgb(143, 82, 180);
  color: white;
  text-align: center;
  margin: 30px;
  cursor: pointer;
  box-shadow: 2px 2px 2px black;
  
}
.btn-popular:hover{
  background-color: rgba(51, 25, 155,1);
  transition: all .5s;
}


.image-box-popular{
  position: relative;
  background-image: url("../../Pages/Index/Popular/Popular-box.jpg");
  height: 300px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  border: 1px solid black;
}

@media screen and (max-width: 1130px){

  .containerPopular{
    flex-direction:column-reverse;
  }
  .boxPopular{
    width: 80%;
    left: 50%;
    transform: translateX(-50%);

  }

}


@media screen and (max-width: 740px){
  .Popular{
    padding: 20px 5px;
  }
  .item-box-popular{
    flex-direction: column;
    justify-content: center;
  }
  .item-box-popular h3 {
    position: relative;
    left: 50%;
    transform: translateX(-50%);
  }
  .item-popular h3{
    padding-top: 0px;
  }
  .item-popular{
    width: 100%;
    padding: 2px;
  }
}


</style>

<section class="Popular">
<h1 class="popularTitle">Most Popular Lanyard</h1>
<div class="containerPopular">
  <div class="boxPopular">



    <div class="item-box-popular">
         <div class="item-popular">
           <h3 class="textPopular1"><strong>Meterial </strong></h3>
         </div>
         <div class="item-popular">
           <h3 class="textPopular2"> Dye-sublimation </h3>
         </div>
       </div>

       <div class="item-box-popular">
         <div class="item-popular">
           <h3 class="textPopular1"><strong>Type Lanyard </strong></h3>
         </div>
         <div class="item-popular">
           <h3 class="textPopular2"> Single Ended </h3>
         </div>
       </div>

       <div class="item-box-popular">
         <div class="item-popular">
           <h3 class="textPopular1"><strong>With </strong></h3>
         </div>
         <div class="item-popular">
           <h3 class="textPopular2"> 20mm </h3>
         </div>
       </div>

       <div class="item-box-popular">
         <div class="item-popular">
           <h3 class="textPopular1"><strong>Color </strong></h3>
         </div>
         <div class="item-popular">
           <h3 class="textPopular2"> Coverage </h3>
         </div>
       </div>


       <div id="btn-popular" class="btn-popular">
         <h2 >See this lanyard</h2>
      </div>

  </div>
  <div class="boxPopular">
    <div class="image-box-popular">

    </div>
  </div>
</div>
</section>

<script type="text/javascript">


document.getElementById('btn-popular').addEventListener('click', e => {
  document.getElementsByClassName("backgroundAddToCart")[0].style.display  = "block";
}
);


  /*  document.getElementById('btn-popular').addEventListener('mouseenter', e => {
      for (var i = 0; i < itemBoxPopular.length; i++) {
        itemBoxPopular[i].classList.add("itemPopular");
        textPopularWhite1[i].classList.add("textPopularWhite");
        textPopularWhite2[i].classList.add("textPopularWhite");

      }
    }
    );
    document.getElementById('btn-popular').addEventListener('mouseleave', e => {
          for (var i = 0; i < itemBoxPopular.length; i++) {
            itemBoxPopular[i].classList.remove("itemPopular");
            textPopularWhite1[i].classList.remove("textPopularWhite");
            textPopularWhite2[i].classList.remove("textPopularWhite");
          }

    }
  );*/


</script>

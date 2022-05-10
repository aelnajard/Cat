<style media="screen">
.categories{
 position: relative;
 height: auto;
 width: 100vw;
 display: flex;
 margin: 40px 0 20px 0;
}
.containerCategories{
  position: relative;
  height: auto;
  width: 77%;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content:center;
  padding: 0 60px;
}
.containerCategorie{
  position: relative;
  height: 320px;
  width: 230px;
  margin: 20px;
  cursor: pointer;
  border: 1px solid black;
  overflow: hidden;
  box-shadow: 0px 0px 900px #6754AD;
}
.containerCategorie img{
  position: absolute;
  top: 28px;
  height: 100%;
  left: 50%;
  transform: translateX(-50%);
  filter: drop-shadow(0px 0px 1px black);
  transition: all .6s;
}
.containerCategorie img:hover{
  left: 50%;
  height: 140%;
  transition: all .6s;
}
.textCategorie{
  position: absolute;
  height: 35px;
  width: 100%;
  background: rgba(69,79,177,1);
  z-index: 1;
  top: 0px;
  right: 0;
  box-shadow: 1px 1px 2px black;
}
.textCategorie h4{
  position: relative;
  top: 50%;
  height: 20px;
  margin-left: 20px;
  transform: translateY(-50%);
  text-align: center;
  color: white;
  text-shadow: 1px 1px 0 black;
}

.textCategorieVisit{
  position: absolute;
  height: 35px;
  width: 100%;
  background: rgba(69,79,177,1);
  z-index: 1;
  bottom: 0px;
  right: 0;
  box-shadow: 1px 1px 2px black;
}
.textCategorieVisit h4{
  position: relative;
  top: 50%;
  height: 20px;
  margin-left: 20px;
  transform: translateY(-50%);
  text-align: center;
  color: white;
  text-shadow: 1px 1px 0 black;
}
.categoriesTitle{
  text-align: center;
  font-size: calc(1.3vw + 1.6em);
  font-weight: 400;
  color: rgb(51, 25, 155);
  text-shadow: 2px 2px 2px black;
}


.btn-Categories{
 position: relative;
 padding: 8px;
 min-width: 280px;
 height: 40px;
 background-color: rgba(51, 25, 155,1);

 color: white;
 text-align: center;
 margin: 30px;
 cursor: pointer;
 font-size: 1.1em;
 box-shadow: 2px 2px 2px black;
}
.btn-Categories:hover{
  background-color: rgb(143, 82, 180);
 transition: all .5s;
}
@media only screen and (max-width:625px){
  .containerCategorie{
    position: relative;
    min-height: 10%;
  }

}
</style>
<h1 class="categoriesTitle">Lanyards</h1>

<section class="categories">

  <div class="containerCategories">
    <div class="containerCategorie">
      <div class="textCategorie">
        <div class="relative">
          <h4>Standard Flat Polyester</h4>
        </div>
      </div>
      <img src="../../Pages/Index/Categories/l1.png" alt="">
      <div class="textCategorieVisit">
        <div class="relative">
          <h4>See this lanyard</h4>
        </div>
      </div>
    </div>
    <div class="containerCategorie">
      <div class="textCategorie">
        <div class="relative">
          <h4>Tube Polyester</h4>
        </div>
      </div>
      <img src="../../Pages/Index/Categories/l2.png" alt="">
      <div class="textCategorieVisit">
        <div class="relative">
          <h4>See this lanyard</h4>
        </div>
      </div>
    </div>
    <div class="containerCategorie">
      <div class="textCategorie">
        <div class="relative">
          <h4>Natural Bamboo</h4>
        </div>
      </div>
      <img src="../../Pages/Index/Categories/l3.png" alt="">
      <div class="textCategorieVisit">
        <div class="relative">
          <h4>See this lanyard</h4>
        </div>
      </div>
    </div>
    <div class="containerCategorie">
      <div class="textCategorie">
        <div class="relative">
          <h4>Dyed Bamboo</h4>
        </div>
      </div>
      <img src="../../Pages/Index/Categories/l4.png" alt="">
      <div class="textCategorieVisit">
        <div class="relative">
          <h4>See this lanyard</h4>
        </div>
      </div>
    </div>
    <div class="containerCategorie">
      <div class="textCategorie">
        <div class="relative">
          <h4>Recycled PET</h4>
        </div>
      </div>
      <img src="../../Pages/Index/Categories/l5.png" alt="">
      <div class="textCategorieVisit">
        <div class="relative">
          <h4>See this lanyard</h4>
        </div>
      </div>
    </div>
    <div class="containerCategorie">
      <div class="textCategorie">
        <div class="relative">
          <h4>Dye-sublimation</h4>
        </div>
      </div>
      <img src="../../Pages/Index/Categories/l6.png" alt="">
      <div class="textCategorieVisit">
        <div class="relative">
          <h4>See this lanyard</h4>
        </div>
      </div>
    </div>

    <button class="btn-Categories" type="button" name="button">See our lanyards</button>





  </div>


</section>

<script type="text/javascript">

</script>

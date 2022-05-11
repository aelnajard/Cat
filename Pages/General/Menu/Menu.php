<style media="screen">
  .websiteMenu{
    position: sticky;
    top:0px;
    width:100vw;
    height: 90px;
    background: rgb(63,152,237);
    background: linear-gradient(90deg, rgba(63,152,237,0.9) 0%, rgba(69,79,177,0.9) 33%, rgba(143,82,180,0.9) 73%, rgba(196,56,149,0.9) 95%);
    z-index: 10;
  }
  .contentMenu{
    position: relative;
    display: flex;
    width: 97%;
    height: 100%;
    left: 50%;
    transform: translateX(-50%);
  }
  .itemMenu{
    position: relative;
    height: 100%;
  }
  .itemMenu:nth-child(1){
    display: flex;
    width: 22%;
    justify-content: flex-start;
  }
  .itemMenu:nth-child(2){
    display: flex;
    width: 56%;
    justify-content: center;
  }
  .itemMenu:nth-child(3){
    display: flex;
    width: 22%;
    justify-content:center;
  }
  .itemMenu:nth-child(4){
    display: none;
    position: absolute;
    right: 12px;
  }
  .itemMenu:nth-child(4) img{
    position: relative;
    height: 40%;
    top: 50%;
    transform: translateY(-50%);
  }
  .itemMenu:nth-child(4) img:hover{
    filter: drop-shadow(2px 2px 3px black);
  }
  .subitemMenuLogo {
    position: relative;
    height: 100%;
    width: 100%;
  }
  .subitemMenuLogo img{
    position: relative;
    height: 75%;
    top: 50%;
    transform: translateY(-50%);
  }
  .subitemMenu{
    position: relative;
    height: 100%;
    min-width: 50px;
    padding: 0px 12px;
  }
  .subitemMenu:hover h3{
    text-decoration: underline;
    transition: 0.5s;
  }
  .subitemMenu h3{
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    color: white;
    font-size: 1.4em;
    font-weight: 400;
    text-shadow: 2px 2px 2px black;
    cursor: pointer;
  }
  .subitemMenu img{
    position: relative;
    height: 40%;
    width: auto;
    top: 50%;
    transform: translateY(-50%);
    filter: drop-shadow(1px 1px 1px black);
    cursor: pointer;
  }
  .subitemMenu img:hover{
    filter: drop-shadow(2px 2px 1px black);
    transition: .5s;
  }

/*----------------------------------------------------------------------------*/
/*---------------------------------- Menu mobile -----------------------------*/
/*----------------------------------------------------------------------------*/

  .mobileMenu{
    position: absolute;
    width: 10vw;
    min-width: 300px;
    height: 100vw;
    background: rgba(69,79,177,1);
    display: none;
    right: 0px;
    top: 90px;
    z-index: 10;
    min-height: 450px;
  }
  .relativeMobileMenu{
    position: relative;
  }
  .containerMobileMenu{
    position: relative;
    padding: 6px 10px;
  }
  .itemMenuMobile{
    padding: 12px;
  }
  .itemMenuMobile:nth-child(odd) {
    background-color: rgb(87, 96, 179);
  }
  .itemMenuMobile:nth-child(odd):hover{
    background-color: rgb(92, 102, 191);
    transition: 0.5s;
  }
  .itemMenuMobile:nth-child(even):hover {
    background-color: rgb(75, 85, 191);
  }
  .itemMenuMobile h3{
    text-align: right;
    font-size: 1.4em;
    color: white;
    font-weight: 400;
    text-shadow: 2px 2px 2px black;
    cursor: pointer;
  }

  @media only screen and (max-width:1280px){
  .itemMenu:nth-child(2){
      display: none;
    }
  .itemMenu:nth-child(3){
      display: none;
    }
  .itemMenu:nth-child(4){
      display: block;
    }
  .mobileMenu{
      display: block;
    }

  }
</style>


<section class="websiteMenu">
<div class="contentMenu">

  <div class="itemMenu">
      <div class="subitemMenuLogo">
        <img src="../General/Menu/Logo.png" alt="">
      </div>
  </div>
  <div class="itemMenu">
      <div class="subitemMenu">
        <h3>Home</h3>
      </div>
      <div class="subitemMenu">
        <h3>Lanyards</h3>
      </div>
      <div class="subitemMenu">
        <h3>About</h3>
      </div>
      <div class="subitemMenu">
        <h3>Contact us</h3>
      </div>
      <div class="subitemMenu">
        <h3>My Lanyards</h3>
      </div>
  </div>
  <div class="itemMenu">
    <div class="subitemMenu">
      <img src="../General/Menu/Checkout.png" alt="">
    </div>
    <div class="subitemMenu">
      <h3>Login</h3>
    </div>
  </div>
  <div class="itemMenu">
    <img id="openMenu" class="IconMenu" src="../General/Menu/Menu.png" alt="">
    <img id="closeMenu" class="iconClose" src="../General/Menu/close.png" alt="">
  </div>
</div>
</section>

<section id="mobileMenu"class="mobileMenu">
  <div class="relativeMobileMenu">
    <div class="containerMobileMenu">
      <div class="itemMenuMobile">
        <h3>Home</h3>
      </div>
      <div class="itemMenuMobile">
        <h3>Lanyards</h3>
      </div>
      <div class="itemMenuMobile">
        <h3>About</h3>
      </div>
      <div class="itemMenuMobile">
        <h3>Contact us</h3>
      </div>
      <div class="itemMenuMobile">
        <h3>My Lanyards</h3>
      </div>
      <div class="itemMenuMobile">
        <h3>Shopping cart</h3>
      </div>
      <div class="itemMenuMobile">
        <h3>Login</h3>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">

  var openMenu = document.getElementById("openMenu");
  var closeMenu = document.getElementById("closeMenu");
  var mobileMenu = document.getElementById("mobileMenu");



  openMenu.addEventListener("click",function(){
    openMenu.style.display = "none";
    closeMenu.style.display = "block";
    mobileMenu.style.display = "block";
  })
  closeMenu.addEventListener("click",function(){
    openMenu.style.display = "block";
    closeMenu.style.display = "none";
    mobileMenu.style.display = "none";
   })
   closeMenu.style.display = "none";
   mobileMenu.style.display = "none";

</script>

<style media="screen">
body{
  position: relative;
  width: 100vw;
  overflow-x: hidden;
}
nav{
  position: sticky;
  top: 0px;
  display: flex;
  height: 90px;
  width: 100%;
  background: rgb(63,152,237);
  background: linear-gradient(90deg, rgba(63,152,237,0.9) 0%, rgba(69,79,177,0.9) 33%, rgba(143,82,180,0.9) 73%, rgba(196,56,149,0.9) 95%);
  z-index: 3;
  box-shadow: 2px 2px 4px black;
}


.linksContainer{
  position: relative;
  flex-grow: 1;
  display: flex;
  justify-content: center;
  height: 100%;
}
.logoContainer{
  position: relative;
  height: 100%;
  width: 100%;
  left: 0px;

}
.linksContainer img{
  position: relative;
  height: 80%;
  padding-left: 20px;
  top: 50%;
  transform: translateY(-50%);
  z-index: 1;
}
.itemsContainer{
  position: relative;
  display: flex;
  justify-content: flex-end;
  height: 100%;
  width: 100%;
}
.link{
  position: relative;
  height: 100%;
  flex-grow: 1;
  padding: 0 20px;
}
.link img {
  height: 30px;
  z-index: 1;
}
.link img:hover {
  filter: drop-shadow(2px  2px 1px black);
}
.link h3{
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
  z-index: 1;
  padding: 5px;
  border: 2px solid transparent;
  text-shadow: 2px 2px 2px black;
  font-size: 1.35em;

}

.link h3:hover{
/*  color: #C43895;
  text-shadow: 1px 1px  0px red;*/
  border: 2px solid white;
  transition: border .5s;
}
.menuMobile{
  display: none;
}
.linkMenuMenu h3, .linkMobile h3{
  display: none;
}
.relative{
  position: relative;
  height: 100%;
  width: 100%;
}
.logoMenu{
  filter: drop-shadow(1px 1px 0px black);
}

@media screen and (max-width: 1250px) {
  .menuMobile{
    display: flex;
    justify-content: flex-end;
  }
  .iconClose{
    display: none;
  }

  .menuWeb{
    display: none;
  }
  .menuMobileContainer{
    max-width: 300px;

    position: absolute;
    display: flex;
    top: -100%;
    right: 0%;
    width: 50vw;
    min-height: calc(341px + 90px);
    height:calc(100% -  90px );
    background: rgb(63,152,237);
    background: linear-gradient(180deg, rgba(63,152,237,0.9) 0%, rgba(69,79,177,0.9) 33%, rgba(143,82,180,0.9) 73%, rgba(196,56,149,0.9) 95%);
    z-index: 2;
  }
  .containerMenuMenu{
    position: sticky;
    display: flex;
    top: 90px;
    height: 70px;
    width: 100%;
  }
  .containerlinks{
    position: sticky;
    top: calc(90px);
    z-index: 1;
  }
  .containerLogShopping{
    display: none;
    position: sticky;
    top: calc(50% + 60px);
    transform: translateY(-50%);
  }
  .linkMobile{
    position: relative;
    display: block;
    height: 43px;
    width: 100%;
    background-color: rgba(69, 79, 177,0.7);
    margin: 5px 0px;
  }
  .linkMobile:hover, .linkMobile:active{
    background-color: rgba(196, 56, 149,0.9);
    transition: all .3s;
  }
  .linkMobile h3{
    display: block;
    position: relative;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);
    color: white;
  }
  .linkMobile:hover h3, .linkMobile:active h3{
    color:white;
    transition: all .3s;
  }
}
@media screen and (max-width: 550px) {
  .menuMobileContainer{
    width: 100vw;
  }

}
@media screen and (max-height: 416px) {
  .linkMobile{
    height: 28px;
  }
}

</style>

<nav>

  <?php include("../General/Login/Login.php"); ?>
  <?php include("../General/Register/Register.php"); ?>
  <?php include("../General/CodeRegister/CodeRegister.php"); ?>

<div class="linksContainer">

  <div class="logoContainer">
    <a href="../../Pages/Index/index.php">
    <img class="logoMenu" src="../General/Menu/Logo.png" alt="">
  </a>

  </div>
</div>
<div  class="linksContainer menuWeb">
  <a href="../../Pages/Index/index.php">
    <div class="link"><h3>Home</h3></div>
  </a>
  <a href="../../Pages/Lanyards/Lanyard.php">
    <div class="link"><h3>Lanyards</h3></div>
  </a>

  <a href="../../Pages/About/About.php">
    <div class="link borderRight"><h3>About</h3></div>
  </a>
  <a href="#">
    <div class="link borderRight"><h3>Contact us</h3></div>
  </a>
  <a href="#">
    <div class="link borderRight"><h3>My Lanyards</h3></div>
  </a>
</div>

<div class="linksContainer menuWeb">
  <div class="itemsContainer">
    <a href="#">
      <div class="link borderRight">
        <img src="../General/Menu/Checkout.png" alt="">
      </div>
    </a>
    <a href="#">
      <div  id="openLogin1" class="link borderRight"><h3>Login</h3></div>
    </a>
  </div>
</div>

<div class="linksContainer menuMobile">
  <a  href="#">
    <div id="openMenuMobile" class="link borderRight">
      <img class="IconMenu" src="../General/Menu/Menu.png" alt="">
      <img class="iconClose" src="../General/Menu/close.png" alt="">
    </div>
  </a>
</div>
</nav>
<div class="menuMobileContainer">
  <div class="relative">

  <div class="containerlinks">
    <a href="" class="linkMobile">
      <h3>Home</h3>
    </a>
    <a href="" class="linkMobile">
      <h3>Lanyard</h3>
    </a>
    <a href="" class="linkMobile">
      <h3>About</h3>
    </a>
    <a href="" class="linkMobile">
      <h3>Contact us</h3>
    </a>
    <a href="" class="linkMobile">
      <h3>My Lanyards</h3>
    </a>
    <a id="openLogin2" class="linkMobile">
      <h3>Login</h3>
    </a>
    <a href="" class="linkMobile">
      <h3>Shopping cart</h3>
    </a>
  </div>

  </div>
</div>

<script type="text/javascript">



//open and close menu for mobily

var openMenuMobile = document.getElementById("openMenuMobile");


openMenuMobile.addEventListener("click",function(){
  var menuMobileContainer = document.getElementsByClassName("menuMobileContainer")[0].style;
  var iconClose = document.getElementsByClassName("iconClose")[0].style;
  var IconMenu = document.getElementsByClassName("IconMenu")[0].style;
  if (menuMobileContainer.top== "90px") {
      menuMobileContainer.top  = "-100%";
      menuMobileContainer.transition  = "top .6s";

      iconClose.display = "none";
      IconMenu.display = "block";
  }
  else {
       menuMobileContainer.top  = "90px";
       menuMobileContainer.transition  = "top 0.9s";

       iconClose.display = "block";
       IconMenu.display = "none";
  }

});


/*
var containerlinks = document.getElementsByClassName("containerlinks")[0].style;
var containerLogShopping = document.getElementsByClassName("containerLogShopping")[0].style;

*/




var bgLogin = document.getElementsByClassName("bgLogin")[0].style;
var openLogin1 = document.getElementById("openLogin1");
openLogin1.addEventListener("click",function(){
  bgLogin.display = "block";
});

var openLogin2 = document.getElementById("openLogin2");
openLogin2.addEventListener("click",function(){
  bgLogin.display = "block";
  bgRegister.display = "none";
});

var openRegister = document.getElementById("openRegister");
var bgLogin = document.getElementsByClassName("bgLogin")[0].style;
var bgRegister = document.getElementsByClassName("bgRegister")[0].style;
var bgCodeRegister = document.getElementsByClassName("bgCodeRegister")[0].style;
openRegister.addEventListener("click",function(){
  bgLogin.display = "none";
  bgRegister.display = "block";
});

var openLogin3 = document.getElementById("openLogin3");
openLogin3.addEventListener("click",function(){
  bgLogin.display = "block";
  bgRegister.display = "none";
});
var number = 90;
var register = document.getElementById("register");
register.addEventListener("click",function(){
  bgCodeRegister.display = "block";
  bgRegister.display = "none";
  number = 90;
  countCode();
  sendCodeRegister();
});

  function countCode(){
    setInterval(function() {
      number = number - 1;
      if (number >= 0) {
        document.getElementById("codeRegisterNumber").innerHTML = "This code will expire in " +number+ " seconds" ;
      }
      else {
        if (bgCodeRegister.display!="none"){
          document.getElementById("codeRegisterNumber").innerHTML = "This code will expire in 90 seconds" ;
          bgCodeRegister.display = "none";
          bgRegister.display = "block";
        }
      }
    }, 1500);
}

  function sendCodeRegister(){

    $.ajax("../../App/Controller/SendEmail.php",{
            type: 'post',
            async: false,
            data: {
              type: "sendCodeRegister",
              nameRegister:  document.getElementById("nameRegister").value,
              emailRegister: document.getElementById("emailRegister").value,
              passwordRegister: document.getElementById("passwordRegister").value
            },
            success: function(data){
          //    alert(data);
            }
        }
    )
}

</script>
<script type="text/javascript">

</script>
<script src="../Libraries/jquery-3.5.0.min.js"></script>

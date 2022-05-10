
<style media="screen">
  .bgLogin{
    display: none;
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100vh;
    width: 100vw;
    background-color: rgba(10,10,10,.82);
    z-index: 2;
  }
  .containerLogin{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    min-height: 400px;
    min-width: 300px;
    height: 200px;
    width: 400px;
    border-radius: 5px;
  }
  .headLogin{
    position: relative;
    height: 80px;
    width: 100%;
    background: rgb(63,152,237);
    background: linear-gradient(-90deg, rgba(63,152,237,1) 0%, rgba(69,79,177,1) 33%, rgba(143,82,180,1) 73%, rgba(196,56,149,1) 95%);
  }
  .headLogin h3{
    position: relative;
    font-size: 1.7em;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);
    color: white;
  }
  .headLogin h2{
    position: absolute;
    display: block;
    top: 50%;
    transform: translateY(-50%);
    right: 20px;
    color: white;
    font-size: 1.4em;
    cursor: pointer;
    z-index: 2;
  }
  .bodyLogin{
    position: relative;
    height: calc(100% - 80px);
    width: 100%;
    background-color: #e0e0e0;
  }
  .inputLogin{
    position: relative;
    width: 80%;
    padding: 10px 0px;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .inputLogin input{
    position: relative;
    width: 100%;
    height: 30px;
    margin: 10px 0;
    border: 1px solid black;
    padding-left: 10px;
    font-size: 1.2em;
  }
  .inputLogin label{
    font-size: 1.2em;
  }
  .bodyLogin button{
    position: relative;
    height: 45px;
    width: 50%;
    top: 40px;
    left: 50%;
    transform: translateX( -50%);
    background: #C43895;
    cursor: pointer;
    color: white;
    font-size: 1.3em;
  }
  .bodyLogin a{
    position: relative;
    display: block;
    height: 45px;
    width: 50%;
    top: 40px;
    left: 50%;
    transform: translateX( -50%);
    cursor: pointer;
    color: black;
    margin: 10px  0;
    font-size: 1.3em;
    text-align: center;
  }
  @media screen and (max-width: 470px) {
    .containerLogin{
      width: 290px
    }
  }
</style>

<section class="bgLogin">
  <div class="relative">
    <div class="containerLogin">
      <div class="headLogin">
        <h2 id="closeLogin">X</h2>
        <h3>Login</h3>
      </div>
      <div class="bodyLogin">
        <div class="inputLogin">
          <label for="">Email</label>
          <input type="text" name="" value=""><br>
          <label for="">Password</label>
          <input type="password" name="" value="">
        </div>
        <button type="button" name="button">Enter</button>
        <a id="openRegister" >Create an Account</a>
      </div>
    </div>
  </div>
</section>




<script type="text/javascript">

var closeLogin = document.getElementById("closeLogin");
var bgLogin = document.getElementsByClassName("bgLogin")[0].style;
closeLogin.addEventListener("click",function(){
  bgLogin.display = "none";
});








  //bgRegister
</script>

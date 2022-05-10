
<style media="screen">
  .bgRegister{
    display: none;
    position: absolute;
    top: 0px;
    left: 0px;
    height: 100vh;
    width: 100vw;
    background-color: rgba(10,10,10,.82);
    z-index: 6;
  }
  .containerRegister{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    min-height: 400px;
    min-width: 300px;
    height: 480px;
    width: 400px;
    border-radius: 5px;
  }
  .headRegister{
    position: relative;
    height: 80px;
    width: 100%;
    background: rgb(63,152,237);
    background: linear-gradient(-90deg, rgba(63,152,237,1) 0%, rgba(69,79,177,1) 33%, rgba(143,82,180,1) 73%, rgba(196,56,149,1) 95%);
  }
  .headRegister h3{
    position: relative;
    font-size: 1.7em;
    text-align: center;
    top: 50%;
    transform: translateY(-50%);
    color: white;
  }
  .headRegister h2{
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
  .bodyRegister{
    position: relative;
    height: calc(100% - 80px);
    width: 100%;
    background-color: #e0e0e0;
  }
  .inputRegister{
    position: relative;
    width: 80%;
    padding: 10px 0px;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .inputRegister input{
    position: relative;
    width: 100%;
    height: 30px;
    margin: 10px 0;
    border: 1px solid black;
    padding-left: 10px;
    font-size: 1.2em;
  }
  .inputRegister label{
    font-size: 1.2em;
  }
  .bodyRegister button{
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
  .bodyRegister a{
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
    .containerRegister{
      width: 290px
    }
  }
</style>


<section class="bgRegister">
  <div class="relative">
    <div class="containerRegister">
      <div class="headRegister">
        <h2 id="closeRegister">X</h2>
        <h3>Register</h3>
      </div>
      <div class="bodyRegister">
        <div class="inputRegister">
          <label for="nameRegister">Name</label>
          <input id="nameRegister" type="text" name="" value=""><br>
          <label for="emailRegister">Email</label>
          <input id="emailRegister" type="text" name="" value=""><br>
          <label for="passwordRegister">Password</label>
          <input id="passwordRegister" type="password" name="" value="">
        </div>
        <button id="register" type="button" name="button">Enter</button>
        <a id="openLogin3" >Login</a>


      </div>
    </div>
  </div>
</section>




<script type="text/javascript">


var closeRegister = document.getElementById("closeRegister");
var bgRegister = document.getElementsByClassName("bgRegister")[0].style;
closeRegister.addEventListener("click",function(){
  bgRegister.display = "none";
});







  //register
</script>

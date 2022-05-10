<style media="screen">
  .contactUs{
    position: relative;
    padding: 60px 80px;
    background: rgb(250,250,250);
    background: linear-gradient(0deg, rgba(69,79,177, .06) 96%, rgba(256,256,256,0.002) 100%);
  }
  .contactUsTitle{
    text-align: center;
    font-size: calc(1.3vw + 1.6em);
    font-weight: 400;
    color: rgb(51, 25, 155);
    text-shadow: 2px 2px 2px black;
    text-decoration: underline;
  }
  .contactUsContainer{
    position: relative;
    display: flex;
    margin-top : 60px;
  }

  .contactUsBox{
    position: relative;
    width: 50%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    padding: 10px;
  }

  .inputContactus{
    position: relative;
    display: flex;
    width: 100%;
    padding: 10px  0;
    justify-content: center;

  }
  .inputContactus label{
    font-size: 1.1em;
    margin:  5px 0;
  }
  .inputContactus input{
    height: 30px;
    width: 200px;
    margin: 5px 0;

  }
  .inputContactusContainer{
    position: relative;
    width: 50%;

  }

  @media screen and (max-width: 930px){
    .inputContactus{
      flex-direction: column;
    }
    .inputContactusContainer{
      left: 50%;
      transform: translateX(-50%);
    }
  }


  #map {
    height: 300px;
    z-index: 1;
   }



</style>
<section class="contactUs">
  <h1 class="contactUsTitle">Contact us</h1>
  <div class="contactUsContainer">
    <div class="contactUsBox">

      <div class="inputContactus">
        <div class="inputContactusContainer">
          <label for="">Name</label>
        </div>
        <div class="inputContactusContainer">
          <input type="text" name="" value="">
        </div>
      </div>

      <div class="inputContactus">
        <div class="inputContactusContainer">
          <label for="">Email</label>
        </div>
        <div class="inputContactusContainer">
          <input type="text" name="" value="">
        </div>
      </div>

      <div class="inputContactus">
        <div class="inputContactusContainer">
          <label for="">Phone</label>
        </div>
        <div class="inputContactusContainer">
          <input type="text" name="" value="">
        </div>
      </div>

      <div class="inputContactus">
        <div class="inputContactusContainer">
          <label for="">Tell us what you need</label>
        </div>
        <div class="inputContactusContainer">
          <input type="text" name="" value="">
        </div>
      </div>

    </div>
    <div class="contactUsBox">
      <div id="map"></div>
    </div>
  </div>

</section>

<script type="text/javascript">
  var map = L.map('map').setView([50.859644, -1.320230], 10);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token'
}).addTo(map);


var marker = L.marker([50.859644, -1.320230]).addTo(map);
</script>

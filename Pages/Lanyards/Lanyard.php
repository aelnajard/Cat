<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">

    <title></title>
    <link rel="stylesheet" href="../../Pages/General/CSS/index.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  </head>

  <body>

    <?php include("../../Pages/General/Menu/Menu.php"); ?>

    <style media="screen">
    .Lanyard{
      position: relative;
      width: 100vw;
      display: flex;
    }
    .filter{
      position: relative;
      flex-grow: 2;
      min-width: 320px;
      box-shadow: 2px 0px 3px black;
    }
    .content{
      position: relative;
      flex-grow: 7;
    }
    </style>


    <section class="Lanyard">

    <?php include("../../Pages/Lanyards/Filter/Filter.php"); ?>
    <?php include("../../Pages/Lanyards/Content/Content.php"); ?>



    </section>

    <?php include("../../Pages/General/Footer/Footer.php"); ?>

  </body>
</html>

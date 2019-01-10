<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">

</head>

<body>
 <?php include 'navbar.php'; ?>
<div class="py-2" style="">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"> </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"> </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"> </li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-moon.svg">
              <div class="carousel-caption">
                <h5 class="m-0">Carousel</h5>
                <p>with indicators</p>
              </div>
            </div>
            <div class="carousel-item "> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-dark.svg">
              <div class="carousel-caption">
                <h5 class="m-0">Carousel</h5>
                <p>with indicators</p>
              </div>
            </div>
            <div class="carousel-item"> <img class="d-block img-fluid w-100" src="https://static.pingendo.com/cover-bubble-light.svg">
              <div class="carousel-caption">
                <h5 class="m-0">Carousel</h5>
                <p>with indicators</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="mb-3 text-center">สื่อการเรียนรู้</h1>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><i class="fa text-primary mr-2 fa-arrow-right"></i><a href="watch.php">การดูแลผู้สูงอายุ</a> </li>
          <li class="list-group-item"><i class="fa text-primary mr-2 fa-arrow-right"></i>Cras justo odio</li>
          <li class="list-group-item"><i class="fa text-primary mr-2 fa-arrow-right"></i> Dapibus ac facilisis in</li>
          <li class="list-group-item"><i class="fa text-primary mr-2 fa-arrow-right"></i> Morbi leo risus</li>
          <li class="list-group-item"><i class="fa text-primary mr-2 fa-arrow-right"></i> Porta ac consectetur ac</li>
          <li class="list-group-item"><i class="fa text-primary mr-2 fa-arrow-right"></i> Vestibulum at eros</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p class="mb-0">© 2014-2018 Pingendo. All rights reserved</p>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
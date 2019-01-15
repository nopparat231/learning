<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<?php include 'conn.php'; ?>
<?php 
$choice_id = $_GET['choice_id'];
$user_id = $_GET['user_id'];

$query_watch = "SELECT * FROM choice where choice_id = $choice_id ";
$watch = mysqli_query($con,$query_watch) or die(mysqli_error());
$row_watch = mysqli_fetch_assoc($watch);
$totalRows_watch = mysqli_num_rows($watch);
?>




<body>
  <?php include 'navbar.php'; ?>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center"><b><?php echo $row_watch['choice_name']; ?></b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="embed-responsive embed-responsive-16by9">

            <?php if ($totalRows_watch > 0) {?>

              <?php
              $url = $row_watch['video'];
              preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
              $id = $matches[1];
              $width = '800px';
              $height = '450px';
              ?>

              <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
                src="https://www.youtube.com/embed/<?php echo $id ?>??controls=0&rel=0&showinfo=0&color=white&iv_load_policy=3"
                frameborder="0" allowfullscreen></iframe> 



              <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="py-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <a class="btn btn-secondary" href="choice.php?choice_id=<?php echo $row_watch['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&af=af">ทำแบบทดสอบหลังเรียน</a></div>
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
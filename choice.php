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

$sql="SELECT * From testing where choice_id = $choice_id order by rand() limit 5";
$db_query=mysqli_query($con,$sql) or die(mysqli_error());
$result=mysqli_fetch_array($db_query)
?>

<body>
  <?php include 'navbar.php'; ?>
  <?php //include 'banner.php'; ?>
  <div class="container">

    <div class="py-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"><b>Heading 1</b></h1>
          </div>
        </div>
      </div>
    </div>
    <form name="form1" method="get" action="choice_check.php">
      <div class="py-3" style="">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">

             <?php

             $i=0;
             while($result=mysqli_fetch_array($db_query))
             {
              $i++;

              $arrid = "id[$i]";
              $re = $result['answer'];
              $arran = "answer[$re]";

              ?>

              <input name="id<?php echo $i;?>" type="hidden" value="<?php echo $result['id']; ?>">
              <?php echo $i." ).   ".$result["question"];?>
              <input type="hidden" name="line" value="<?=$i;?>">

              <ol>
                <input type="radio" name="c<?php echo $i;?>" value="1" checked>
                <?php echo $result["c1"];?><br>
                <input type="radio" name="c<?php echo $i;?>" value="2">
                <?php echo $result["c2"];?><br>
                <input type="radio" name="c<?php echo $i;?>" value="3">
                <?php echo $result["c3"];?><br>
                <input type="radio" name="c<?php echo $i;?>" value="4">
                <?php echo $result["c4"];?><br>

                <input name="answer<?php echo $i;?>" type="hidden" value="<?php echo $result['answer'];?>">
              </ol>


              <hr>

            <?php } ?>

          </div>
        </div>
      </div>


      <div class="py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <button class="btn btn-secondary" type="submit">ส่งคำตอบ</button>
              
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
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>

  </html>
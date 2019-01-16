<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">

</head>

<body>
  <?php include 'conn.php'; ?>
  <?php include 'navbar.php'; ?>
  <?php include 'banner.php'; ?>

  <?php 


  $query_choice = "SELECT * FROM choice ORDER BY choice_id";
  $choice = mysqli_query($con,$query_choice) or die(mysqli_error());
  $row_choice = mysqli_fetch_assoc($choice);
  $totalRows_choice = mysqli_num_rows($choice);
  ?>


  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="mb-3 text-center">สื่อการเรียนรู้</h1>
          <ul class="list-group list-group-flush">
            <?php if ($totalRows_choice > 0) {?>
              <?php do { ?>

                <?php 
                $c =  $row_choice['choice_id']; 
                $user_id = $_SESSION['UserID'];
                $sql3="SELECT * From user_learning WHERE user_id = $user_id AND choice_id = $c";
                $db_query3=mysqli_query($con,$sql3) or die(mysqli_error());
                $result3=mysqli_fetch_array($db_query3);
                $totalRows_query3 = mysqli_num_rows($db_query3);

                ?>

                <?php if ($totalRows_query3 > 0){ ?>

                  <?php if ($result3['user_learning_af'] == 'ยังไม่ทำ'){ ?>
                     <li class="list-group-item">
                      <h3>
                        <i class="fa text-primary mr-2 fa-arrow-right"></i>
                        <a href="choice.php?choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff"><?php echo $row_choice['choice_name']; ?></a> <b>ทำแบบทดสอบก่อนเรียนแล้ว</b>
                      </h3>
                    </li>
                  <?php }else{ ?>
                    <li class="list-group-item">
                      <h3>
                        <i class="fa text-primary mr-2 fa-arrow-right"></i>
                        <a href="choice.php?choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff"><?php echo $row_choice['choice_name']; ?></a> <b>ทำแบบทดสอบแล้ว</b>
                      </h3>
                    </li>

                  <?php  } ?>
                  

                <?php }else{ ?>

                 <li class="list-group-item">
                  <h3>
                    <i class="fa text-primary mr-2 fa-arrow-right"></i>
                    <a href="choice.php?choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&bff=bff"><?php echo $row_choice['choice_name']; ?></a> <b>ยังไม่ทำแบบทดสอบ</b>
                  </h3>
                </li>
              <?php } ?>



            <?php } while ($row_choice = mysqli_fetch_assoc($choice)); ?>
          <?php }
          mysqli_free_result($choice);
          ?>

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
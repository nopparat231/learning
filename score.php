<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>


<?php 


$query_learning = "SELECT * FROM user_learning ORDER BY user_learning_id";
$learning = mysqli_query($con,$query_learning) or die(mysqli_error());
$row_learning = mysqli_fetch_assoc($learning);
$totalRows_learning = mysqli_num_rows($learning);
?>


<body>
 <?php include 'navbar.php'; ?>
 <div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center" contenteditable="true">คะแนนผู้ใช้งาน</h1>
      </div>
    </div>
  </div>
</div>
<div class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive text-center">
          <table class="table table-striped table-borderless">
            <thead>
              <tr class="text-center">
                <th scope="col">ชื่อ</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">บทเรียน</th>
                <th scope="col">คะแนนก่อนเรียน</th>
                <th scope="col" contenteditable="true">คะแนนหลังเรียน</th>
              </tr>
            </thead>
            <tbody>
            <?php if ($totalRows_learning > 0) {?>

              <?php do { ?>

               
                  <tr class="text-center">
                    <th scope="row" class="text-center">1</th>
                    <td><?php echo $row_learning['Firstname']; ?></td>
                    <td><?php echo $row_learning['Lastname']; ?></td>
                    <td><?php echo $row_learning['choice_name']; ?></td>
                    <td><?php echo $row_learning['user_learning_bf']; ?></td>
                    <td><?php echo $row_learning['user_learning_af']; ?></td>
                  </tr>

                <?php } while ($row_learning = mysqli_fetch_assoc($learning)); ?>
              <?php } mysqli_free_result($learning);?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12"></div>
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
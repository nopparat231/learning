<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>
<?php include 'navbar.php'; ?>
<?php include 'conn.php'; ?>
<?php 

$user_id = $_GET['user_id'];

$query_learning = "SELECT * FROM choice as c , user as u, user_learning as l where l.user_id = '$user_id' and l.user_learning_status <> 1 and l.choice_id = c.choice_id and l.user_id = u.id order by l.user_learning_af ASC" ;
$learning = mysqli_query($con,$query_learning) or die(mysqli_error());
$row_learning = mysqli_fetch_assoc($learning);
$totalRows_learning = mysqli_num_rows($learning);


?>


<body>

 <div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">คะแนนผู้ใช้งาน</h1>
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
           <?php if ($totalRows_learning > 0) {?>

            <thead>
              <tr class="text-center">
                <th scope="col">ลำดับ</th>
                <th scope="col">ชื่อ</th>
                <th scope="col">นามสกุล</th>
                <th scope="col">บทเรียน</th>
                <th scope="col">คะแนนก่อนเรียน</th>
                <th scope="col">คะแนนหลังเรียน</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $i = 1 ;
              do { ?>


                <tr class="text-center">
                  <td><?php echo $i ?></td>
                  <td><?php echo $row_learning['Firstname']; ?></td>
                  <td><?php echo $row_learning['Lastname']; ?></td>
                  <td><?php echo $row_learning['choice_name']; ?></td>
                  <td><?php echo $row_learning['user_learning_bf']; ?></td>
                  <td><?php echo $row_learning['user_learning_af']; ?></td>
                </tr>

                <?php 
                $i += 1;
              } while ($row_learning = mysqli_fetch_assoc($learning)); ?>

            </tbody>
          </table>
        <?php }else {
          echo "<h3> ยังไม่มีคะแนน </h3>";
        }

        mysqli_free_result($learning);?>

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
<?php include 'footer.php'; ?>
</body>

</html>
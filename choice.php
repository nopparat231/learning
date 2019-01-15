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

$sql="SELECT * From testing WHERE choice_id = $choice_id order by rand() limit 5";
$db_query=mysqli_query($con,$sql) or die(mysqli_error());
$result=mysqli_fetch_array($db_query);

$sqln="SELECT * From choice WHERE choice_id = $choice_id ";
$db_queryN=mysqli_query($con,$sqln) or die(mysqli_error());
$resultN=mysqli_fetch_array($db_queryN);
?>

<body>
  <?php include 'navbar.php'; ?>
  <?php //include 'banner.php'; ?>
  <div class="container">

    <div class="py-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"><b>แบบทดสอบก่อนเรียน <?php echo $resultN['choice_name']; ?></b></h1>
          </div>
        </div>
      </div>
    </div>
    <form name="form1" method="get" action="">
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

      <input type="hidden" name="choice_id" value="<?php echo $choice_id ?>">

      <input type="hidden" name="user_id" value="<?php echo $user_id ?>">

      <?php 

      $sql3="SELECT * From user_learning WHERE user_id = $user_id AND user_learning_af <> 'NO'";
      $db_query3=mysqli_query($con,$sql3) or die(mysqli_error());
      $result3=mysqli_fetch_array($db_query3);
      $totalRows_query3 = mysqli_num_rows($db_query3);

      ?>

      <?php if ($totalRows_query3 > 0){ ?>
        <input type="hidden" name="af" value="af" />
      <?php }else{ ?>
       <input type="hidden" name="bf" value="bf" />
     <?php } ?>


     <div class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <button class="btn btn-secondary" type="submit" >ส่งคำตอบ</button>

          </div>
        </div>
      </div>

      <?php if (isset($_GET['bf'])) {
        cal();
      }elseif (isset($_GET['af'])) {
        af();
      } ?>

      <!-- คำนวนคะแนนก่อนเรียน -->
      <?php

      function cal(){

        $choice_id = $_GET['choice_id'];
        $user_id = $_GET['user_id'];

        $score =0;


        $line = $_GET['line']+1;
        for ($i=1; $i < $line; $i++) { 


          if($_GET["c$i"] == $_GET["answer$i"])
          {
            $score=$score+1;
          }
        }
        include 'conn.php';

        $user_learning_af = 'NO';
        $sql1 = "INSERT INTO user_learning VALUES(null, '$choice_id', '$user_id', '$score','$user_learning_af')";

        $result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error());

//ปิดการเชื่อมต่อ database
        mysqli_close($con);
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
        ?>

        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

        <script type="text/javascript">

          var $ws = 'watch.php?choice_id=<?php echo $choice_id ?>&user_id=<?php echo $user_id ?>';

          setTimeout(function () { 
            swal({
              title: "คะแนนก่อนเรียน <?php echo $score ?> คะแนน",

              type: "success",

              confirmButtonText: "รับชมสื่อการเรียนรู้"
            },
            function(isConfirm){
              if (isConfirm) {
                window.location.href = $ws;
              }
            }); }, 50);

          </script>
        <?php } ?>


        <!-- คำนวนคะแนนหลังเรียน -->
        <?php

        function af(){

          $choice_id = $_GET['choice_id'];
          $user_id = $_GET['user_id'];
          $user_learning_af = $_GET['af'];
          $score =0;


          $line = $_GET['line']+1;
          for ($i=1; $i < $line; $i++) { 


            if($_GET["c$i"] == $_GET["answer$i"])
            {
              $score=$score+1;
            }
          }
          include 'conn.php';

          $sql2 = "UPDATE user_learning SET user_learning_af = $score WHERE user_id = $user_id AND choice_id = $choice_id ";

          $result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());

//ปิดการเชื่อมต่อ database
          mysqli_close($con);
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
          ?>

          <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

          <script type="text/javascript">

            var $ws = 'score.php?user_id=<?php echo $user_id ?>';

            setTimeout(function () { 
              swal({
                title: "คะแนนหลังเรียน <?php echo $score ?> คะแนน",

                type: "success",

                confirmButtonText: "ดูคะแนนรวมทั้งหมด"
              },
              function(isConfirm){
                if (isConfirm) {
                  window.location.href = $ws;
                }
              }); }, 50);

            </script>
          <?php } ?>


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
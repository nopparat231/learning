<?php session_start();?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>
<?php include 'navbar.php'; ?>
<?php include '../conn.php'; ?>
<?php 

//$user_id = isset($_GET['user_id']);

$check = "SELECT * FROM user";
$result = mysqli_query($con,$check) or die(mysqli_error());
$num = mysqli_fetch_assoc($result);

?>
<?php include 'datatables.php'; ?>

<body>

 <div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center" >ส่งเมล์แจ้งเตือน</h1>
      </div>
    </div>
  </div>
</div>
<div class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form class="" id="c_form-h" action="send_mail_db.php" method="post" >
          <div class="form-group row">
            <label class="col-3">ข้อความแจ้งเตือน :</label>
            <div class="col-9">

              <textarea rows="8" cols="80" required placeholder="กรุณากรอกข้อความ" name="massage"></textarea>

            </div>
            <label class="col-3">ส่งถึง : </label>
            
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center">
                  <button name="m" type="sub" class="btn btn-primary text-light mx-1" >ผู้ใช้งาน</button>
                  <button name="a" type="btn" class="btn btn-primary text-light mx-1" >แอดมิน</button>
                  <button name="am" type="btn" class="btn btn-primary text-light mx-1" >ผู้ใช้งาน & แอดมิน</button>


                </div>
              </div>
            </div>

            
            <label class="col-3"></label>

          </div>

        </form>
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
<?php include 'footer_admin.php'; ?>


</body>

</html>
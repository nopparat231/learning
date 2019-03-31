
<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<?php
if(session_status() == PHP_SESSION_NONE){
    //session has not started
  session_start();
}
?>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>
<?php 
date_default_timezone_set('Asia/Bangkok');
include('conn.php'); 
$user_id = $_GET['user_id'];

$check = "SELECT * FROM user WHERE id = '$user_id' ";
$result = mysqli_query($con,$check) or die(mysqli_error());
$num = mysqli_fetch_assoc($result);

?>
<body>
 <?php include 'navbar.php'; ?>
 <div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center"><b>แก้ไขข้อมูล</b></h1>
      </div>
    </div>
  </div>
</div>
<div class="py-3">
    <div class="container w-46">
      <div class="row">
        <div class="col-md-3" ></div>
        <div class="col-md-9" >
          <form class="" id="c_form-h" action="editprofile_db.php" method="post" >
            <div class="form-group row">
              <label class="col-2">ชื่อผู้ใช้</label>
              <div class="col-10">
                <div class="input-group">
                  <?php echo($num['Username'])?></div>
                </div>
              </div>

              <div class="form-group row"><label class="col-2">ชื่อ</label>
                <div class="col-10">
                  <div class="input-group">
                    <?php echo($num['Firstname'])?></div>
                  </div>
                </div>
                <div class="form-group row"><label class="col-2">นามสกุล</label>
                  <div class="col-10">
                    <div class="input-group">
                      <?php echo($num['Lastname'])?></div>
                    </div>
                  </div>
                  <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">อีเมล์</label>
                    <div class="col-10">
                      <?php echo($num['email'])?> </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-2">เบอร์โทร<br></label>
                      <div class="col-10">
                        <div class="input-group">
                          <?php echo($num['phone'])?></div>
                        </div>
                      </div>
                       <div class="form-group row">
                      <label class="col-2">วันหมดอายุ<br></label>
                      <div class="col-10">
                        <div class="input-group">
                          <?php $da = date('d-m-Y',strtotime($num['user_date'])); ?>
                          <?php echo $da; ?>
                            
                          </div>
                        </div>
                      </div>

                      <input type="hidden" name="id" value="<?php echo($num['ID'])?>">

                      <div class="py-3">
                        <div class="container">
                          <div class="row">
                            <div class="col-md-12 text-center">

                              <a class="btn btn-warning text-light mx-1" href="editprofile.php?eu&user_id=<?php echo $user_id; ?>">แก้ไข</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

          <?php include 'footer.php'; ?>


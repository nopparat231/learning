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
<?php include 'datatables.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
  <title>สื่อแอนิเมชั่น เรื่องการดูแลสุขภาพในวัยผู้สูงอายุ</title>
  <link rel="shortcut icon" href="/img/5.png" />
</head>
<?php 
include('../conn.php'); 
$user_id = $_GET['user_id'];

$check = "SELECT * FROM user WHERE id = $user_id ";
$result = mysqli_query($con,$check) or die(mysqli_error());
$num = mysqli_fetch_assoc($result);

?>
<body style="background-color: #F6D7C3;">
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
  <div class="container w-50">
    <div class="row">
      <div class="text-right col-md-12" style="">
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
                  <input type="text" name="Firstname" class="form-control" id="inlineFormInputGroup" required="กรุณากรอกชื่อ" placeholder="กรุณากรอกชื่อ"  value="<?php echo($num['Firstname'])?>" onkeyup="validate();" minlength="3" maxlength="25" title="ใส่ ก-ฮ หรือ a-z เท่านั้น"></div>
                </div>
              </div>
              <div class="form-group row"><label class="col-2">นามสกุล</label>
                <div class="col-10">
                  <div class="input-group">
                    <input type="text" name="Lastname" class="form-control" id="inlineFormInputGroup" required="กรุณากรอกนามสกุล" placeholder="กรุณากรอกนามสกุล" value="<?php echo($num['Lastname'])?>"  onkeyup="validate();" minlength="3" maxlength="25" title="ใส่ ก-ฮ หรือ a-z เท่านั้น"></div>
                  </div>
                </div>
              <div class="form-group row"> 
              <label for="inputpasswordh" class="col-2 col-form-label">รหัสผ่าน<br></label>
              <div class="col-10">
                <input type="password" name="Password" id="txtNewPassword" class="form-control" id="inputpasswordh" required="กรุณากรอกรหัสผ่าน" placeholder="รหัสผ่านต้องมี ตัวใหญ่ ตัวเล็ก ตัวเลข อย่างน้อย 8 ตัวขึ้นไป" title="รหัสผ่านต้องมี ภาษาอังกฤษตัวใหญ่ ตัวเล็ก ตัวเลข 8 ตัวขึ้นไป"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8" maxlength="25" value="<?php echo($num['Password'])?>"> </div>
              </div>
              <div class="form-group row">
               <label for="inputpasswordh" class="col-2 col-form-label text-nowrap">ยืนยันรหัสผ่าน<br></label>
               <div class="col-10">
                <input type="password" id="txtConfirmPassword" onkeyup="checkPasswordMatch();" class="form-control" id="inputpasswordh" required="กรุณากรอกยืนยันรหัสผ่าน" placeholder="กรุณากรอกยืนยันรหัสผ่าน"  title="รหัสผ่านต้องมี ภาษาอังกฤษตัวใหญ่ ตัวเล็ก ตัวเลข 8 ตัวขึ้นไป" minlength="8" maxlength="25" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="<?php echo($num['Password'])?>">
                <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
              </div>
            </div>
                <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">อีเมล์</label>
                  <div class="col-10">
                    <input type="email" name="email" class="form-control" id="inputmailh" required="กรุณากรอกอีเมล์" placeholder="กรุณากรอกอีเมล์"  value="<?php echo($num['email'])?>"> </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-2">เบอร์โทร<br></label>
                    <div class="col-10">
                      <div class="input-group">
                        <input name="phone" class="form-control" id="input-num" required="กรุณากรอกเบอร์โทร" placeholder="กรุณากรอกเบอร์โทร" value="<?php echo($num['phone'])?>" size="10" title="เบอร์โทร 0-9" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        type="tel"
                        maxlength = "10" onkeyup="num();"></div>
                      </div>
                    </div>

                    <input type="hidden" name="id" value="<?php echo($num['ID'])?>">

                    <div class="py-3">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12 text-center">
                            <button name="btn" class="btn btn-success text-light mx-1" >ยืนยัน</button>

                            <a class="btn btn-danger text-light mx-1" href="editprofile_show.php?user_id=<?php echo $user_id; ?>">ยกเลิก</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

        </div>
        <?php include 'footer_admin.php'; ?>

      </body>

      </html>

    <script type="text/javascript">

      function validate() {
        var element = document.getElementById('input-field');
        element.value = element.value.replace(/[^a-zA-Zก-๙ @]+/, '');
      };

      function num() {
        var element = document.getElementById('input-num');
        element.value = element.value.replace(/[^0-9]+/, '');
      };

      function user() {
        var element = document.getElementById('input-user');
        element.value = element.value.replace(/[^a-zA-Z0-9]+/, '');
      };
    </script>

    <script type="text/javascript">
      function checkPasswordMatch() {
        var password = $("#txtNewPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword)
          $("#divCheckPasswordMatch").html("รหัสผ่านไม่ตรงกัน!");
        else
          $("#divCheckPasswordMatch").html("รหัสผ่านตรงกัน");
      }

          /*
  jQuery document ready.
  */
  $(document).ready(function()
  {
  /*
    assigning keyup event to password field
    so everytime user type code will execute
    */

    $('#txtNewPassword').keyup(function()
    {
      $('#result').html(checkStrength($('#txtNewPassword').val()))
    })  

  /*
    checkStrength is function which will do the 
    main password strength checking for us
    */

    function checkStrength(password)
    {
    //initial strength
    var strength = 0
    
    //if the password length is less than 6, return message.
    if (password.length < 6) { 
      $('#result').removeClass()
      $('#result').addClass('short')
      return 'รหัสสั้นเกินไป' 
    }
    
    //length is ok, lets continue.
    
    //if length is 8 characters or more, increase strength value
    if (password.length > 7) strength += 1

    //if password contains both lower and uppercase characters, increase strength value
  if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/))  strength += 1

    //if it has numbers and characters, increase strength value
  if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/))  strength += 1 

    //if it has one special character, increase strength value
  if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/))  strength += 1

    //if it has two special characters, increase strength value
  if (password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) strength += 1

    //now we have calculated strength value, we can return messages

    //if value is less than 2
    if (strength < 2 )
    {
      $('#result').removeClass()
      $('#result').addClass('weak')
      return 'รหัสง่ายเกินไป'     
    }
    else if (strength == 2 )
    {
      $('#result').removeClass()
      $('#result').addClass('good')
      return 'รหัสปลอดภัย'   
    }
    else
    {
      $('#result').removeClass()
      $('#result').addClass('strong')
      return 'รหัสปลอดภัยมาก'
    }
  }
});

</script>
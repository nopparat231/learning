

<body>
  <form action="resetpassword.php" method="post">
    <div class="modal fade" style="" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">เข้าสู่ระบบ</h5>
            <button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
          </div>
          <div class="modal-body">
            <form id="c_form-h" class="">
              <div class="form-group row"> 
                <label for="inputmailh" class="col-2 col-form-label">อีเมล์</label>
                <div class="col-10">
                  <input type="email" class="form-control" id="email" name="email" placeholder="กรอกอีเมล์"> </div>
                </div>
                <?php

  /***
  Server SMTP/POP : mail.thaicreate.com
  Email Account : webmaster@thaicreate.com
  Password : 123456
  */
  if (isset($_POST['email'])) {
    $email = $_POST['email'];


    require_once('./sentmailer/class.phpmailer.php');

    $mail = new PHPMailer();
    $mail->IsHTML(true);
    $mail->IsSMTP();
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = ""; // sets the prefix to the servier
    $mail->Host = "localhost.com"; // sets GMAIL as the SMTP server
    $mail->Port = 25; // set the SMTP port for the GMAIL server
    $mail->Username = "oiru6699@gmail.com"; // GMAIL username
    $mail->Password = "nopparat23"; // GMAIL password
    $mail->From = "webmaster@thaicreate.com"; // "name@yourdomain.com";
    //$mail->AddReplyTo = "support@thaicreate.com"; // Reply
    $mail->FromName = "Mr.Weerachai Nukitram";  // set from Name
    $mail->Subject = "Test sending mail."; 
    $mail->Body = "My Body & <b>My Description</b>";

    $mail->AddAddress($email); // to Address

    $mail->Send(); 
  }

  ?>

</form>
</div>
<div class="modal-footer"> 
  <button type="submit" class="btn btn-primary">รีเซ็ตรหัสผ่าน</button> 
  <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
</div>
</div>
</div>
</div>
</form>


</body>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body>
 <?php include 'navbar.php'; ?>
<div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center"><b>สมัครสมาชิก</b></h1>
      </div>
    </div>
  </div>
</div>
<div class="py-3">
  <div class="container w-50">
    <div class="row">
      <div class="text-right col-md-12" style="">
        <form class="" id="c_form-h" action="register_db.php" method="post" >
          <div class="form-group row"><label class="col-2">ชื่อผู้ใช้</label>
            <div class="col-10">
              <div class="input-group">
                <input type="text" name="Username" class="form-control" id="inlineFormInputGroup" required="กรุณากรอกชื่อผู้ใช้" placeholder="กรุณากรอกชื่อผู้ใช้"></div>
              </div>
            </div>
            <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label">รหัสผ่าน<br></label>
              <div class="col-10">
                <input type="password" name="Password" class="form-control" id="inputpasswordh" required="กรุณากรอกรหัสผ่าน" placeholder="กรุณากรอกรหัสผ่าน"> </div>
              </div>
              <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label text-nowrap">ยืนยันรหัสผ่าน<br></label>
                <div class="col-10">
                  <input type="password" name="" class="form-control" id="inputpasswordh" required="กรุณากรอกยืนยันรหัสผ่าน" placeholder="กรุณากรอกยืนยันรหัสผ่าน"> </div>
                </div>
                <div class="form-group row"><label class="col-2">ชื่อ</label>
                  <div class="col-10">
                    <div class="input-group">
                      <input type="text" name="Firstname" class="form-control" id="inlineFormInputGroup" required="กรุณากรอกชื่อ" placeholder="กรุณากรอกชื่อ"></div>
                    </div>
                  </div>
                  <div class="form-group row"><label class="col-2">นามสกุล</label>
                    <div class="col-10">
                      <div class="input-group">
                        <input type="text" name="Lastname" class="form-control" id="inlineFormInputGroup" required="กรุณากรอกนามสกุล" placeholder="กรุณากรอกนามสกุล"></div>
                      </div>
                    </div>
                    <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">อีเมล์</label>
                      <div class="col-10">
                        <input type="email" name="email" class="form-control" id="inputmailh" required="กรุณากรอกอีเมล์" placeholder="กรุณากรอกอีเมล์"> </div>
                      </div>
                      <div class="form-group row"><label class="col-2">เบอร์โทร<br></label>
                        <div class="col-10">
                          <div class="input-group">
                            <input type="phone" name="phone" class="form-control" id="inlineFormInputGroup" required="กรุณากรอกเบอร์โทร" placeholder="กรุณากรอกเบอร์โทร"></div>
                          </div>
                        </div>
                     <div class="py-3">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button name="btn" class="btn btn-success text-light mx-1" >ยืนยัน</button>
                      
                      <a class="btn btn-danger text-light mx-1" href="index.php">ยกเลิก</a>
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
            <div class="py-3" style="">
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
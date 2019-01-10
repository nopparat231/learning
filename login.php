<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>

<body>
  <form action="login_db.php" method="post">
    <div class="modal fade" style="" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">เข้าสู่ระบบ</h5>
            <button type="button" class="close" data-dismiss="modal"> <span>×</span> </button>
          </div>
          <div class="modal-body">
            <form id="c_form-h" class="">
              <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">ชื่อผู้ใช้</label>
                <div class="col-10">
                  <input type="text" class="form-control" id="Username" name="Username" placeholder="กรอกชื่อผู้ใช้"> </div>
                </div>
                <div class="form-group row"> <label for="inputpasswordh" class="col-2 col-form-label text-nowrap">รหัสผ่าน</label>
                  <div class="col-10">
                    <input type="password" class="form-control" id="Password"  name="Password" placeholder="กรอกรหัสผ่าน"> </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer"> 
                <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button> <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button> </div>
              </div>
            </div>
          </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      </body>

      </html>
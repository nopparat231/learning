<?php session_start();?>
 <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container"> 
    <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar12"> 
      <a class="navbar-brand d-none d-md-block" href="index.php">
        <i class="fa d-inline fa-lg fa-circle"></i>
        <b>Home</b>
      </a>

      <?php if (isset($_SESSION["Userlevel"]) == "A") { ?>
        <?php $user_id=$_SESSION['UserID']; ?>
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"> 
            <a class="nav-link" href="scoreall.php">คะแนนผู้ใช้งานทั้งหมด</a> </li>
           <a class="nav-link" href="showchoice.php">หมวดหมู่ทั้งหมด</a> </li>
           <a class="nav-link" href="showchoice_sub.php">คำถามทั้งหมด</a> </li>
           <a class="nav-link" href="scoreall.php">คะแนนผู้ใช้งานทั้งหมด</a> </li>
          </ul>

        <?php }else{ ?>

         <ul class="navbar-nav mx-auto">
          <li class="nav-item"> 
            <a class="nav-link" href="#"></a> </li>
            <li class="nav-item dropdown"> 

            </li>
          </ul>

        <?php }?>



        <ul class="navbar-nav ">
          <li class="nav-item "> 
            <?php if (isset($_SESSION["Userlevel"]) == "A") { 

              echo "<b class='fa text-primary nav-link' >".$_SESSION["User"]."</b>";
            }else{ ?>



            <?php    }

            ?>

          </li>
          <li class="nav-item">  
            <?php

            if (isset($_SESSION["Userlevel"]) == "A") {
              echo "<a class='fa text-danger nav-link' href='logout.php'>ออกจากระบบ</a>";

            }else{?>

              <form class="form-inline" action="login_db.php"> 
                <input class="form-control mr-sm-2" type="text" placeholder="ชื่อผู้ใช้" id="Username" name="Username" required="required">
                <input class="form-control mr-sm-2" type="Password" placeholder="รหัสผ่าน" id="Password"  name="Password" required="required"> 
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">เข้าสู่ระบบ</button>
                <a class='nav-link text-lite' href='index.php.php' data-toggle='modal' data-target='#exampleModal'>ลืมรหัสผ่าน</a>
                <!-- <a href="resetpassword.php" type="submit" class="form-control mr-sm-2">ลืมรหัสผ่าน</a> -->
              </form>

              <?php
            }
            ?> 

          </li>
          <?php //include 'resetpassword.php'; ?>
        </ul>
      </div>
    </div>
  </nav>
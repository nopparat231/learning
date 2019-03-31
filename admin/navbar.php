
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

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container"> 
    <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar12"> 
      <a class="navbar-brand d-none d-md-block" href="">
        <i class="fa d-inline fa-lg fa-circle"></i>
        <b>AdminPage</b>
      </a>

      <?php if (isset($_SESSION["Userlevel"]) == "A") { ?>
        <?php $user_id=$_SESSION['UserID']; ?>
        <ul class="navbar-nav mx-auto">

          <li class="nav-item"> <a class="nav-link" href="scoreall.php">คะแนนผู้ใช้งานทั้งหมด</a> </li>
          <li class="nav-item"> <a class="nav-link" href="showchoice.php">หมวดหมู่ทั้งหมด</a> </li>
          <li class="nav-item"> <a class="nav-link" href="showchoice_sub.php">คำถามทั้งหมด</a> </li>
          <li class="nav-item"> <a class="nav-link" href="show_user.php">ผู้ใช้งานทั้งหมด</a> </li>

          <li class="nav-item"> <a class="nav-link" href="editprofile_show.php?user_id=<?php echo $user_id; ?>">แก้ไขข้อมูล</a></li>
          <li class="nav-item"><a class="nav-link" href="edit_password.php?user_id=<?php echo $user_id; ?>">เปลี่ยนรหัสผ่าน</a></li>

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

            }
            ?> 

          </li>
          <?php //include 'resetpassword.php'; ?>
        </ul>
      </div>
    </div>
  </nav>
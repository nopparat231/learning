<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container"> 
    <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar12"> 
      <a class="navbar-brand d-none d-md-block" href="#">
        <i class="fa fa-heartbeat" aria-hidden="true"></i>
        <b>Admin Page</b>
      </a>

      <?php if (isset($_SESSION["Userlevel"]) == "A") { ?>
        <?php $user_id=$_SESSION['UserID']; ?>
        <ul class="navbar-nav mx-auto">

          <li class="nav-item"> <a class="nav-link" href="scoreall.php">คะแนนผู้ใช้งานทั้งหมด</a> </li>
          <li class="nav-item"> <a class="nav-link" href="showchoice.php">วิดีโอทั้งหมด</a> </li>
          <li class="nav-item"> <a class="nav-link" href="showchoice_sub.php">คำถามทั้งหมด</a> </li>
          <li class="nav-item"> <a class="nav-link" href="show_user.php">ผู้ใช้งานทั้งหมด</a> </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              ข้อมูลผู้ใช้งาน
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
             <a class="dropdown-item" href="editprofile_show.php?user_id=<?php echo $user_id; ?>">แก้ไขข้อมูล</a>
             <!-- <a class="dropdown-item" href="edit_password.php?user_id=<?php echo $user_id; ?>">เปลี่ยนรหัสผ่าน</a> -->
             <!-- <a class="dropdown-item" href="send_mail.php">ส่งอีเมล์ แจ้งเตือนผู้ใช้</a> -->
           </div>
         </li>
       </ul>
     <?php }else{ ?>

      <ul class="navbar-nav mx-auto">
        <li class="nav-item"> 
          <a class="nav-link" href="#">test</a> </li>
          <li class="nav-item dropdown"> 
            ttt
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
 <nav class="navbar navbar-expand-md bg-light navbar-light">
  <div class="container"> 
    <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar12">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar12"> 
      <a class="navbar-brand d-none d-md-block" href="index.php">
        <i class="fa d-inline fa-lg fa-circle"></i>
        <b>Home</b>
      </a>
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"> 
          <a class="nav-link" href="#">บทเรียน</a> </li>
        <li class="nav-item dropdown"> 
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ข้อมูลผู้ใช้</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="score.php">คะแนนผู้ใช้</a>
            <a class="dropdown-item" href="editprofile.php">แก้ไขข้อมูล</a>

          </div>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item"> 
          <?php if (isset($_SESSION["Userlevel"]) == "M") { 

            echo "<b class='nav-link' >".$_SESSION["User"]."</b>";
          }else{
            echo "<a class='nav-link' href='register.php'>สมัครสมาชิก</a>";
          }

          ?>

        </li>
        <li class="nav-item">  
          <?php
        if (isset($_SESSION["Userlevel"]) == "M") {
          echo "<a class='nav-link' href='logout.php'>ออกจากระบบ</a>";
        }else{
          echo "<a class='nav-link text-primary' href='index.php' data-toggle='modal' data-target='#exampleModal'>เข้าสู่ระบบ</a>";
        }


        ?>     
      </li>
      <?php include 'login.php'; ?>
    </ul>
  </div>
</div>
</nav>
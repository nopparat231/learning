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
        <title>สื่อแอนิเมชั่น เรื่องการดูแลสุขภาพในวัยผู้สูงอายุ</title>
        <link rel="shortcut icon" href="/img/5.png" />


</head>
<?php include 'navbar.php'; ?>
<?php include 'datatables.php'; ?>
<?php include '../conn.php'; ?>

<?php 

$query_user = "SELECT * FROM user";
$user = mysqli_query($con,$query_user) or die(mysqli_error());
$row_user = mysqli_fetch_assoc($user);
$totalRows_user = mysqli_num_rows($user);




?>
<body style="background-color: #F6D7C3;">
<div class="col-md-12">
	<div class="py-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center" >ผู้ใช้งานทั้งหมด</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<br>


					<table class="display" id="example">
						<?php if ($totalRows_user > 0) {?>

							<thead>
								<tr class="text-center">
									<th scope="col" width="5">ลำดับ</th>
									<th scope="col">ชื่อผู้ใช้</th>
									<th scope="col">ชื่อ  - สกุล</th>
									<th scope="col">ข้อมูลติดต่อ</th>
									<th scope="col">วันหมดอายุ</th>
									<th scope="col">ประเภท</th>

									<th scope="col" width="5">แก้ไข</th>
								</tr>
							</thead>
							<tbody>

								<?php
								$i = 1 ;
								do { ?>


									<tr class="text-center">

										<td><?php echo $i ?></td>
										<td><?php echo $row_user['Username']; ?></td>
										<td><?php echo $row_user['Firstname']."&nbsp;&nbsp;".$row_user['Lastname']; ?></td>
										<td><?php echo " เบอร์โทร " . $row_user['phone'] . " <br /> อีเมล์ " . $row_user['email']; ?></td>
										<td><?php echo $row_user['user_date']; ?></td>
										<td>
											<?php 

											if ($row_user['Userlevel'] == 'A' ){
												echo "Admin";
											}elseif ($row_user['Userlevel'] == 'M') {
												echo "User";
											}elseif ($row_user['Userlevel'] == 'E') {
												echo "Expired";
											}

											?>

										</td>


										<td>
											<a href="edit_user.php?eu&user_id=<?php echo $row_user['ID'];?>" class="btn btn-outline-warning my-2 my-sm-0" ><i class="fa fa-pencil text-muted fa-mg"></i></a>
										</td>

									</tr>

									<?php 
									$i += 1;
								}while($row_user = mysqli_fetch_assoc($user)); ?>

							</tbody>
						</table>
					<?php }else {
						echo "<h3> ยังไม่มีผู้ใช้งาน </h3>";
					}

					mysqli_free_result($user);?>


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
</div>
</body>
<?php include 'footer_admin.php'; ?>




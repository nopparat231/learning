<?php
include('conn.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
$Firstname = $_REQUEST["Firstname"];
$Lastname = $_REQUEST["Lastname"];
$Username = $_REQUEST["Username"];
$Password = $_REQUEST["Password"];
$email = $_REQUEST["email"];
$phone = $_REQUEST["phone"];
$Userlevel = "M";


$check = "SELECT * FROM user WHERE '$Username' = Username ";
$result = mysqli_query($check,$condb);
$num = mysqli_num_rows($result);

$checkemail = "SELECT * FROM user WHERE email = '$email'";
$resultemail = mysqli_query($checkemail,$condb);
$numemail = mysqli_num_rows($resultemail);

if ($numemail > 0 ){
	echo"<script>";
	echo"alert('E-mail นี้มีผู้ใช้แล้ว กรุณาลองใหม่อีกครั้ง');";
	echo"window.location = 'index.php';";
	echo"</script>";	
	
}elseif ($num > 0 ){
	echo"<script>";
	echo"alert('Username นี้มีผู้ใช้แล้ว กรุณาลองใหม่อีกครั้ง');";
	echo"window.location = 'index.php';";
	echo"</script>";	
	
}else{
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO user(Firstname, Lastname, Username, Password, email ,phone , Userlevel)
	VALUES('$Firstname', '$Lastname', '$Username', '$Password', '$email' , '$phone' , '$Userlevel')";

	$result1 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	}
	//ปิดการเชื่อมต่อ database
	mysqli_close($con);

	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result1){
		echo "<script type='text/javascript'>";
		echo "alert('สมัครสมาชิกสำเร็จ');";
		echo "window.location = 'index.php'; ";
		echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
		echo "alert('สมัครสมาชิกไม่สำเร็จ');";
		echo "</script>";
	}
	?>
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

	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO user(Firstname, Lastname, Username, Password, email ,phone , Userlevel)
			 VALUES('$Firstname', '$Lastname', '$Username', '$Password', '$email' , '$phone' , '$Userlevel')";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	
	if($result){
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
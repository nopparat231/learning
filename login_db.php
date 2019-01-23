
<?php
session_start();
include("conn.php");
$password = $_REQUEST['Password'];
$Username = $_REQUEST['Username'];
echo $password;
$strSQL = "SELECT * FROM user WHERE Username = '".mysqli_real_escape_string($con,$Username)."' 
and Password = '".mysqli_real_escape_string($con,$password)."'";
$objQuery = mysqli_query($con,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
if(!$objResult)
{
  echo "<script>";
  echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
 // echo "window.history.back()";
  echo "</script>";

}
else
{
  $_SESSION["UserID"] = $objResult["ID"];
  $_SESSION["User"] = $objResult["Firstname"]." ".$objResult["Lastname"];
  $_SESSION["Userlevel"] = $objResult["Userlevel"];


  session_write_close();

  if($objResult["Userlevel"] == "A")
  {
    Header("Location: ./admin/");
  }
  elseif($objResult["Userlevel"]=="M")
  {
    Header("Location: index1.php");

  }
}
mysqli_close($con);
?>
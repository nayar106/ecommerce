<?php
session_start();
$con=mysqli_connect("localhost","root","","ecommerce");
if(!$con)
die("Server could not connected");
$a=$_POST["email"];
$b=$_POST["password"];
$s="select * from signup where email='".$a."'";
$rs=mysqli_query($con,$s);
$rows=mysqli_fetch_assoc($rs);
if($b==$rows["password"])
{
$_SESSION["UserName"]=$rows["firstname"];
header("location:home.php");
}
else
{
$error="<b style='color:red;font-size:16px;font-family:Javanese Text;margin-left:1%'>Email or password is incorrect<b>";
header("location:login.php?err=$error");
}
?>

<?php
$n=$_post['stname'];
$c=$_post['stclass'];
$con=mysqli_connect("localhost","root","","school");
$sql="insert into studentdetails(Stu_Name,Stu_Class) values('$n','$c')";
$r=mysqli_query($con,$sql);
if($r)
{
	echo"Sucess";
}
else
{
	echo"Stu Un sucess";
}
?>
<?php
$conn= mysql_connect("localhost","root","");
mysql_select_db("Hackathon");

$appid=$_POST['appid'];
$salary=$_POST['salary'];
$location=$_POST['loc'];
$description=$_POST['desc'];
$status=$_POST['status'];

$query1 = "UPDATE Job_Seekers SET Salary='$salary', Location='$location', Description='$description', status='$status' where App_Id='$appid'";
if(mysql_query($query1,$conn))
{
echo "<script>alert('Successful update!')</script>";
header('Location:jobstatus.php');
}
else
{
alert('Some problem!');
header('Location:updatejobstatus.php');
}
mysql_close($conn);
?>
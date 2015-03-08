
<?php
session_start();

$conn=mysql_connect("localhost","root","");
mysql_select_db("Hackathon",$conn);

$aadhar=$_POST['aadhar'];
$password=$_POST['pwd'];
$query=mysql_query("select Aadhar_No,Password from Job_Seekers where Aadhar_No='$aadhar' && Password='$password'",$conn);
if(mysql_fetch_array($query) == NULL)
{
//header('Location:index.php');
$msg = "Invalid aadhar_no/password!";
echo "<p>Invalid Aadhar Number or Password</p>";
}
else
{
 $_SESSION['aadhar'] = $aadhar;
 header('Location:jobstatus.php');
}
mysql_close($conn);  ?>
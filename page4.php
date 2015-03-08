<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<style>
.body1
{
height:460px;
margin:0 auto;
width:970px;
}
</style>
</head>
<body>
<div class="header">

<div class="logo"><a href="index.php">
Give & Take</a>
</div>

<div class="nav">
<ul class="ul1">
<li><span class="li1"><a href="index.php">HOME</a></span></li>
<li><span class="li1"><a href="index.php" onclick="modal()">LOGIN</a></span></li>
<li><span class="li1"><a href="signup.php">SIGNUP</a></span></li>
<li><span class="li1"><a href="registerforjob.php">REGISTER FOR A JOB</a></span></li>
<li><span class="li1"><a href="index.php" onclick="modal2()">JOB STATUS</a></span></li>
</ul>
</div>

</div>

<div class="body1" >
<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
print "not connected".mysql_error();

$dbase="Hackathon";

if (!mysql_select_db($dbase , $conn) )
{print "DB not Used : " . mysql_error() ;}


$name=$_POST['fname'];
$pwd=$_POST['pswd'];
$work=$_POST['work'];
$phone=$_POST['phone'];
$date=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$gender=$_POST['gndr'];
$aadhar=$_POST['aadhar'];
$location=$_POST['loc'];
$salary=$_POST['sal'];
$det=$_POST['det'];

//$aadhar=$_POST['aadhar'];
$otp=$_POST['otp'];
$sid=$_POST['sid'];
//echo $aadhar;

//echo $otp;
//echo $sid;
//echo $name;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,"http://api.motp.in/v1/otp/0004-7376a50f-54fbecd8-8cc1-e16f9e1e/".$sid);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,"private=0009-7376a50f-54fbecd8-8cc7-2e3b4df2");

 
$replyee2= curl_exec($ch);
$replyy2=json_decode(trim($replyee2),true);

if($replyy2["Status"] == "Success")
{
//echo "Result received ";
//echo $replyy2["Result"];
}



if($replyy2["Result"] == $otp )
{
//echo "matched";
//$_SESSION['aadhar'] = $aadhar;
//
$query1="insert into Job_Seekers(Name,Gender,Dob_Date,Dob_Month,Dob_Year,Contact_No,Type_of_Work,Salary,Location,Description,Aadhar_No,Password) values('$name','$gender','$date','$month','$year','$phone','$work','$salary','$location','$det','$aadhar','$pwd')";
mysql_query($query1,$conn);
echo "<h2>Your Account Has Been Created. Please Log In.</h2>";
//$msg = "Please Login!";
//header('Location:index.php');
//echo "<script style='border:solid pink 1px; color:black;' type='text/javascript'>alert('$msg');</script>";
}
else
{
echo "<h2>Authentication Failed. Please Try Again</h2>";
 //header('Location:index.php');
//$msg = "Invalid aadhar_no/password!";
//echo "<script style='border:solid pink 1px; color:black;' type='text/javascript'>alert('$msg');</script>";
}  

curl_close($ch);

if ( !mysql_close($conn))
print "DB not Closed : " ;

?>
</div>
<div class="footer">
<div class="ftr">

<div class="ltft">
Designed by Khushboo Shah, Swati Anand<br>
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="index.php" onclick="modal()">LOGIN</a></li>
<li><a href="signup.php">SIGNUP</a></li>
<li><a href="registerforjob.php">REGISTER FOR A JOB</a></li>
<li><a href="index.php" onclick="modal2()">JOB STATUS</a></li>
</ul>
</div>

<div class="rtft">&copy All rights reserved</div>

</div>
</div>
</body>
</html>

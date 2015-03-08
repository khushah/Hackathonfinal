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

<div class="body1" height="460px">
<?php


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


$replye = file_get_contents("http://api.motp.in/v1/0004-7376a50f-54fbecd8-8cc1-e16f9e1e/"."$phone");
//echo "called";
$reply= json_decode(trim($replye),true);
if($reply["Status"]=="Success")
{
 //echo "OTP sent";
 $sessionID= $reply["Result"];
 //echo $sessionID;
}
else
{
echo "OTP not sent";
}

echo "<br/><br/><form name='form1' method='post' action='page4.php'><label>Please enter OTP</label><input type='text' name='otp'/>";
echo "<input type='hidden' value='$name' name='fname'>";
echo "<input type='hidden' value='$pwd' name='pswd'>";
echo "<input type='hidden' value='$work' name='work'>";
echo "<input type='hidden' value='$phone' name='phone'>";
echo "<input type='hidden' value='$date' name='day'>";
echo "<input type='hidden' value='$month' name='month'>";
echo "<input type='hidden' value='$year' name='year'>";
echo "<input type='hidden' value='$gender' name='gndr'>";
echo "<input type='hidden' value='$aadhar' name='aadhar'>";
echo "<input type='hidden' value='$location' name='loc'>";
echo "<input type='hidden' value='$salary' name='sal'>";
echo "<input type='hidden' value='$det' name='det'>";
echo "<input type='hidden' value='$sessionID' name='sid'>";


echo "<input type='submit' value='Authenticate'/>";
echo "</form>";
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

</body>
</html>
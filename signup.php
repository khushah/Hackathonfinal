<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="form.css" media="all" />
<link rel="stylesheet" type="text/css" href="style.css" media="all" />
<link rel="stylesheet" type="text/css" href="popup.css" media="all" />
<link rel="stylesheet" type="text/css" href="menu.css" media="all" />
<script src="main.js"></script>
<script src="validation.js"></script>
</head>

<body>
<body>
<!--Login Popup div-->
<div id="modal"></div>
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

<br/>
<br/>

<div class="signupform">
<form id="signup" name="signup" method="post" onsubmit="return validate()" >
<table class="table1" width="100%" cellspacing="9px" >
  <tr>
    <td colspan="2"><div class="field">Name</div></td>
  </tr>
  <tr>
    <td colspan="2">
        <input type="text" name="fname" id="fname" value="Name" style="width:100%; height:25px;" onkeydown="if(this.value=='Name') {this.value='';this.style.color='#000';}" onBlur="firstname();"/>
        <div id="firstname" style="color:#C00; padding-top:3px"></div>
   </td>
  </tr>
  <tr>
    <td height="21" colspan="2"><div class="field">Create a password</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2">
	<input type="password" name="pswd" id="pswd" style="width:100%; height:25px"  onFocus="if(this.value=='') {this.style.color='#000';}" onBlur="password();"/>
	<div id="password" style="color:#aaa; padding-top:3px">Minimum of 8 characters</div>
	</td>
  </tr>
  <tr>
    <td height="21" colspan="2"><div class="field">Confirm your password</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2">
	<input type="password" name="cnfpswd" id="cnfpswd" style="width:100%; height:25px" onFocus="if(this.value=='') {this.style.color='#000';}" onBlur="confirmpassword();"/>
	<div id="confirmpassword" style="padding-top:3px"></div>
	</td>
  </tr>
  <tr>
    <td height="21" colspan="2"><div class="field">Birthday</div></td>
  </tr>
  <tr>
    <td height="54" colspan="2">
    &nbsp;&nbsp;&nbsp;
    <select name="day" id="day" style="width:15%; height:25px" onBlur="bday();">
    <option value="0">Day</option>
    <script>
				 
				for(var i=1; i< 32 ;i++)
				{
				document.write('<option value="'+i+'">'+i+'</option>');
				}
				</script>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="month" id="month" style="width:30%; height:25px" onBlur="bmonth();">
    <option value="0">Month</option>
				<option value="1">January</option>
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select name="year" id="year" style="width:20%; height:25px" onBlur="byear();">
    <option value="0">Year</option>
    <script>
				 
				for(var i=2015; i>=1930;i--)
				{
				document.write('<option value="'+i+'">'+i+'</option>');
				}
				</script>
    </select>
	<div id="birthday" style="color:#C00; padding-top:3px"></div>
    </td>
  </tr>
  <tr>
    <td height="21" colspan="2"><div class="field">Gender</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2">
	<select name="gndr" id="gndr" style="width:100%; height:25px" onBlur="gender();">
    <option value="0">I am</option>
    <option value="1">Male</option>
    <option value="2">Female</option>    
    </select>
	<div id="gender" style="color:#C00; padding-top:3px"></div>
	</td>
  </tr>
  <tr>
    <td height="21" colspan="2"><div class="field">Mobile phone</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2"> 
	<input type="text" name="phone" id="phone" value="+91" style="width:100%; height:25px" onFocus="this.style.color='#000';" onBlur="mobile()"/>
	<div id="mobile" style="color:#C00; padding-top:3px"></div>
	</td>
  </tr>
  <tr>
    <td height="21" colspan="2"><div class="field">Your current email address</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2">
	<input type="text" name="email" id="email" value="" style="width:100%; height:25px" onFocus="this.style.color='#000';" onBlur="emailid()"/>
	<div id="emailid" style="color:#C00; padding-top:3px"></div>
	</td>
  </tr>
  <tr>
    <td height="21" colspan="2"><div class="field">Aadhar Number</div></td>
  </tr>
  <tr>
    <td height="27" colspan="2"> 
	<input type="text" name="aadhar" id="aadhar" value="" style="width:100%; height:25px" onFocus="this.style.color='#000';" onBlur="aadhar()"/>
	<div id="aadharval" style="color:#C00; padding-top:3px"></div>
	</td>
  </tr>
  <tr>
   <td height="43" colspan="2">
    <input type="checkbox" name="terms" id="terms"  />&nbsp;<span color="#aaa">I agree to the Terms of Service & Privacy Policy</span>
    <div id="agree" style="color:#C00; padding-top:3px"></div>
    </td>
  </tr>
  <tr>
    <td height="59" colspan="2" align="right"><button type="submit" name="submit" id="submit" value="Submit" style="height:30px; width:70px;">Submit</Button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
</table>
</form>
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

<?php 

$conn=mysql_connect("localhost","root","");
if(!$conn)
print "not connected".mysql_error();

$dn= 'Hackathon';
if (!mysql_select_db($dn , $conn) )
print "DB not Used : " . mysql_error() ;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$name =$_POST['fname'];
$pwd=$_POST['pswd'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$gender=$_POST['gndr'];
$aadhar=$_POST['aadhar'];

$query1="insert into Service_Seekers values('$name','$email','$pwd','$date','$month','$year','phone','$aadhar','$gender')";
if(!mysql_query($query1,$conn)){
$msg = "Something went wrong!";
echo "<script  type='text/javascript'>alert('$msg');</script>";}

}
if ( !mysql_close($conn))
print "DB not Closed : " ;

?>

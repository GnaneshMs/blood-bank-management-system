<html>
	<boby>
	<h1 align="center"><b>Registration Successful</b></h1>
		<?php
		$dbh=mysqli_connect('localhost','root','')or die(mysqli_error());

		mysqli_select_db($dbh,'project') or die(mysqli_error($dbh));
			
			$fname=$_REQUEST['fname'];
			$lname=$_REQUEST['lname'];
			$dob=$_REQUEST['dob'];
			$gender=$_REQUEST['gender'];
			$address=$_REQUEST['address'];
			$pno=$_REQUEST['pno'];
			$adhar=$_REQUEST['adhar'];
			
		$query="insert into donor values('$fname','$lname','$dob','$gender','$address','$pno','$adhar')";
		$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
		$var=mysqli_query($dbh,"select *from donor");

			
		?>
<?php

$dbh=mysqli_connect('localhost','root','')or die(mysqli_error());
mysqli_select_db($dbh,'project') or die(mysqli_error($dbh));
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$query="insert into user_pass values('$user','$pass')";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
$var=mysqli_query($dbh,"select *from user_pass");
?>
<h3 align="center"><a href="dlogin.php">click here to login</a></h3>
	</body>
</html>

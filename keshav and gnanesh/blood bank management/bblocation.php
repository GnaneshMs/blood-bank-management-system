<html>
<body bgcolor="grey">
<h1 align="center" Thanks For Donating Blood></h1>

<?php
		$dbh=mysqli_connect('localhost','root','')or die(mysqli_error());

		mysqli_select_db($dbh,'project') or die(mysqli_error($dbh));

		$user=$_REQUEST['user'];
		$btype=$_REQUEST['btype'];
		$location=$_REQUEST['location'];
		$quantity=1;
		$query="insert into bblocation values('$btype','$location','$user')";
		$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
		$var=mysqli_query($dbh,"select *from bblocation");

		$query1="insert into stock values('$location','$btype','$quantity')";
		$result1=mysqli_query($dbh,$query1) or die(mysqli_error($dbh));
		$var1=mysqli_query($dbh,"select *from stock");

		$query2=mysqli_query($dbh,"select * from stock where location='".$location."' AND btype='".$btype."'");
		$numrows=mysqli_num_rows($query2);
		$query3=mysqli_query($dbh,"select SUM(quantity) from stock where location='".$location."' AND btype='".$btype."'");
		if($numrows>1)
		{
		$result= mysqli_query($dbh,"SELECT SUM(quantity) AS value_sum FROM stock where location='".$location."' AND btype='".$btype."'"); 
		$row = mysqli_fetch_assoc($result);
		 $sum = $row['value_sum'];
		$query2=mysqli_query($dbh,"delete from stock where location='".$location."' AND btype='".$btype."'");
		$query1="insert into stock values('$location','$btype','$sum')";
		$result1=mysqli_query($dbh,$query1) or die(mysqli_error($dbh));
		$var1=mysqli_query($dbh,"select *from stock");
 		}
?>
<h1 align="center" style="font-family:Candara Light">THANK YOU</h1>
<h3 align="center" style="font-family:Times new roman">For Donating</h3>
<h1 align="center"><img src="thanks.jpg" alt="blood" style="float:center;width:800px;height:500px;"></h1>
<a href="index.html">click here for Home Page</a>
</body>
</html>
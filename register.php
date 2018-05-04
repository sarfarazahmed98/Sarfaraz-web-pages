<?php
if(isset($_POST['submit']))
{
	$l=$_POST['t1'];
	$h=$_POST['t2'];
	$p=$_POST['t3'];
	$d=$_POST['t4'];
	$cn=$_POST['t5'];
	$fn=$_POST['t6'];
	$g=$_POST['t7'];
	$r=$_POST['t8'];
	$c=$_POST['t9'];
	$ph=$_POST['t10'];
	$con=new mysqli("localhost","root","","mydb");
	$sql="insert into register (lid,hno,password,dob,cname,fname,gender,rank,caste,ph) values ('$l',$h,'$p','$d','$cn','$fn','$g',$r,'$c','$ph')";
	if($con->query($sql)===true)
	{
		echo "<h3><b style='color:green'>You have successfully registered...<a href='login.html'>Login Here</a></b></h3>";
	}
	else
	{
		echo "Error: ".$sql."<br>".$con->error;
	}
	$con->close();
}
?>
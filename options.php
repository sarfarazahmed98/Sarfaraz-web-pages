<?php
if(isset($_POST['submit']))
{
	$l=$_POST['t1'];
	$h=$_POST['t2'];
	$p=$_POST['t3'];
	$d=$_POST['t4'];
	$con=new mysqli("localhost","root","","mydb");
	$sql="select * from register where lid='$l' and hno=$h and password='$p' and dob='$d'";
	$result=$con->query($sql);
	if($result->num_rows==1)
	{
		echo "<body><div style='background-color:gray;width:1350;height:100;float:left;'><br>";
		echo "<table align='center' width=1300><tr class='a'><td><b>Candidate's Name:</b></td>";
		$row=$result->fetch_assoc();
		echo "<td><b>".$row['cname']."</b></td><td rowspan='3' style='background-color:white;text-align:center'><b>SATE-2018<br>OPTION ENTRY FORM</b></td>";
		echo "<td><b>Father's Name:</b></td><td><b>".$row['fname']."</b></td></tr>";
		echo "<tr class='b'><td><b>Gender:</b></td><td><b>".$row['gender']."</b></td><td><b>Rank:</b></td><td><b>".$row['rank']."</b></td></tr>";
		echo "<tr class='a'><td><b>Caste:</b></td><td><b>".$row['caste']."</b></td><td><b>Physically Handicapped:</b></td><td><b>".$row['ph']."</b></td>";
		echo "</tr></table></div><center><br>";
		echo "<i style='color:blue;'>Logout Properly and close the Browser window after completing options entry</i><br>";
		echo "<br><form name='form2' method='post' action='list.php' id='oef'><table style='background-color:gray'>";
		echo "<tr><td><input type='submit' name='submit1' value='View & Print' onclick='formvalidate()'></td>";
		echo "<td><button type='submit' formaction='./lout.html'>Logout</button></td></tr>";
		echo "</table><br><table border='2px gray solid' width='1150' style='color:darkblue'><tr>";
		echo "<td>EAMCET Hall Ticket No:<input type='text' id='hn' class='hn' name='hno1' maxlength='10' required></td>";
		echo "<td>UNIV <svg width='12' height='12'><rect width='12' height='12' style='fill:lightblue;'/></svg></td>";
		echo "<td>GIRLS <svg width='12' height='12'><rect width='12' height='12' style='fill:pink;'/></svg></td>";
		echo "<td>MINORITY <svg width='12' height='12'><rect width='12' height='12' style='fill:lightgreen;'/></svg></td>";
		echo "<td>PVT <svg width='12' height='12'><rect width='12' height='12' style='fill:#EEE8AA;'/></svg></td>";
		echo "<td> Name: <b>".$row['cname']."</b></td></tr></table>";
		echo "<table width='1150' style='background-color:gray'><tr>";
		echo "<td class='a'>College</td><td class='a'>District</td><td class='a'>CE</td><td class='a'>CSE</td><td class='a'>ECE</td><td class='a'>EEE</td><td class='a'>IT</td>";
		echo "</tr><tr class='p'>";
		echo "<td align='center'><input type='text' value='SVNE' name='c1' class='p' style='width:100px' readonly='readonly'></td>";
		echo "<td align='center'><input type='text' value='CTR' name='d1' class='p' style='width:100px' readonly='readonly'></td>";
		echo "<td align='center'><input type='number' name='t1' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t2' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t3' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t4' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t5' class='oe' style='width:100px' ></td>";
		echo "</tr><tr class='p'>";
		echo "<td align='center'><input type='text' value='MITS' name='c2' class='p' style='width:100px' readonly='readonly'></td>";
		echo "<td align='center'><input type='text' value='CTR' name='d2' class='p' style='width:100px' readonly='readonly'></td>";
		echo "<td align='center'><input type='number' name='t6' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t7' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t8' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t9' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t10' class='oe' style='width:100px' ></td>";
		echo "</tr><tr class='u'>";
		echo "<td align='center'><input type='text' value='SVU' name='c3' class='u' style='width:100px' readonly='readonly'></td>";
		echo "<td align='center'><input type='text' value='CTR' name='d3' class='u' style='width:100px' readonly='readonly'></td>";
		echo "<td align='center'><input type='number' name='t11' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t12' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t13' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t14' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t15' class='oe' style='width:100px' ></td>";
		echo "</tr><tr class='u'>";
		echo "<td align='center'><input type='text' value='JNTC' name='c4' class='u' style='width:100px' readonly='readonly'></td>";
		echo "<td align='center'><input type='text' value='CTR' name='d4' class='u' style='width:100px' readonly='readonly'></td>";
		echo "<td align='center'><input type='number' name='t16' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t17' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t18' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t19' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t20' class='oe' style='width:100px' ></td>";
		echo "</tr><tr class='p'>";
		echo "<td align='center'><input type='text' value='SVCE' name='c5' class='p' style='width:100px' readonly='readonly'></td>";
		echo "<td align='center'><input type='text' value='CTR' name='d5' class='p' style='width:100px' readonly='readonly'></td>";
		echo "<td align='center'><input type='number' name='t21' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t22' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t23' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t24' class='oe' style='width:100px' ></td>";
		echo "<td align='center'><input type='number' name='t25' class='oe' style='width:100px' ></td>";
		echo "<input type='hidden' id='hidd' name='hidd' value=''>";
		echo "</tr></table></form></center></body></html>";
	}
	else
	{
		echo "<br><br><h2 align='center'><b style='color:red'>Invalid Credentials...<br><a href='main.html'>Click Here</a> to go back...</b></h2>";;
	}
	$con->close();
}
?>
<html>
<head>
<title>
	SATE-2018 Options Entry Form
</title>
<style>
tr.a
{
	background-color:#D5F5E3;
}
tr.b
{
	background-color:white;
}
td.a
{
	background-color:darkgreen;
	color:white;
	text-align:center;
	font-weight:bold;
}
tr.u
{
	background-color:lightblue;
}
tr.g
{
	background-color:pink;
}
tr.m
{
	background-color:lightgreen;
}
tr.p
{
	background-color:#EEE8AA;
}
input.p
{
	background-color:#EEE8AA;
	text-align:center;
	font-weight:bold;
}
input.u
{
	background-color:lightblue;
	text-align:center;
	font-weight:bold;
}
input.h
{
	background-color:darkgreen;
	text-align:center;
	font-weight:bold;
	color:white;
}
input[type="number"]::-webkit-outer-spin-button,input[type="number"]::-webkit-inner-spin-button 
{
    -webkit-appearance:none;
    margin:0;
}
</style>
<script type="text/javascript">
function formvalidate()
{
	var elements=document.getElementsByClassName("oe");
	var values=new Array();
	var flag=0;
	var h=form2.hno1.value;
	for(var i=0;i<elements.length;i++)
	{
		values.push(elements[i].value);
	}
	document.getElementById("hidd").value=values;
	for(var o=0;o<values.length;o++)
	{
		flag=0;
		for(var p=0;p<values.length;p++)
		{
			if(values[o].length>=1 && values[p].length>=1)
			{
				if(values[o] == values[p])
				{
					flag=flag+1;
				}
				if(values[o]>25)
				{
					alert("Entered option is out of limit...Please enter your options again...");
					document.getElementById("oef").reset();
					break;
				}
			}
		}
		if(flag>1)
		{
			alert("Entered options are redundant.Please check your options once...");
			document.getElementById("oef").reset();
			break;
		}
		if(h!=<?php echo $h; ?>)
		{
			alert("Invalid EAMCET Hall Ticket No.");
			document.getElementById("oef").reset();
			flag=2;
			break;
		}		
	}
}
</script>
</head>
</html>
<?php
	if (isset($_POST['submit1']))
	{
		$h=$_POST['hno1'];
		$t="options_".$h;
		$myarr=$_POST['hidd'];
		$arr=array($myarr);
		$str=implode(" ",$arr);
		$opt=explode(",",$str);
		$con=new mysqli("localhost","root","","mydb");
		$sql1="drop table if exists ".$t.";";
		if($con->query($sql1)===true)
		{
			$sql2="create table ".$t."(sno int,option int,icode varchar(5),iname varchar(100),dist varchar(5),bcode varchar(5));";
			if($con->query($sql2)===true)
			{
				echo "<html><body align=center bgcolor=#F4F6F6><b><h1 style='color:green;font-family:Garamond;'>List of Options Entered</h1></b>";
				echo "<br><b style='color:blue;font-family:Cambria;'>EAMCET Hall Ticket No.:".$h."</b><br><center>";
				echo "<table style='background-color:gray'><tr><td><input type='submit' value='Print' name='Print' onclick='print()'></td>";
				echo "<td><a href='./lout.html'><input type='button' value='Logout' name='Logout'></a></td></tr></table><br><br>";
			}
			else
			{		
				echo "Error:".$sql2."<br>".$con->error;
			}
		}
		else
		{		
			echo "Error:".$sql1."<br>".$con->error;
		}
		$sno=1;
		$d="CTR";
		for($o=1;$o<=25;$o++)
		{
			for($p=0;$p<sizeof($opt);$p++)
			{
				if($opt[$p]==$o)
				{
					$bc=$p%5;
					if($bc==0)
						$b="CE";
					elseif($bc==1)
						$b="CSE";
					elseif($bc==2)
						$b="ECE";
					elseif($bc==3)
						$b="EEE";
					elseif($bc==4)
						$b="IT";
					if($p>=0 && $p<5)
					{
						$c="SVNE";
						$cn="Sree Vidyanikethan Engineering College, Tirupati";
					}
					elseif($p>=5 && $p<10)
					{
						$c="MITS";
						$cn="Madanapalle Institute of Technology & Sciences, Madanapalle";
					}
					elseif($p>=10 && $p<15)
					{
						$c="SVU";
						$cn="Sri Venkateswara University, Tirupati";
					}
					elseif($p>=15 && $p<20)
					{
						$c="JNTC";
						$cn="JNTUA College of Engineering, Kalikiri";
					}
					elseif($p>=20 && $p<25)
					{
						$c="SVCE";
						$cn="SV College of Engineering, Tirupati";
					}
					$sql3="insert into ".$t." values (".$sno.",".$o.",'".$c."','".$cn."','".$d."','".$b."');";
					if($con->query($sql3)===true)
					{
					}
					else
					{
						echo "Error:".$sql3."<br>".$con->error;
					}
					$sno=$sno+1;
					break;
				}
			}
		}
		$sql4="select * from ".$t.";";
		$result=$con->query($sql4);
		if($result->num_rows>0)
		{
			echo "<table width=1150px border=2px black solid><tr style='background-color:#0B5345;color:#FDFEFE;font-weight:bold;text-align:center;'>";
			echo "<td>S.No.</td><td>Option No.</td><td>Institute Code</td><td>Institute Name, Place</td><td>District</td><td>Branch Code</td></tr>";
			while($row=$result->fetch_assoc())
			{
				echo "<tr><td style='background-color:#F8C471;font-weight:bold;'>".$row['sno'];
				echo "</td><td style='background-color:#F9E79F;font-weight:bold;'>".$row['option'];
				echo "</td><td style='background-color:#F8C471;font-weight:bold;'>".$row['icode'];
				echo "</td><td style='background-color:#F9E79F;font-weight:bold;'>".$row['iname'];
				echo "</td><td style='background-color:#F8C471;font-weight:bold;'>".$row['dist'];
				echo "</td><td style='background-color:#F9E79F;font-weight:bold;'>".$row['bcode']."</td></tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "<h2 style='color:red'>No options entered</h2>";
		}
		echo "</center></body></html>";
		$con->close();
	}
?>
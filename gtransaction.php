<?php
$servername='localhost';
$username='root';
$password='';
$dbname='dental clinic';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
  die("Connection failed");
}

$sql1 = "SELECT distinct * FROM treatement natural join appointment natural join patient where DATE ='".$_POST['ADATE']."'";
$sql2 = "SELECT sum(fee) as fee_total FROM treatement natural join appointment where DATE ='".$_POST['ADATE']."'";


$result1=$conn->query($sql1);
$result2=$conn->query($sql2);
?>
<html>
<head>
<title>
Today's Transaction
</title>
</head>
<center>
<body>
<h1>TODAY'S TRANSACTION </h1><HR SIZE="3"  COLOR="RED">
<?php
if ($result1->num_rows > 0) {

?>
<table border=1>
<tr>
<th>Patient id </th>
    <th>NAME</th>
    <th>email</th>	
    <th>Blood Group</th>
    <th>Phone No</th>
    <th>Adress </th>
	<th>tid </th>
	<th>treatement</th>
	<th>fee</th>	
	<th>did</th>
    <th>equipment</th>
 
	</tr>
<?php
   
  while($row = $result1->fetch_assoc()) {
  $i=$row["pid" ];
  echo  "<tr>";
	echo  "<td>" ;echo $row["pid"]; echo"</td>";
	echo "<td>";echo $row["email"]; echo"</td>";
	echo "<td>" ;echo $row["pname"]; echo"</td>";
  echo"<td>";echo $row["blood_group"]; echo"</td>";
  echo "<td>";echo $row["phno"]; echo"</td>";
  echo "<td>";echo $row["address"]; echo"</td>";
  echo  "<td>" ;echo $row["tid"]; echo"</td>";
  echo "<td>" ;echo $row["treatement"]; echo"</td>";
  echo "<td>";echo $row["fee"]; echo"</td>";
  echo"<td>";echo $row["did"]; echo"</td>";
  echo "<td>";echo $row["equipment"]; echo"</td>";

}
 
}
 else {
	 echo "NO TRANSACTION TOOK PLACE TODAY";
}
$conn->close();

?>
</table>
<br><h2>
	<?php
	$row2 = $result2->fetch_assoc();
	if($sum = $row2['fee_total'])

{echo $row2["fee_total"];echo" is the sum total of today's transaction"; }?></h2>

</body>
</center>
</html>


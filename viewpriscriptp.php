|<html>
<body>

<?php
session_start();
$servername='localhost';
$username='root';
$password='';
$dbname='dental clinic';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
	echo'database no connection';
die( );
}

$sql = "SELECT treid, medicine,dosage,did FROM prescription natural join books natural join appointment where pid = '".$_SESSION["pid"]."'" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
  ?>
  <title>PRESCRIPTION DETAILS</title>
	
	<center><h1>PRESCRIPTION DETAIL</h1> <HR SIZE="3"  COLOR="BLUE">
  <br>
	<table border=1>
	<tr>
	<th>treatement id </th>
	<th>medicine</th>
	<th>dosage</th>	
	<th>dentist id</th>
   
	</tr>
	<?php
  // output data of each row
  while($row = $result->fetch_assoc())
  {
    $i=$row["treid" ];
    echo  "<tr>";
    echo  "<td>" ;echo $row["treid"]; echo"</td>";
    echo "<td>" ;echo $row["medicine"]; echo"</td>";
    echo "<td>";echo $row["dosage"]; echo"</td>";
    echo"<td>";echo $row["did"]; echo"</td>";
    ;
  }
}

 else 
{
  echo "0 results";
}
$conn->close();
?>

</table>
</div>
</div>

</body>

<br>Click here to <a href="plogin.php" tite="GO BACK">Logout</a>

</html>




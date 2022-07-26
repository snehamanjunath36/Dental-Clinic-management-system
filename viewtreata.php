<html>
<body>

<?php
$servername='localhost';
$username='root';
$password='';
$dbname='dental clinic';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
	echo'database no connection';
die( );
}

$sql = "SELECT tid,treatement, fee,did,equipment FROM treatement natural join ptreat natural join patient where pid = '".$_POST['pid']."'" ;
$result = $conn->query($sql);
//$sql1 = "SELECT * FROM treatement where tid = '".$result["pid"]."'" ;
//$result1 = $conn->query($sql1);
if ($result->num_rows > 0) 
{
  ?>
  <title>TREATEMENT DETAILS</title>
	
	<center> <h1>TREATEMENT DETAILS</h1><HR SIZE="3"  COLOR="BLUE">
  <br>  <h2><?php echo "".$_POST["pid"];echo ' Was given these many treatements'; ?></h2>

	<table border=1>
	<tr>
	<th>tid </th>
	<th>treatement</th>
	<th>fee</th>	
	<th>did</th>
    <th>equipment</th>
 
	</tr>
	<?php
  // output data of each row
  while($row = $result->fetch_assoc())
  {
    $i=$row["tid" ];
    echo  "<tr>";
    echo  "<td>" ;echo $row["tid"]; echo"</td>";
    echo "<td>" ;echo $row["treatement"]; echo"</td>";
    echo "<td>";echo $row["fee"]; echo"</td>";
    echo"<td>";echo $row["did"]; echo"</td>";
    echo "<td>";echo $row["equipment"]; echo"</td>";
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
<br>Click here to <a href="alogin.php" tite="GO BACK">Logout</a>

</html>




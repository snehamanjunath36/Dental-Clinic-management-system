<html>
<body>

<?php
$servername='localhost';
$username='root';
$password='';
$dbname='dental clinic';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn)
{
	echo'database no connection';
  die( );
}

$sql = "SELECT * FROM dentist" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
  ?>  
	<title>DENTIST DETAILS</title>
	<center><h1>DENTIST DETAIL</h1> <HR SIZE="3"  COLOR="BLUE">
  <br>
	<table border=1>
	<tr>
	<th>did </th>
	<th>NAME</th>
	<th>email</th>	
	<th>qualifi</th>
  <th>phno</th>
 
	</tr>
	<?php
  // output data of each row
  while($row = $result->fetch_assoc())
  {
    $i=$row["did" ];
    echo  "<tr>";
    echo"<td>";echo $row["did"];echo"</td>";
    echo"<td>";echo $row["NAME"];echo"</td>";
    echo"<td>";echo $row["email"];echo"</td>";
    echo"<td>";echo $row["qualifi"];echo"</td>";
    echo"<td>";echo $row["phno"];echo"</td>";
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


</body>
<br>Click here to <a href="plogin.php" tite="GO BACK">Logout</a>
</html>
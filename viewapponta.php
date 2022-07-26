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

$sql = "SELECT * FROM appointment where DATE ='".date("Y-m-d", time())."'";

$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
  ?>
  <title>APPOINTMENT DETAILS</title>
	<center>	<h1>APPOINTMENT DETAIL</h1>
<HR SIZE="3"  COLOR="BLUE">
  <br>
  <h3>  <?php
  echo "Appointments on  ";
echo date("Y/d/m", time());
?></h3>
	<table border=1>
	<tr>
	<th>aid </th>
	<th>DATE</th>
	<th>TIME</th>	
	<th>pid </th>
  <th>did </th>
 
	</tr>
	<?php
  // output data of each row
  while($row = $result->fetch_assoc())
  {
    $i=$row["pid" ];
    echo  "<tr>";
    echo  "<td>" ;echo $row["aid"]; echo"</td>";
    echo "<td>" ;echo $row["DATE"]; echo"</td>";
    echo "<td>";echo $row["TIME"]; echo"</td>";
    echo  "<td>" ;echo $row["pid"]; echo"</td>";
    echo  "<td>" ;echo $row["did"]; echo"</td>";
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
<br>Click here to <a href="alogin.php" tite="GO BACK">Logout</a>
</body>
</html>




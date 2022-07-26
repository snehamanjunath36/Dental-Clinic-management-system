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
session_start();
$sql = "SELECT * FROM appointment where did ='" .$_SESSION["did"]."' and DATE ='".date("Y-m-d", time()). "' GROUP BY DATE";
$sql1 = "SELECT NAME FROM dentist where did ='" .$_SESSION["did"]."'";
$result = $conn->query($sql);
$result1 = $conn->query($sql1);
$dnam = $result1->fetch_assoc();
if ($result->num_rows > 0) 
{
  ?>
  <title>APPOINTMENT DETAILS</title>
	
	<center><h1>APPOINTMENT DETAILS</h1><HR SIZE="3"  COLOR="BLUE">
  <br>
  <h4><?php echo "WELCOME";?></h4><h2> <?php  echo $dnam["NAME"];?></h2><h4> <?php echo"TODAY YOU HAVE THESE MANY APPOINTMENTS" ?></h4>
	<table border=1>
	<tr>
	<th>aid </th>
	<th>DATE</th>
	<th>TIME</th>	
	<th>pid </th>
    
 
	</tr>
	<?php
  // output data of each row
  while($row = $result->fetch_assoc())
  {
    $i=$row["did" ];
    echo  "<tr>";
    echo  "<td>" ;echo $row["aid"]; echo"</td>";
    echo "<td>" ;echo $row["DATE"]; echo"</td>";
    echo "<td>";echo $row["TIME"]; echo"</td>";
    echo  "<td>" ;echo $row["pid"]; echo"</td>";
   
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
<br>Click here to <a href="dlogin.php" tite="GO BACK">Logout</a>

</body>
</html>




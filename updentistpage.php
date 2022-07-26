<html>
<head>
<title>
DENTIST UPDATE DETAILS
</title>
</head>
<center>
<body>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname='dental clinic';
$conn = new mysqli($servername, $username, $password, $dbname);
session_start();
if(!$conn){
	echo'database no connection';
die( );
}

$sql = "SELECT * FROM dentist where did = '".$_POST['did']."'" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
  ?>
  
	
	<center><h1>DENTIST DETAILS</h1> <HR SIZE="3"  COLOR="BLUE">
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
    echo  "<td>" ;echo $row["did"]; echo"</td>";
    echo "<td>" ;echo $row["NAME"]; echo"</td>";
    echo "<td>";echo $row["email"]; echo"</td>";
    echo"<td>";echo $row["qualifi"]; echo"</td>";
    echo "<td>";echo $row["phno"]; echo"</td>";
    ;
  }?>
  
</table>

<h3>ENTER NEW DETAILS</h3>
<form action='upden.php' method=POST>
<table border=1>
<tr><td>DENTIST ID</td><td><?php echo "".$_POST["did"] ;?></td></tr>
<tr><td>DENTIST NAME</td><td><input type=text name=NAME required=yes></input></td></tr>
<tr><td>QUALIFICATION</td><td><input type=text name=qualifi required=yes></input></td></tr>
<tr><td>EMAIL ID</td><td><input type=text name=email required=yes></input></td></tr>
<tr><td>PHONE NO</td><td><input type=text name=phno required=yes></input></td></tr>

<tr><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>

</table>
</form>
<?php
}

 else 
{
  echo "NO SUCH DENTIST WORK HERE";
}
$conn->close();
?>
  <br>Click here to <a href="alogin.php" tite="GO BACK">GO BACK</a> if no need for changing any details

</body>
</center>
</html>
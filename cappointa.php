<html>
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
      <center><h1>DENTIST DETAIL</h1><HR SIZE="3"  COLOR="ORANGE">
    <br>
      <table border=1>
      <tr>
      <th>did </th>	
      <th>qualifi</th>
   
   
      </tr>
      <?php
    // output data of each row
    while($row = $result->fetch_assoc())
    {
      $i=$row["did" ];
      echo  "<tr>";
      echo"<td>";echo $row["did"];echo"</td>";
      //echo"<td>";echo $row["NAME"];echo"</td>";
      //echo"<td>";echo $row["email"];echo"</td>";
      echo"<td>";echo $row["qualifi"];echo"</td>";
      //echo"<td>";echo $row["phno"];echo"</td>";
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
  <?php
  session_start();
?>
<head>
<title>
Create Appointment details
</title>
</head>
<center>
<body>
<h1>CREATE NEW APPOINTMENT</h1>
ENTER APPOINTMENT DETAILS
<form action='addapointa.php' method=POST>
<table border=1>
<tr><td>APPOINTMENT ID</td><td><input type=text name=aid required=yes></input></td></tr>
<tr><td>DATE</td><td><input type=date name=ADATE required=yes></input></td></tr>
<tr><td>TIME</td><td><input type=TIME name=ATIME required=yes></input></td></tr>
<tr><td>PATIENT ID</td><td> <input type=text name=pid required=yes></input></td></tr>
<tr><td>DENTIST ID</td><td><input type=text name=did required=yes></input></td></tr>

<tr><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>

</table>
</form>
<h5>Note:Appointment id must be within 5 characters</h5>
</body>
<br>Click here to <a href="alogin.php" tite="Logout">Logout</a>
</center>
</html>
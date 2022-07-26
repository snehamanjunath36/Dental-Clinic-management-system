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

$sql1 = "SELECT fee FROM treatement natural join appointment where DATE ='".date("Y-m-d", time()). "' GROUP BY DATE";
$sql2 = "SELECT sum(fee) FROM treatement natural join appointment where DATE ='".date("Y-m-d", time()). "' GROUP BY DATE";

$result1=$conn->query($sql1);
$result2=$conn->query($sql2);
?>


<?php
 while($row = $result1->fetch_assoc())
 {
echo $row["fee"];}
$row1 = $result2->fetch_assoc();
echo $row1;
$conn->close();
?>

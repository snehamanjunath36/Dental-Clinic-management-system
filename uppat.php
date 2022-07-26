<html>
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
$pid=$_SESSION['pid'];
$pname=$_POST['pname'];
$email=$_POST['email'];
$blood_group=$_POST['blood_group'];
$address=$_POST['address'];
$phno=$_POST['phno'];
  $sql = "UPDATE patient SET pname='$pname',email='$email',blood_group='$blood_group',address='$address',phno='$phno' WHERE   pid = '".$_SESSION['pid']."'";
  $sql1 = "SELECT * FROM patient where pid = '$pid'" ;

  $result = $conn->query($sql);
  if ($conn->query($sql) === TRUE)
  {
    echo "<script>
				alert('Patient details updated successfully');
		
				</script>";

  }
  $result1=$conn->query($sql1);
  if($result1->num_rows > 0) 
  {
    ?>
    <title>UPDATED PATIENT DETAILS</title>
    
    <center><h1>UPDATED PATIENT DETAILS</h1><HR SIZE="3"  COLOR="BLUE">
    <br>
    <table border=1>
    <tr>
    <th>Patient id </th>
    <th>NAME</th>
    <th>email</th>	
    <th>Blood Group</th>
    <th>Phone No</th>
    <th>Adress </th>
   
    </tr>
    <?php  
   
   // output data of each row
    while($row = $result1->fetch_assoc())
    {
      $i=$row["pid" ];
      echo  "<tr>";
      echo  "<td>" ;echo $row["pid"]; echo"</td>";
      echo "<td>" ;echo $row["pname"]; echo"</td>";
      echo "<td>";echo $row["email"]; echo"</td>";
      echo"<td>";echo $row["blood_group"]; echo"</td>";
      echo "<td>";echo $row["phno"]; echo"</td>";
      echo "<td>";echo $row["address"]; echo"</td>";
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
  </html>
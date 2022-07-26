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
 
  $sql = "SELECT * FROM patient " ;
 
  $result = $conn->query($sql);
  if ($result->num_rows > 0) 
  {
    ?>
    
    <title>PATIENT DETAILS</title>
    <center> <h1>PATIENT DETAILS</h1><HR SIZE="3"  COLOR="BLUE">
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
    while($row = $result->fetch_assoc())
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
  <br>Click here to <a href="alogin.php" tite="GO BACK">Logout</a>

  </html>
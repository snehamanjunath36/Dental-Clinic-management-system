<html>
<head>
<title>
PATIENT UPDATE DETAILS
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
  if(!$conn){
    echo'database no connection';
  die( );
  }
// echo "".$_POST["pid"];
// $_SESSION["pid"] = $row['pid'];

  $sql = "SELECT * FROM patient where pid = '".$_POST['pid']."'" ;
  
  $result = $conn->query($sql);
  if ($result->num_rows > 0) 
  {
    ?>
       <!-- <form action='uppat.php' method='post'> -->

    <center> <h1>Patient Details</h1><HR SIZE="3"  COLOR="BLUE">
    
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
      echo  "<td>" ; echo "".$_POST["pid"] ;echo"</td>";
      echo "<td>" ;echo $row["pname"]; echo"</td>";
      echo "<td>";echo $row["email"]; echo"</td>";
      echo"<td>";echo $row["blood_group"]; echo"</td>";
      echo "<td>";echo $row["phno"]; echo"</td>";
      echo "<td>";echo $row["address"]; echo"</td>";
      ;
    }
    
    ?>


</table>
   <h3>Enter New Details</h3> 

<form action='uppat.php' method='post'>
<table border=1>
<tr><td>PATIENT ID</td><td><?php echo "".$_POST["pid"] ;?></td></tr>
<tr><td>PATIENT NAME</td><td><input type=text name=pname required=yes></input></td></tr>
<tr><td>BLOOD GROUP</td><td><input type=text name=blood_group required=yes></input></td></tr>
<tr><td>EMAIL ID</td><td><input type=text name=email required=yes></input></td></tr>
<tr><td>PHONE NO</td><td><input type=text name=phno required=yes></input></td></tr>
<tr><td>ADDRESS</td><td><input type=text name=address required=yes></input></td></tr>

<tr><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>

</table>
</form>
<?php
  }
  
   else 
  {
    echo "NO SUCH PATIENT GOT ANY TREATEMENT OR APPOINTMENT HERE BEFORE";
  }
  $conn->close();
  ?>
  
  
  <br>Click here to <a href="alogin.php" tite="GO BACK">GO BACK</a> if no need for changing any details


</body>
</center>
</html>
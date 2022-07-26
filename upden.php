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
  $did=$_SESSION['did'];
  $NAME=$_POST['NAME'];
  $qualifi=$_POST['qualifi'];
  $email=$_POST['email'];
  $phno=$_POST['phno'];
      
  $sql = "UPDATE dentist SET NAME='$NAME',email='$email',`qualifi`='$qualifi',`phno`='$phno' WHERE   did = '".$_SESSION['did']."'";
  $sql1 = "SELECT * FROM dentist where did = '$did'" ;

  $result = $conn->query($sql);
  if ($conn->query($sql) === TRUE)
  {
    echo "<script>
				alert('Dentist details updated successfully');
		
				</script>";

  }
  $result1=$conn->query($sql1);
  if($result1->num_rows > 0) 
  {
    ?>
    <title>UPDATED DENTIST DETAILS</title>
    
    <center><h1>UPDATED DENTIST DETAILS</h1><HR SIZE="3"  COLOR="BLUE">
    <br>
    <table border=1>
    <th>did </th>
	<th>NAME</th>
	<th>email</th>	
	<th>qualifi</th>
    <th>phno</th>
 
	</tr>
	<?php
  // output data of each row
  while($row = $result1->fetch_assoc())
  {
    $i=$row["did" ];
    echo  "<tr>";
    echo  "<td>" ;echo $row["did"]; echo"</td>";
    echo "<td>" ;echo $row["NAME"]; echo"</td>";
    echo "<td>";echo $row["email"]; echo"</td>";
    echo"<td>";echo $row["qualifi"]; echo"</td>";
    echo "<td>";echo $row["phno"]; echo"</td>";
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
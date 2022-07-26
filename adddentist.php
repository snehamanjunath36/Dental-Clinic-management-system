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
else
{
	echo "connected to dental clinic";
		
$did=$_POST['did'];
$NAME=$_POST['NAME'];
$qualifi=$_POST['qualifi'];
$email=$_POST['email'];
$phno=$_POST['phno'];
	
		 $sql = "INSERT INTO dentist(did, NAME,qualifi, email, phno) VALUES ('$did','$NAME','$qualifi','$email','$phno')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('dentist details added successfully');
				window.location.href='createdentist.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('dentist registration failed');
				window.location.href='createdentist.php';
				</script>";			
		}
	
}
?>


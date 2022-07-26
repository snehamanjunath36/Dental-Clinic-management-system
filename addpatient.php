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
		
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$email=$_POST['email'];
$blood_group=$_POST['blood_group'];
$address=$_POST['address'];
$phno=$_POST['phno'];
	
		 $sql = "INSERT INTO patient(pid,pname,email,blood_group,address,phno) VALUES ('$pid','$pname','$email','$blood_group','$address','$phno')";
        	
		 echo "<br><br>";
		//  echo $sql;
		
		if ($conn->query($sql) === TRUE)
		{
				echo "<script>
				alert('Patient details added successfully');
				window.location.href='createpatient.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('failed to add Patient details ');
				window.location.href='createpatient.php';
				</script>";			
		}
	
}
?>


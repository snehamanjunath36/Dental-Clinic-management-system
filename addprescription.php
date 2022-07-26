<?php
$servername='localhost';
$username='root';
$password='';
$dbname='dental clinic';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
die('Could not Connect MySql');
}
else
{
	echo "connected to dental clinic";
	session_start();
	$did=$_SESSION["did"];
$treid=$_SESSION['tid'];
$medicine=$_POST['medicine'];
$dosage=$_POST['dosage'];
	//echo $did,$medicine,$dosage;
	echo $treid;
		 $sql = "INSERT INTO prescription(treid, medicine,dosage, did) VALUES ('$treid','$medicine','$dosage','$did')";
        	
		echo "<br><br>";
		 echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{
				echo "<script>
				alert('done with prescription');
				window.location.href='createprescription.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('Failed to add prescription ');
				window.location.href='createprescription.php';
				</script>";			
		}
	
}
?>


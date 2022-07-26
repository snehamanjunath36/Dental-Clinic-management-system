<?php
$servername='localhost';
$username='root';
$password='';
$dbname='dental clinic';
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
//die('Could not Connect MySql:' .$conn->connect_error);
echo'database no connection';
die( );

}
else
{
	echo "connected to dental clinic";
	session_start();	
$tid=$_POST['tid'];
$pid=$_SESSION["pid"];
$treatement=$_POST['treatement'];
$fee=$_POST['fee'];
$did=$_SESSION["did"];
$equipment=$_POST['equipment'];
	
		 $sql = "INSERT INTO treatement (tid, treatement, fee, did, equipment) VALUES ('$tid','$treatement','$fee','$did','$equipment')";
		 $sql1 = "INSERT INTO ptreat (tid,pid) VALUES ('$tid','$pid')";
		 $result = mysqli_query($conn,"SELECT * FROM ptreat WHERE tid='" . $_POST["tid"] . "'");
		 $row  = mysqli_fetch_array($result);
		 
		echo "<br><br>";
		echo $sql;
		
		if ($conn->query($sql) === TRUE) 
		{$conn->query($sql1);
			$_SESSION["tid"] = $_POST['tid'];
			$_SESSION["treid"] = $_POST['treid'];
			
			echo "<script>
				alert('treatement details added successfully');
				window.location.href='createprescription.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('failed to add treatment details');
				window.location.href='createtreatment.php';
				</script>";			
		}
	
}
?>


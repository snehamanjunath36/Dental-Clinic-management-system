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
$aid=$_POST['aid'];
$ADATE=$_POST['ADATE'];
$ATIME=$_POST['ATIME'];
$pid=''.$_SESSION["pid"] ;
$did=$_POST['did'];
		// $sql2="check (date='" . $_POST["ADATE"] . "' exists (select date from appointment) and time='" . $_POST["ATIME"] . "' exists( select time from appointment))";
		$sql = "INSERT INTO appointment(aid, DATE, TIME,pid,did) VALUES ('$aid','$ADATE','$ATIME','$pid','$did')";
        $sql1="INSERT INTO books(aid,pid) VALUES ('$aid','$pid')";	
		echo "<br><br>";
		 echo $sql;
		echo $sql1;
		// if ($conn->query($sql2) === TRUE) 
		// {echo "select any other time ";}
		// else

		{if ($conn->query($sql) === TRUE) 
		{$conn->query($sql1);
				echo "<script>
				alert('Appointment successfull');
				window.location.href='plogin.php';
				</script>";
		} 
		else 
		{	
				echo "error";
				die();
				echo "<script>
				alert('appointment failed');
				window.location.href='createappointment.php';
				</script>";			
		}}
	
}
?>


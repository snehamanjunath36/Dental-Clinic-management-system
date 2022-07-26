<?php
session_start();
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
	
$result = mysqli_query($conn,"SELECT * FROM admin WHERE userid='" . $_POST["userid"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
	
$_SESSION["userid"] = $row['userid'];

				echo "<script>
				alert('Login successfull');
				window.location.href='alogin.php';
				</script>";

} else {
					echo "<script>
				alert('Login failed');
				window.location.href='adminloginpage.php';
				</script>";	

}
}	

?>
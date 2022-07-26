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
	
$result = mysqli_query($conn,"SELECT * FROM patient WHERE pid='" . $_POST["pid"] . "' and pname = '". $_POST["pname"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
	
$_SESSION["pid"] = $row['pid'];

				echo "<script>
				alert('Login successfull');
				window.location.href='plogin.php';
				</script>";

} else {
					echo "<script>
				alert('Login failed');
				window.location.href='patient_login.php';
				</script>";	

}
}	

?>
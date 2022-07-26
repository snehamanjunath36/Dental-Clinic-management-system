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
	
$result = mysqli_query($conn,"SELECT * FROM dentist WHERE did='" . $_POST["did"] . "' and NAME = '". $_POST["NAME"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
	
$_SESSION["did"] = $row['did'];

				echo "<script>
				alert('Login successfull');
				window.location.href='dlogin.php';
				</script>";

} else {
					echo "<script>
				alert('Login failed');
				window.location.href='dentist_login.php';
				</script>";	

}
}	

?>
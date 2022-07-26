<html>
<?php

session_start();
?>
<head>
<title>
Create Prescription details
</title>
</head>
<center>
<body>
<h1>ADD PRESCRIPTION</h1><HR SIZE= " 3"  COLOR="ORANGE">
Enter prescription details
<form action='addprescription.php' method=POST>
<table border=1>
<tr><td>DENTIST ID</td><td><?php echo "".$_SESSION["did"] ;?></td></tr>
<tr><td>TREATEMENT_ID</td><td><?php echo "".$_SESSION["tid"] ;?></td></tr>
<tr><td>MEDICINE</td><td><input type=text name=medicine required=yes></input></td></tr>
<tr><td>DOSAGE</td><td><input type=text name=dosage required=yes></input></td></tr>

<tr><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>

</table>
</form>
</body>
<br>Click here to <a href="dlogin.php" tite="Logout">Logout</a>
</center>
</html>
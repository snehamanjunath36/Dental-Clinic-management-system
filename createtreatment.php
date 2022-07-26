<html>
<?php
session_start();
?>
<head>
<title>
Treatment Details
</title>
</head>
<center>
<body>
<h1>ADD TREATMENET DETAILS</h1><HR SIZE="3"  COLOR="ORANGE">

<form action='addtreatment.php' method=POST>
<table border=1>
<tr><td>DENTIST ID</td><td><?php echo "".$_SESSION["did"] ;?></td></tr>
<tr><td>PATIENT ID</td><td><?php echo"".$_SESSION["pid"] ;?></td></tr>
<tr><td>TREATMENT ID</td><td><input type=text name=tid required=yes></input></td></tr>
<tr><td>FEE</td><td><input type=text name=fee required=yes></input></td></tr>
<tr><td>TREATMENT</td><td><input><select><option>root canal</option><option>teeth cap</option></select></input></td></tr>
<tr><td>EQUIPMENT</td><td><input type=text name=equipment required=yes></input></td></tr>

<tr><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>

</table>
</form>

</body>
</center>
</html>
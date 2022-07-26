<html>
<head>
<title>
Create Dentist details
</title>
</head>
<center>
<body>
<h1>CREATE NEW ACCOUNT</h1><HR SIZE="3"  COLOR="ORANGE">
Enter Dentist details
<form action='adddentist.php' method=POST>
<table border=1>
<tr><td>DENTIST ID</td><td><input type=text name=did required=yes></input></td></tr>
<tr><td>DENTIST NAME</td><td><input type=text name=NAME required=yes></input></td></tr>
<tr><td>QUALIFICATION</td><td><input type=text name=qualifi required=yes></input></td></tr>
<tr><td>EMAIL ID</td><td><input type=text name=email required=yes></input></td></tr>
<tr><td>PHONE NO</td><td><input type=text name=phno required=yes></input></td></tr>

<tr><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>

</table>
</form>
</body>
<br>Click here to <a href="alogin.php" tite="Logout">Logout</a>
</center>
</html>
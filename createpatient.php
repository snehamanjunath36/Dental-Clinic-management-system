<html>
<head>
<title>
Create Patient details
</title>
</head>
<center>
<body>
<h1>CREATE NEW ACCOUNT</h1><HR SIZE="3"  COLOR="ORANGE">

<form action='addpatient.php' method=POST>
<table border=1>
<tr><td>PATIENT ID</td><td><input type=text name=pid required=yes></input></td></tr>
<tr><td>PATIENT NAME</td><td><input type=text name=pname required=yes></input></td></tr>
<tr><td>BLOOD GROUP</td><td><input type=text name=blood_group required=yes></input></td></tr>
<tr><td>EMAIL ID</td><td><input type=text name=email required=yes></input></td></tr>
<tr><td>PHONE NO</td><td><input type=text name=phno required=yes></input></td></tr>
<tr><td>ADDRESS</td><td><input type=text name=address required=yes></input></td></tr>

<tr><td><input type="reset"></input></td><td><input type=submit value=Submit></input></td></tr>

</table>
<h5>note:PATIENT ID MUST BE OF 5 digits.Eg:si015</h5>
</form>
</body>
<br>Click here to <a href="home_page.php" tite="Logout">Logout</a>
</center>
</html>
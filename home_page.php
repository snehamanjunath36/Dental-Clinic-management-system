<html>
<?php
session_start();
?>
<center>

    <head>
        <title>
            DENTAL CLINIC
        </title>
    </head>
<!--  <style> 
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
   img{ height: 400px;
    width: auto;
    
   }
   body{
       width: 100%;
      justify-content: center;
      display: flex;

   }
 table td a{
   border: 1000px;
   text-decoration: none;
   }
   table td h3{
    justify-content: center;
    align-items: center;
    font-size: medium;
    font-weight: 400;
   
   }
   table tr{
    justify-content: center;
    align-items: center;
   }
   table{
       border-collapse: collapse;
      
   }
   td button{
       border:none;
       padding: 7px 20px;
       border-radius: 20px;
       background-color: black;
       color: white;
   }
   h1{
       font-size:40px;
    
   }
   body,h1{
       background-color: Lavender;
       justify-content: center;
    
   }
</style> -->

    <h1>WELCOME TO DENTAL CLINIC HOME PAGE</h1><HR SIZE="3"  COLOR="BLUE">
    <br>

    <body>
        <table>
          <tr><td><img src="den.png" alt="dentist icon"></td></tr> 
          <tr><td><a href='dentist_login.php'><h3>DENTIST</h3></a></td></tr>
        </table>

        <table>
          <td><img src="pat.png" alt="patient icon"></td>
          <tr><td><a href='patient_login.php'><h3>PATIENT</h3></a></td></tr>
        </table>

        <table>
          <td><img src="adm.png" alt="admin icon"></td>
          <tr><td><a href='adminloginpage.php'><h3>ADMIN</h3></a></td></tr>
        </table>



            
        
    </body>
</center>
</html>
<!DOCTYPE html>
 <head>
  <title>Student login</title>
  <style>
   body{
      background-color : powderblue ;
      text-align:center ;
   }
   p{
     font-size:250%;
     padding :30px,40px;
   }
   h1{
     font-size: 300%;
     color:white;
   }

  </style>
 </head>

 <body>
     <h1> STUDENT LOGIN PAGE...</h1>
       <form action='login.php' method='POST'>
       <p>Username : <input type='text' name='username'></p>
       <p>Password : <input type='password' name='password' ></p>
       <input type='submit' name='submit' value='Login' >
       </form><h3>Not registered yet ?
       <a href='register.php'>Register </a></h3>
       <h2><a href="adminlogin.html">Admin page</a></h2>
 </body>
</html>

<?php

//username and  password for admin login is  username='admin' and password='admin'

?>
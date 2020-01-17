<?php
$hostname = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($hostname, $username, $password);
// Check connection
if (!$conn) {
    echo "ERROR";
}
else{
  echo "success";
}
?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>aisehi</title>
   </head>
   <body>
     <form name="form" action="aisehi.php" method="post">
       Name:<input type="text" name="name" value=""><br>
            <input type="submit" name="submit" value="submit">
     </form>
     <?php

     if(isset($_POST['submit'])){
       $name = $_POST['name'];
     }
       $db = "CREATE DATABASE aisehi";
       if(mysqli_query($conn,$db)){
         echo "database created.";
       }
       else{
         echo "Not created database";
       }
       


      ?>
   </body>
 </html>

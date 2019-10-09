<?php
 //  include('session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
       <style>
           #pappu{
              border: 12px solid #4CAF50; border-style:groove;border-radius: 0px 20px 0px 20px; padding:60px;margin:auto;
               
               
               width:80%;
               margin:auto;
               align:center;
           }
           a:link, a:visited { 
  color: (internal value);
  text-decoration: underline;
  cursor: auto;
}

a:link:active, a:visited:active { 
  color: (internal value);
}
       </style>
   </head>
   
   <body>
       <center>
      <h1>Welcome </h1> 
      </center>
       <br><br><br><br><br>
       <h3 id="pappu">
         <li>
             <a href="newstu.php">Add new Student Account</a></li>
           <br>
           <br>
           <li><a href="monstu.php">Substract or Add money to student account </a></li>
           <br>
           <br>
           <li><a href="newsho.php">Add new Shop</a></li>
           <br>
           <br>
           <li> <a href="monsho.php">Substract money from shop account</a></li>
       <br>
       <br>
       </h3>
       
       
             <h2 style="text-align:center;"><a href = "index.php">Sign Out</a></h2>
   </body>
   <?php
     define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'nis');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $shop = mysqli_real_escape_string($db,$_POST['shop']);
      $amt = mysqli_real_escape_string($db,$_POST['amt']); 
      
      $sql = " UPDATE 'details' SET 'balance'=balance - $amt  WHERE username =";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: loggedin.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
       
  
   }
    ?>
</html>
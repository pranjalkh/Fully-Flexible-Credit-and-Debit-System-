

<html>
<head><title>Login</title>
    <style>
        form{
            
            
            text-align: center;
            margin-top: 11%;
        }
        h2
        {
            padding : 15px;
        }
    
        p
        {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            
        }
        button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 10%;
}
        
    
    </style>
    <p><font size="6"> Login Page</font></p>
    <link href="./css/style.css" rel="stylesheet">

</head>
<body>
    
    
    <form action="" method= "POST">
    <h2 style="border: 12px solid #4CAF50; border-style:groove;border-radius: 0px 20px 0px 20px; padding:60px;margin:auto;width:40%;">Username : &nbsp;
         <?php //if(isset($msg)){?>
        <input type= "text" placeholder="Username" id="username" name ="username">
        <br>
      Password :  &nbsp;
        <input type="password" placeholder="Password" id="password" name= "password">
       <br>

       <select name="shop">
           <option value="Enzo">Enzo</option>
           <option value="Benzo">Benzo</option>
           <option value="Balaji">Balaji</option>
           <option value="Saloon">Salon</option>
           <option value="Food Park">Food park</option>
           <option value="DC">DC</option>
           </select>
        
       <input type="number" name="amt">
           <input type="submit"  onclick="return validate();">
       
    </h2>
    </form>
    
</body>
    
    
    <?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname="nis";
//// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 
// Create database
//$sql = "select * from details";
//$result = $conn->query($sql);
//
//if ($result->num_rows > 0) {
//    while($row = $result->fetch_assoc()) {
//        echo "id: " . $row["username"]. " - Name: " . $row["password"]. " " . $row["balance"]. "<br>";
//    }
//} else {
//    echo "Error creating database: " . $conn->error;
//}
    
    define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'nis');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
       $hash=password_hash($mypassword,PASSWORD_DEFAULT);
      $shop = mysqli_real_escape_string($db,$_POST['shop']);
      $amt = mysqli_real_escape_string($db,$_POST['amt']); 
      if(password_verify($mypassword,$hash))
      {
     
       
      $sql = "UPDATE `details` SET `balance`=`balance` - $amt WHERE `username` = '$myusername' " ;
      $sl = "UPDATE `shop` SET `balance`=`balance` + $amt WHERE `name`='$shop'";
      $ss = "SELECT * from `details` WHERE `username` = '$myusername'";
       $gd= mysqli_query($db,$sql);
       $gsd= mysqli_query($db,$sl);
       $result = mysqli_query($db,$ss);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
        $products=  password_get_info($hash);
          foreach($products as $product){
    print_r($product);
}
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         //header("location: loggedin.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
      }
  
   }

?>
</html>
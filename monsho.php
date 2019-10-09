<html>
<head><title>Substract Money From Shop Account</title>
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
    <p><font size="6">Substract Money From Shop Account</font></p>
</head>
<body>
    
    <form action="" method= "POST">
    <h2 style="border: 12px solid #4CAF50; border-style:groove;border-radius: 0px 20px 0px 20px; padding:60px;margin:auto;width:40%;">Shop Name: &nbsp;
        <select name="shop">
           <option value="Enzo">Enzo</option>
           <option value="Benzo">Benzo</option>
           <option value="Balaji">Balaji</option>
           <option value="Saloon">Salon</option>
           <option value="Food Park">Food park</option>
           <option value="DC">DC</option>
           </select>
       <input type="number" name="amt" placeholder="Amount">
           <input type="submit" >
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
 session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['shop']);
        
      $bal = mysqli_real_escape_string($db,$_POST['amt']);

      
       $sql = "UPDATE `shop` SET `balance`=`balance` - '$bal' WHERE `name` = '$myusername' " ;

       $result = mysqli_query($db,$sql);
//      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//      //$active = $row['active'];
//      
//      $count = mysqli_num_rows($result);
//      
//      // If result matched $myusername and $mypassword, table row must be 1 row
//		
//      if($count == 1) {
//         //session_register("myusername");
//         $_SESSION['login_user'] = $myusername;
//         
//         //header("location: loggedin.php");
//      }else {
//         $error = "Your Login Name or Password is invalid";
//      }
  header("location: loggedin.php");
   }

?>
</html>
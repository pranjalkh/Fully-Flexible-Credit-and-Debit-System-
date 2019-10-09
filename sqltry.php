<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="sqltry.php">
	Username : <input type="text" name="usr"><br>
	Password : <input type="password" name="pass">
 
	<button type="submit"> login</button>
</form>
<?php 
$con = mysqli_connect("localhost","root","","dbs");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
echo "Connected successfully";}


$usss = $_POST["usr"];
$passs = $_POST["pass"];
$u="ritveak";
$s="select * from users where username='$u' ";
$result= $con->query($s);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["username"]==$usss && $row["password"]==$passs)
        {
        	echo "sucess";
        }
        else
        {
        	echo "false";
        }

    }
} else {
    echo "0 results";
}
$con->close();?>
</body>
</html>
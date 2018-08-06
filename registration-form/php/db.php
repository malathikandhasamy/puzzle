<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "registerDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = $_POST['name'];
$uname = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$gender = $_POST['optradio'];
$country = $_POST['country'];
$psw = $_POST['password'];
$confirmpassword = $_POST['confirm-pwd'];
// echo($name);
// echo($uname);
// echo($email);
// echo($phonenumber);
// echo($gender);
// echo($country);
// echo($psw);
// echo($confirmpassword);
// $sql = "CREATE TABLE register_form (
// name VARCHAR(30) NOT NULL, 
// uname VARCHAR(30) NOT NULL,
// email VARCHAR(150) NOT NULL UNIQUE,
// phonenumber INT(20) NOT NULL,
// gender VARCHAR(150) NOT NULL,
// country VARCHAR(150) NOT NULL,
// psw VARCHAR(150) NOT NULL,
// confirmpassword VARCHAR(150) NOT NULL
// )";
$sql=" INSERT INTO register_form (name,uname,email,phonenumber,gender,country,psw,confirmpassword) VALUES('$name', '$uname', '$email', '$phonenumber', '$gender', '$country', '$psw', 
'$confirmpassword')";
 if ($conn->query($sql) === TRUE) {
   echo "Your Information successfully added";
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
// $sql= "ALTER TABLE register_form
// MODIFY COLUMN phonenumber nvarchar(20)";
$sql= "SELECT * from register_form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         "Name: " . $row["name"]. " - Username: " . $row["uname"]. "Email:" .$row["email"]. "phonenumber:" .$row["phonenumber"]. "Gender:" .$row["gender"]. "Country:" .$row['country']. "password:" .$row['psw']. "confirmpassword:" .$row['confirmpassword'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
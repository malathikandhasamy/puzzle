<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "registerDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
echo($_POST["data"]);
       // if(isset($_POST["data"]))
       // {
       // 	foreach ($_POST["data"] as $data) 
       // 	{
       // 	$query="DELETE FROM registers WHERE id ='$data'";
       //  mysqli_query($conn,$query);
       // 	}
       // }
?>
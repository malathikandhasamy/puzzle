<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "registerDB";
$conn = new mysqli($servername, $username, $password, $database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
  <div class="row">
  	<div class="col-sm-3"></div>
  	<div class="col-md-6">
  		<div class="view-page">
	  		<h3>Home page</h3>
	  			<button type="button" class="btn btn-default" id="register" onclick="return registerForm();">Add</button>
	  			<button type="button" class="btn btn-default" onclick="return datatableForm();">View</button>
	  			<button type="button" class="btn btn-default">Delete</button>
	  	</div>
  	</div> 	
  </div>
</div>
<table id="user-data">
	<thead>
		<th>name</th>
		<th>uname</th>
		<th>email</th>
		<th>phonenumber</th>
		<th>gender</th>
		<th>country</th>
		<th>id</th>
	</thead>
	<tbody>
		<?php 
		$conn = mysqli_connect("localhost","root","root","registerDB") or die("error in connection");
		$query = mysqli_query($conn , "SELECT * FROM register_form");
		while($result = mysqli_fetch_array($query))
		{
			echo "<tr>
				<td>".$result['name']."</td>
				<td>".$result['uname']."</td>
				<td>".$result['email']."</td>
				<td>".$result['phonenumber']."</td>
				<td>".$result['gender']."</td>
				<td>".$result['country']."</td>
				<td>".$result['id']."</td>
			</tr>";
		}
		?>
		
	</tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script2.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</body>
</html>

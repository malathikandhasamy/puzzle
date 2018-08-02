<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
  		<form action="php/db.php" method="POST">
 			<div class="form-group">
    			<label for="name">Name:</label>
   				<input type="name" class="form-control" id="name" name="name">
   				<span id="nameError"></span>
  			</div>
			<div class="form-group">
			    <label for="username">Username:</label>
			    <input type="name" class="form-control" id="username" name="username">
			    <span id="usernameError"></span>
			</div>
			<div class="form-group">
			    <label for="email">Email:</label>
			    <input type="text" class="form-control" id="email" name="email">
			     <span id="emailError"></span>
			</div>
			<div class="form-group">
			    <label for="phone-no">Phonenumber:</label>
			    <input type="name" class="form-control" id="phonenumber" maxlength="10" name="phonenumber">
			     <span id="phoneError"></span>
			</div>
			<div class="form-group">
			  	<label for="gender">Gender:</label>
				<div class="radio">
			   	<label><input type="radio" name="optradio" value="male">Male</label>
				</div>
			<div class="radio">
			  	<label><input type="radio" name="optradio" value="female">Female</label>
			</div>
    		<label for="country">Country</label>
    		<select class="form-control" id="country" name="country">
    			<option></option>
		      <option>Afghanistan.</option>
		      <option>Canada</option>
		      <option>India</option>
		      <option>Singapore</option>
		      <option>China</option>
		    </select>
			<div class="form-group">
			   <label for="pwd">Password:</label>
			   <input type="password" class="form-control" id="password" name="password">
			   <span id="passwordError"></span>
			</div>
			<div class="form-group">
			   <label for="confirm-pwd">Confirm Password:</label>
			   <input type="password" class="form-control" id="confirm-pwd" name="confirm-pwd">
			    <span id="confirmpasswordError"></span>
			</div>
			<!-- <div class="checkbox">
			    <label><input type="checkbox"> Remember me</label>
			</div> -->
			<input type="submit" class="btn btn-info" value="submit" onclick="return regfo();">
		</form>
		</div>
	</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script2.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Form register</title>
	<style type="text/css">
		span {
			color: red;
		}
	</style>
</head>
<body>
	<?php 
	$conn = '';
	$errName = $errUsername = $errPass = $errGender = $errCity = '';
	$name = $username = $password = $gender = $city = '';
	if(isset($_POST['register'])) {
		$name     = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$gender = isset($_POST['gender'])?$_POST['gender']:'';
		$city   = isset($_POST['city'])?$_POST['city']:'';
		if($name == '') {
			$errName = 'Please input your name';
		}
		if($username == '') {
			$errUsername = 'Please input your username';
		}
		if($password == '') {
			$errPass = 'Please input your password';
		}
		if($gender == '') {
			$errGender = 'Please choose gender';
		}
		if($city == '') {
			$errCity = 'Please choose city';
		}
	} 	
	if ($name == '' || $username == ''|| $password == ''|| $gender == ''|| $city == ''){
		echo "<h3>Input information</h3>";
	}
	else {
		$conn = mysqli_connect('127.0.0.1','root','', 'test');
	}

	echo "<br>";

	if(!$conn){
		echo 'Not connect';
	}
	elseif(!mysqli_select_db($conn,'test')){
		echo 'Data base not select';
	}
	$sql = "INSERT INTO register (name, username, password, gender, city) VALUES ('$name', '$username', '$password', '$gender', '$city')";

	echo "<br>";
	if(!mysqli_query ($conn, $sql)){
		echo "Not Success";
	} else{
		echo "Success";
	}
	?>
	<h1>Register form</h1>
	<form action="#" method="post">
		<p>Name:<input type="text" name="name" 
		value="<?php echo $name?>">
			<span><?php echo $errName;?></span>
		</p>
		<p>Username:<input type="text" name="username"
		value="<?php echo $username?>">
			<span><?php echo $errUsername;?></span>
		</p>
		<p>Password:<input type="password" name="password"
		value="<?php echo $password?>">
			<span><?php echo $errPass;?></span>
		</p>
		<p>Gender:
		<input type="radio" name="gender" value="male"
		<?php if($gender == 'male'){echo "checked";}?>> Male
		<input type="radio" name="gender" value="female"
		<?php if($gender == 'female'){echo "checked";}?>> Female
		<span><?php echo $errGender;?></span>
		</p>
		<p>City:
			<select name="city">
				<option value="">Choose city</option>
				<option value="dn">Da Nang</option>
				<option value="hn">Ha Noi</option>
				<option value="hcm">Ho Chi Minh</option>
			</select>
			<span><?php echo $errCity;?></span>
		</p>
		<input type="submit" name="register" value="Register">
	</form>
</body>
</html>
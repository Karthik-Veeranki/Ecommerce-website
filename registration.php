<!--
	The 'registration.php' page contains the backend logic of taking the user registration credentials to create their account.
	First we connect to the database (SQL server) and then insert the user data into the 'users' table 
	With a successful registration, the user will be re-directed to the Login page of the shopping site (login.html)
-->
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// input data from the users
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	// hash the password because we shouldn't store the password directly
	//$hash_password = password_hash($password, PASSWORD_DEFAULT);

	// database information
	$host = "localhost";
	$database = "shopping";
	$username_db = "root";
	$password_db = "";

	try
	{

		// now we need to connect to the MySQL database
		$db = new PDO(
			"mysql:host=$host;dbname=$database", 
			$username_db, $password_db);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//we are now connected with MySQL, and need to insert the data into table
		$cursor = $db->prepare(
			"INSERT INTO users (username, email, password)
			 VALUES(:username, :email, :password)"
		);
		$cursor->bindParam(":username", $username);
		$cursor->bindParam(":email", $email);
		$cursor->bindParam(":password", $password);
		$cursor->execute();

		// Display success message onto the screen
		echo "Account created successfully!";
		echo "Redirecting to login page";
		header("refresh: 2; url=login.html");
	}

	catch(PDOException $e)
	{
		echo "Connection failed: " .$e->getMessage();
	}

}
?>
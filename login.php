<!--
	The 'login.php' page contains the backend logic of taking the user login credentials and redirect them to 'Home' page
	First we connect to the database (SQL server) and check if the entered details are matching with one of the already existing accounts.
	With a successful login, the user will be re-directed to the Home page of the shopping site (shopping.php)
-->
<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	// input data from the customer
	$username = $_POST["username"];
	$password = $_POST["password"];

	// database information
	$host = "localhost";
	$database = "shopping";
	$username_db = "root";
	$password_db = "";

	try
	{
		// now, connect to the MySQL database using PDO connection
		$db = new PDO(
			"mysql:host=$host;dbname=$database",
			$username_db, $password_db);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		// We are now connected to the database, need to check if the entered login credentials are present in the database or not
		$cursor = $db->prepare(
			"SELECT * FROM users 
			 WHERE username = :username;"
		);
		$cursor->bindParam(":username", $username);
		$cursor->execute();

		// If the username matches with one of the customers in the database, we check for the password
		$user = $cursor->fetch(PDO::FETCH_ASSOC);

		if($user)
		{
			// Check for the password
			if(strcasecmp($password, $user["password"]) === 0)
			//if(password_verify($password,$user["password"]))
			{
				// if both the username and password entered are verified, you will be directed to the homepage of website
				session_start();
				$_SESSION["user"] = $user;

				// directing to main webpage
				echo '<script type = text/javascript>
						window.onload = function()
						{
							window.alert("!!Welcome to bamazon shopping!!");
							window.location.href = "shopping.php";
						};
					  </script>';
			}

			// if the password doesn't match, we display appropriate message onto the screen
			else
			{
				echo "<h1>Login failed!!</h1>";
				echo "Incorrect credentials";
			}
		}

		// if no such username exists, we display appropriate message onto the screen
		else 
		{
			echo "<h1>Login Falied!!</h1>";
			echo "Username doesn't exist";
		}
		
	}
	catch(PDOException $e)
	{
		echo "Connection failed : " .$e->getMessage();
	}
}

?>